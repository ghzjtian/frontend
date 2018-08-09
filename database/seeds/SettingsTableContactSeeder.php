<?php

use Illuminate\Database\Seeder;

use TCG\Voyager\Models\Setting;

class SettingsTableContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //About 相关
        $setting = $this->findSetting('contact.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '联系我们 的标题',
                'value' => '联系我们',
                'details' => '联系我们 显示的标题',
                'type' => 'text',
                'order' => 1,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.location');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '联系地址',
                'value' => '广东省广州市海珠区黄埔村北码头28号 M+创工场5号楼202，格力博有限公司',
                'details' => '公司的地址',
                'type' => 'text',
                'order' => 2,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.phone');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '联系电话',
                'value' => '+86 020 xxxxxxxx',
                'details' => '联系电话',
                'type' => 'text',
                'order' => 3,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.email');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '电子邮件',
                'value' => 'jingtian.zeng@globetools.com',
                'details' => '联系 email',
                'type' => 'text',
                'order' => 4,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.input_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '反馈框中名字的显示内容',
                'value' => '姓名',
                'details' => '输入框的名字',
                'type' => 'text',
                'order' => 5,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.input_email');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '反馈框中 email 的显示内容',
                'value' => '电子邮件',
                'details' => '输入框的email',
                'type' => 'text',
                'order' => 6,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.input_subject');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '反馈框中 主题 的显示内容',
                'value' => '主题',
                'details' => '主题',
                'type' => 'text',
                'order' => 7,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.input_message');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '反馈框中 信息 的显示内容',
                'value' => '信息内容',
                'details' => '信息内容',
                'type' => 'text',
                'order' => 8,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.input_send');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '反馈框中 发送 的显示内容',
                'value' => '发送',
                'details' => '发送',
                'type' => 'text',
                'order' => 9,
                'group' => 'Contact',
            ])->save();
        }
        $setting = $this->findSetting('about.detail');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '关于我们 描述信息',
                'value' => '有什么意见或建议?请联系我们',
                'details' => '关于我们 描述信息',
                'type' => 'text',
                'order' => 10,
                'group' => 'Contact',
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
