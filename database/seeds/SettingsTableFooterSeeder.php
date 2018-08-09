<?php

use Illuminate\Database\Seeder;

use TCG\Voyager\Models\Setting;

class SettingsTableFooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //About 相关
        $setting = $this->findSetting('footer.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '底栏 的标题',
                'value' => '格力博有限公司广州分部',
                'details' => '底栏 显示的标题',
                'type' => 'text',
                'order' => 1,
                'group' => 'Footer',
            ])->save();
        }
        $setting = $this->findSetting('footer.right');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '底栏 显示的版权号及支持',
                'value' => '© 2018 常州格力博有限公司 . All rights reserved | Powered by Tim',
                'details' => '底栏 显示的版权号及支持信息',
                'type' => 'text',
                'order' => 2,
                'group' => 'Footer',
            ])->save();
        }
        $setting = $this->findSetting('footer.icp');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '底栏 显示的 备案的信息',
                'value' => '粤公安备 xxx 号 | 粤 ICP 备 xxx 号',
                'details' => '底栏 显示的备案的信息',
                'type' => 'text',
                'order' => 3,
                'group' => 'Footer',
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
