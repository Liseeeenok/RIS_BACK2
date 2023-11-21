<?php namespace Xeor\YandexWebmaster\ReportWidgets;

use Log;
use Backend\Classes\ReportWidgetBase;
use Xeor\YandexWebmaster\Classes\Api;

class Geo extends ReportWidgetBase
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
                'title' => 'backend::lang.dashboard.widget_title_label',
                'default' => e(trans('xeor.yandexwebmaster::lang.widgets.title_geo')),
                'type' => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'reportSize' => [
                'title' => 'Chart radius',
                'default' => '150',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Please specify the chart size as an integer value.'
            ],
            'center' => [
                'title' => 'Center the chart',
                'type' => 'checkbox'
            ],
            'legendAsTable' => [
                'title' => 'Display legend as a table',
                'type' => 'checkbox',
                'default' => 1
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
            ]
        ];
    }

    protected function loadData()
    {
        $days = $this->property('days');
        $counter_id = Api::getCounterForCurrentSite();
        $data = Api::geoChart($counter_id, $days);
        if ($data === FALSE) {
            $this->vars['total'] = 0;
            $this->vars['rows'] = array();
        }
        else {
            $this->vars['total'] = $data['sum'];
            $this->vars['rows'] = $data['chart'];
        }
    }
}