<?php

use Illuminate\Database\Seeder;

use TCG\Voyager\Models\Setting;

/**
 * Product 页文字的设置
 * Class SettingsTableProductSeeder
 */
class SettingsTableNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Gallery 相关
        $setting = $this->findSetting('news.news_home_show');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '动态 在主页上显示(请填 yes 或 no)',
                'value' =>'yes',
                'details' => '最新动态 是否在主页上显示',
                'type' => 'text',
                'order' => 1,
                'group' => 'News',
            ])->save();
        }

        $setting = $this->findSetting('news.news_title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '动态的总标题',
                'value' =>'最新动态信息',
                'details' => '动态页和主页上显示的动态的标题',
                'type' => 'text',
                'order' => 2,
                'group' => 'News',
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
