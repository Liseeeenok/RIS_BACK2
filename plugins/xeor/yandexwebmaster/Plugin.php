<?php namespace Xeor\YandexWebmaster;

use System\Classes\PluginBase;
use Backend\Classes\FormField;

class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'xeor.yandexwebmaster::lang.plugin.name',
            'description' => 'xeor.yandexwebmaster::lang.plugin.description',
            'author' => 'Sozonov Alexey',
            'icon' => 'icon-area-chart'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Xeor\YandexWebmaster\Components\YandexMetrika' => 'metrika',
            'Xeor\YandexWebmaster\Components\YandexWebmaster' => 'webmaster'
        ];
    }

    /**
     * Registers report widgets for this plugin.
     *
     * @return array
     */
    public function registerReportWidgets()
    {
        return [
            'Xeor\YandexWebmaster\ReportWidgets\TrafficSources' => [
                'label'   => 'xeor.yandexwebmaster::lang.widgets.title_traffic_sources',
                'context' => 'dashboard'
            ],
            'Xeor\YandexWebmaster\ReportWidgets\TrafficOverview' => [
                'label'   => 'xeor.yandexwebmaster::lang.widgets.title_traffic_overview',
                'context' => 'dashboard'
            ],
            'Xeor\YandexWebmaster\ReportWidgets\SearchPhrases' => [
                'label'   => 'xeor.yandexwebmaster::lang.widgets.title_search_phrases',
                'context' => 'dashboard'
            ],
            'Xeor\YandexWebmaster\ReportWidgets\PopularContent' => [
                'label'   => 'xeor.yandexwebmaster::lang.widgets.title_popular_content',
                'context' => 'dashboard'
            ],
            'Xeor\YandexWebmaster\ReportWidgets\Geo' => [
                'label'   => 'xeor.yandexwebmaster::lang.widgets.title_geo',
                'context' => 'dashboard'
            ],
            'Xeor\YandexWebmaster\ReportWidgets\Gender' => [
                'label'   => 'xeor.yandexwebmaster::lang.widgets.title_gender',
                'context' => 'dashboard'
            ],
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'xeor.yandexwebmaster.access_settings' => ['tab' => 'xeor.yandexwebmaster::lang.plugin.tab', 'label' => 'xeor.yandexwebmaster::lang.plugin.access_settings']
        ];
    }

    /**
     * Registers settings for this plugin.
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'xeor.yandexwebmaster::lang.settings.menu_label',
                'description' => 'xeor.yandexwebmaster::lang.settings.menu_description',
                'category' => 'Yandex',
                'icon' => 'icon-area-chart',
                'class' => 'Xeor\YandexWebmaster\Models\YandexWebmasterSettings',
                'order' => 9999,
                'permissions' => ['xeor.yandexwebmaster.access_settings'],
            ]
        ];
    }
}
