<?php

use Illuminate\Database\Seeder;

use TCG\Voyager\Models\Setting;

/**
 * Product 页文字的设置
 * Class SettingsTableProductSeeder
 */
class SettingsTableGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Gallery 相关
        $setting = $this->findSetting('gallery.gallery_home_show');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '画廊 在主页上显示(请填 yes 或 no)',
                'value' =>'yes',
                'details' => '画廊的图片是否在主页上显示',
                'type' => 'text',
                'order' => 1,
                'group' => 'Gallery',
            ])->save();
        }

        $setting = $this->findSetting('gallery.gallery_title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '画廊的总标题',
                'value' =>'我们的风采',
                'details' => '画廊页和主页上显示的画廊的标题',
                'type' => 'text',
                'order' => 2,
                'group' => 'Gallery',
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
