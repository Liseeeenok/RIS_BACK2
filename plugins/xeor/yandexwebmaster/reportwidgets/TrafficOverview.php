<?php namespace Xeor\YandexWebmaster\ReportWidgets;

use Log;
use Backend\Classes\ReportWidgetBase;
use Xeor\YandexWebmaster\Classes\Api;

class TrafficOverview extends ReportWidgetBase
{
    /**
     * Renders the widget.
     */
    public function render()
    {
        $this->loadData();
        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => e(trans('xeor.yandexwebmaster::lang.widgets.title_traffic_overview')),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'days' => [
                'title' => 'Number of days to display data for',
                'type' => 'dropdown',
                'default' => 'day',
                'placeholder' => 'Select units',
                'options' => [
                    'day' => 'Today',
                    'week' => 'Week',
                    'month' => 'Month'
                ]
            ],
        ];
    }

    protected function loadData()
    {
        $days = $this->property('days');
        $counter_id = Api::getCounterForCurrentSite();
        $data = Api::visitsChart($counter_id, $days);
        if ($data === FALSE) {
            $this->vars['rows'] = array();
        }
        else {
            $this->vars['rows']['page_views'] = $data['page_views'];
            $this->vars['rows']['visitors'] = $data['visitors'];
            $this->vars['rows']['new_visitors'] = $data['new_visitors'];
        }
    }
}