<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class MySettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('generate.title2');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.title'),
                'value' => __('voyager::seeders.settings.site.title'),
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Generate',
            ])->save();
        }


        $setting = $this->findSetting('generate.logo2');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.logo'),
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Generate',
            ])->save();
        }


    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
