<?php namespace Xeor\YandexWebmaster\Components;

use Cms\Classes\ComponentBase;
use Xeor\YandexWebmaster\Models\YandexWebmasterSettings;

class YandexWebmaster extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'xeor.yandexwebmaster::lang.yandexwebmaster.name',
            'description' => 'xeor.yandexwebmaster::lang.yandexwebmaster.description'
        ];
    }

    public function onRender()
    {
        // Using settings
        $settings = YandexWebmasterSettings::instance();
        $this->page['webmaster'] = $settings->webmaster;
    }

}