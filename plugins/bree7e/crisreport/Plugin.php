<?php namespace Bree7e\CrisReport;

use Backend;
use Event;
use System\Classes\PluginBase;

/**
 * cris Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Массив, содержажий плагины из официального репозитария, 
     * необходимые для работы данного плагина
     *
     * @var array
     */
    public $require = [
        'Bree7e.Cris'
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'CRIS Reports',
            'description' => 'Отчёты системы учёта публикаций',
            'author'      => 'Alexandr Vetrov',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            Components\RaspilReport::class => 'crisReport', 
            Components\YearReport::class   => 'yearReport', 
            Components\Report33::class     => 'report33',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [];
    }
}