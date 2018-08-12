<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

/**
 * Home 页的设置文字
 * Class SettingsHomeTableSeeder
 */
class SettingsTableHomeSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        //主页 相关
        $setting = $this->findSetting('glb.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '站点名字',
                'value' =>'常州格力博有限公司(广州分部)',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'GLB',
            ])->save();
        }


        $setting = $this->findSetting('glb.logo');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '站点 LOGO',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 2,
                'group' => 'GLB',
            ])->save();
        }

        $setting = $this->findSetting('glb.home');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '主页',
                'value' =>'主页',
                'details' => '导航栏 上 主页 的显示文字',
                'type' => 'text',
                'order' => 3,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.products');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '导航栏_产品',
                'value' =>'产品',
                'details' => '导航栏 上 产品 的显示文字',
                'type' => 'text',
                'order' => 4,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.gallery');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '导航栏_画廊',
                'value' =>'图片欣赏',
                'details' => '导航栏 上 画廊 的显示文字',
                'type' => 'text',
                'order' => 5,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.news');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '导航栏_动态',
                'value' =>'最新动态',
                'details' => '导航栏 上 动态 的显示文字',
                'type' => 'text',
                'order' => 6,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.about');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '导航栏_关于我们',
                'value' =>'关于我们',
                'details' => '导航栏 上 关于我们 的显示文字',
                'type' => 'text',
                'order' => 7,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.contact');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '导航栏_关于我们',
                'value' =>'联系我们',
                'details' => '导航栏 上 关于我们 的显示文字',
                'type' => 'text',
                'order' => 8,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.close');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '关闭(在手机上显示时)',
                'value' =>'关闭 x ',
                'details' => '如在小屏幕上显示时,导航栏上 关闭 的显示文字',
                'type' => 'text',
                'order' => 9,
                'group' => 'GLB',
            ])->save();
        }

        $setting = $this->findSetting('glb.big_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '首页大图片(建议 1200x800)',
                'value' => 'https://www.w3schools.com/w3images/mac.jpg',
                'details' => '站点的首页大图片',
                'type' => 'image',
                'order' => 10,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.big_image_text1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '首页图片上的标题文字',
                'value' =>'格力博',
                'details' => '首页图片上的标题文字',
                'type' => 'text',
                'order' => 11,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.big_image_text2');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '首页图片上的说明文字',
                'value' =>'让生活更美好',
                'details' => '首页图片上的说明文字',
                'type' => 'text',
                'order' => 12,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.big_image_bt_text');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '首页图片上的按钮文字',
                'value' =>'访问常州总公司网站',
                'details' => '首页图片上的按钮说明文字',
                'type' => 'text',
                'order' => 13,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.big_image_bt_url');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '首页图片上的按钮 RUL',
                'value' =>'http://www.greenworkstools.cn/',
                'details' => '首页图片上的按钮 RUL',
                'type' => 'text',
                'order' => 14,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.button_more');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '查看更多 按钮',
                'value' =>'查看更多',
                'details' => '查看更多 按钮上的文字',
                'type' => 'text',
                'order' => 15,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.button_detail');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '查看详细 按钮',
                'value' =>'查看详细',
                'details' => '查看详细 按钮上的文字',
                'type' => 'text',
                'order' => 16,
                'group' => 'GLB',
            ])->save();
        }
        $setting = $this->findSetting('glb.paginate');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '每页显示的个数(如 产品列表 和 新闻列表 页)(范围 3-100 )',
                'value' =>'10',
                'details' => '每页显示的个数(如 product 和 news 页)',
                'type' => 'text',
                'order' => 17,
                'group' => 'GLB',
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
