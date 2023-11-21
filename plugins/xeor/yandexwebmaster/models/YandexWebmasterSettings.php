<?php namespace Xeor\YandexWebmaster\Models;

use Model;

class YandexWebmasterSettings extends Model {

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'xeor_yandex_fields';

    public $settingsFields = 'fields.yaml';

}