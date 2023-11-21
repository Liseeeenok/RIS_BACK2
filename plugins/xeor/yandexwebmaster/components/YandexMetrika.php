<?php namespace Xeor\YandexWebmaster\Components;

use Cms\Classes\ComponentBase;
use Xeor\YandexWebmaster\Models\YandexWebmasterSettings;

class YandexMetrika extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'xeor.yandexwebmaster::lang.yandexmetrika.name',
            'description' => 'xeor.yandexwebmaster::lang.yandexmetrika.description'
        ];
    }

    public function onRender()
    {
        // Using settings
        $settings = YandexWebmasterSettings::instance();
        $this->page['metrika'] = $settings->metrika;
    }

}