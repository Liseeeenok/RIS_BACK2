<?php namespace Xeor\YandexWebmaster\Classes;

use Log;
use Xeor\YandexServicesAuth\Classes\YandexServicesAuthApi;
use Xeor\YandexWebmaster\Models\YandexWebmasterSettings;

class Api
{

    /**
     * Quantity of popular search phrases.
     */
    const SEARCH_PHRASES_QUANTITY = 12;

    /**
     * Quantity of popular content lines.
     */
    const POPULAR_CONTENT_COUNT = 30;

    /**
     * Converts filter value to date range array.
     *
     * @param string $filter
     *    Date range filter: (day, yesterday, week, month).
     *
     * @return array
     *    Format: array(
     *      'start_date' => 'YYYYMMDD',
     *      'end_date' => 'YYYYMMDD',
     *      'group' => 'week' // [optional]
     *   );
     */
    protected static function filterToDateRange($filter) {
        switch ($filter) {
            case 'day':
                return array(
                    'start_date' => date('Ymd'),
                    'end_date' => date('Ymd'),
                );
            case 'yesterday':
                return array(
                    'start_date' => date('Ymd', time() - 60 * 60 * 24),
                    'end_date' => date('Ymd', time() - 60 * 60 * 24),
                );
            case 'week':
            default:
                return array(
                    'start_date' => date('Ymd', time() - 60 * 60 * 24 * 6),
                    'end_date' => date('Ymd'),
                );
            case 'month':
                return array(
                    'start_date' => date('Ymd', time() - 60 * 60 * 24 * 31),
                    'end_date' => date('Ymd'),
                    //'group' => 'week',
                );
        }
    }

    /**
     * Retrieves analytic information from Yandex.Metrica.
     *
     * @param string $service_uri
     *    Short uri of service.
     * @param array $parameters
     *    Associative array with parameters.
     * @param string $result_type
     *    Result type (json, xml).
     */
    protected static function retreiveData($service_uri, $parameters = array(), $result_type = 'json') {
        $parameters['oauth_token'] = YandexServicesAuthApi::authInfo('token');
        $query_parts = array();
        foreach ($parameters as $key => $value) {
            $query_parts[$key] = $value;
        }
        $query = http_build_query($query_parts);
        $result = @file_get_contents('https://api-metrika.yandex.ru'  . $service_uri . '.' . $result_type . '?' . $query);
        return $result;
    }

    /**
     * Gets counter ID for the current site from Yandex.Metrica.
     */
    public static function getCounterForCurrentSite() {
        $settings = YandexWebmasterSettings::instance();
        $counter_id = $settings->yandex_metrics_reports_counter_id;
        /*if (!is_null($counter_id)) {
            return $counter_id;
        }*/
        $result = self::retreiveData('/management/v1/counters', array('field' => 'mirrors'));
        if ($result === FALSE) {
            Log::warning('Yandex: Counters request seems to be fail.');
            return FALSE;
        }
        $counters = json_decode($result);
        $current_host = $_SERVER['HTTP_HOST'];
        // Try to decode national domain.
        $decoded_domain = self::idnaDecode($current_host);
        if ($decoded_domain != FALSE && $decoded_domain != $current_host) {
            $current_host = $decoded_domain;
        }
        // Collect all registered domains and their mirrors for all counters.
        $registered_hosts = array();
        foreach ($counters->counters as $counter) {
            // If current host is the main counter host.
            if ($counter->site == $current_host) {
                $settings->yandex_metrics_reports_counter_id = $counter->id;
                $settings->save();
                return $counter->id;
            }
            // If current host is in site mirrors.
            if (isset($counter->mirrors) && in_array($current_host, $counter->mirrors)) {
                $settings->yandex_metrics_reports_counter_id = $counter->id;
                $settings->save();
                return $counter->id;
            }
            // Include counter host and mirrors to the $registered_hosts array
            // in case current host doesn't belong to the counter.
            if (isset($counter->site) && isset($counter->mirrors)) {
                $registered_hosts[] = $counter->site;
                $registered_hosts = array_merge($registered_hosts, $counter->mirrors);
            }
        }
        Log::warning('The site host does not belong to any Yandex.Metrika counter of the account.');
        return FALSE;
    }

    /**
     * Decode ASCII 'xn--*' domain name to Unicode national domain name.
     */
    protected static function idnaDecode($domain) {
        // Include the class
        require_once __DIR__ . '/idna_convert.class.php';
        // Instantiate it
        $idn = new idna_convert();
        return $idn->decode($domain);
    }

    /**
     * The function generates pie chart with traffic sources summary.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function sourcesChart($counter_id, $filter) {
        $date_range = self::filterToDateRange($filter);
        $parameters = array(
            'preset' => 'sources_summary',
            'metrics' => 'ym:s:visits',
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );
        //$results = self::retreiveData('/stat/sources/summary', $parameters);
        $results = self::retreiveData('/stat/v1/data', $parameters);
        $summary = json_decode($results, true);
        if (empty($summary['data'])) {
            return FALSE;
        }
        $return = array();
        $return['sum'] = $sum = array_sum($summary['totals']);
        $i = 1;
        foreach ($summary['data'] as $data) {
            $dimensions = $data['dimensions'];
            $name = $dimensions[0]['name'];
            if (count($dimensions) > 1) {
                foreach ($dimensions as $index => $dimension) {
                    if ($index > 0 && $dimension['name'])
                        $name .= ' → ' .  $dimension['name'];
                }
            }
            $sources_leneged = $i . '. ' . $name . ' (' . round(array_sum($data['metrics']) * 100 / $sum) . '%' . ')';
            $chart[] = array(
                'sources' => $sources_leneged,
                'visits' => (int) array_sum($data['metrics']),
            );
            $i++;
        }
        $return['chart'] = $chart;
        return $return;
    }

    /**
     * Generates chart with information about page views, visitors and new visitors.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function visitsChart($counter_id, $filter) {
        $date_range = self::filterToDateRange($filter);
        $parameters = array(
            'preset' => 'traffic',
            'group' => 'day',
            'metrics' => 'ym:s:pageviews,ym:s:visits,ym:s:users,ym:s:percentNewVisitors',
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );
        if (isset($date_range['group'])) {
            $parameters['group'] = $date_range['group'];
        }
        //$results = self::retreiveData('/stat/traffic/summary', $parameters);
        $results = self::retreiveData('/stat/v1/data', $parameters);
        $visits = json_decode($results, true);
        if (empty($visits['data'])) {
            return FALSE;
        }
        $points = array();
        foreach ($visits['data'] as $index => $data) {
            $dimensions = end($data['dimensions']);
            $metrics = $data['metrics'];

            $timestamp = strtotime($dimensions['id']) * 1000;

            // Views
            $page_views_point = [
                $timestamp,
                (int) $metrics[0]
            ];
            $points['page_views'][$index] = $page_views_point;
            if (count($visits['data']) == 1) {
                $points['page_views'][$index+1] = $page_views_point;
            }

            // Visitors
            $visitors_point = [
                $timestamp,
                (int) $metrics[2]
            ];
            $points['visitors'][$index] = $visitors_point;
            if (count($visits['data']) == 1) {
                $points['visitors'][$index+1] = $visitors_point;
            }

            // New visitors
            $new_visitors_point = [
                $timestamp,
                (int) round($metrics[3]*$metrics[2]/100)
            ];
            $points['new_visitors'][$index] = $new_visitors_point;
            if (count($visits['data']) == 1) {
                $points['new_visitors'][$index+1] = $new_visitors_point;
            }

        }
        $return['page_views'] = substr(substr(json_encode(array_values($points['page_views'])), 1), 0, -1);
        $return['visitors'] = substr(substr(json_encode(array_values($points['visitors'])), 1), 0, -1);
        $return['new_visitors'] = substr(substr(json_encode(array_values($points['new_visitors'])), 1), 0,  -1);
        return $return;
    }

    /**
     * The function generates content of search phrases table ordered by popularity.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     *
     * @return mixed
     *    Content table.
     */
    public static function searchPhrases($counter_id, $filter) {
        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'preset' => 'sources_search_phrases',
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        //$results = self::retreiveData('/stat/sources/phrases', $parameters);
        $results = self::retreiveData('/stat/v1/data', $parameters);
        $phrases = json_decode($results, true);

        if (empty($phrases['data'])) {
            return FALSE;
        }

        $return = [];
        $phrasesTotalsVisits = $phrases['totals'][0];

        $i = 1;
        foreach ($phrases['data'] as $data) {
            if ($i > self::SEARCH_PHRASES_QUANTITY) {
                break;
            }
            $dimensions = $data['dimensions'];
            $metrics = $data['metrics'];
            $percentage = round(100 * $metrics[0] / $phrasesTotalsVisits, 2) . '%';
            $return[] = array($percentage, $dimensions[0]['name']);
            $i++;
        }

        return $return;
    }

    /**
     * The function generates the table of popular content.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function popularContent($counter_id, $filter) {

        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'id' => $counter_id,
            'preset' => 'popular',
            'metrics' => 'ym:pv:pageviews',
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        //$results = self::retreiveData('/stat/content/popular', $parameters);
        $results = self::retreiveData('/stat/v1/data', $parameters);
        $content = json_decode($results, true);

        if (empty($content['data'])) {
            return FALSE;
        }

        $return = [];

        $i = 1;
        foreach ($content['data'] as $data) {
            if ($i > self::POPULAR_CONTENT_COUNT) {
                break;
            }
            $dimensions = $data['dimensions'];
            $value = end($dimensions);
            $metrics = $data['metrics'];
            $page_views = (int) end($metrics);
            $return[] = array('<a href="' . $value['name'] . '" target="_blank">' . $value['name'] . '</a>', $page_views);
            $i++;
        }

        return $return;
    }

    /**
     * The function generates pie chart with geographical information on visitors.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function geoChart($counter_id, $filter) {

        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'id' => $counter_id,
            'preset' => 'geo_country',
            'metrics' => 'ym:s:visits',
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        //$results = self::retreiveData('/stat/geo', $parameters);
        $results = self::retreiveData('/stat/v1/data', $parameters);
        $geo = json_decode($results, true);
        if (empty($geo['data'])) {
            return false;
        }

        $return = [];
        $return['sum'] = $total_visits = end($geo['totals']);

        $i = 1;
        $sum_visits = 0;
        foreach ($geo['data'] as $data) {
            $dimensions = $data['dimensions'];
            $name = $dimensions[0]['name'];

            if (count($dimensions) > 1) {
                foreach ($dimensions as $index => $dimension) {
                    if ($index > 0 && $dimension['name'])
                        $name .= ' → ' .  $dimension['name'];
                }
            }

            $metrics = $data['metrics'];

            $visits = (int) end($metrics);

            if ($i > 10) {
                $others_visits = $total_visits - $sum_visits;

                $chart[] = array(
                    'country' => e(trans('xeor.yandexwebmaster::lang.widgets.others')),
                    'visits' => $others_visits,
                );

                break;
            }

            $sum_visits += $visits;

            $chart[] = array(
                'country' => $name,
                'visits' => $visits,
            );

            $i++;
        }
        $return['chart'] = $chart;
        return $return;
    }

    /**
     * The function generates pie chart with demography information.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function genderChart($counter_id, $filter) {

        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'id' => $counter_id,
            'preset' => 'age_gender',
            'metrics' => 'ym:s:visits',
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        //$results = self::retreiveData('/stat/demography/structure', $parameters);
        $results = self::retreiveData('/stat/v1/data', $parameters);
        $demography = json_decode($results, true);
        if (empty($demography['data'])) {
            return false;
        }

        $totals = end($demography['totals']);

        $labelCounter = 1;
        $sumVisits = 0;
        foreach ($demography['data'] as $data) {
            $dimensions = $data['dimensions'];
            $age = $dimensions[0]['name'];
            $nameGender = $dimensions[1]['name'];

            $metrics = $data['metrics'];
            $visits = (int) end($metrics);

            $visitsPercent = round($visits * 100 / $totals, 2);
            $sumVisits += $visits;
            $genderLegend = $labelCounter . '. ' . $nameGender . '/' . $age . '—' . $visitsPercent . '%';
            $chart[] = array(
                'gender' => $genderLegend,
                'visits' => $visits,
            );

            $labelCounter++;
        }

        $return['sum'] = $sumVisits;
        $return['chart'] = $chart;
        return $return;
    }

}
