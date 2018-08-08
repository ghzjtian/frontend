<?php

use Illuminate\Database\Seeder;

use TCG\Voyager\Models\Setting;

/**
 * Product 页文字的设置
 * Class SettingsTableProductSeeder
 */
class SettingsTableProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product 相关
        $setting = $this->findSetting('product.product_home_show');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '产品在主页上显示(请填 yes 或 no)',
                'value' =>'yes',
                'details' => '产品的信息是否在主页上显示',
                'type' => 'text',
                'order' => 1,
                'group' => 'Product',
            ])->save();
        }

        $setting = $this->findSetting('product.product_title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '产品的总标题',
                'value' =>'我们的产品',
                'details' => '产品页和主页上显示的产品的标题',
                'type' => 'text',
                'order' => 2,
                'group' => 'Product',
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
