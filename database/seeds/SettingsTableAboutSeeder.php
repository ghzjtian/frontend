<?php

use Illuminate\Database\Seeder;

use TCG\Voyager\Models\Setting;

class SettingsTableAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //About 相关
        $setting = $this->findSetting('about.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '关于我们 的标题',
                'value' => '关于我们',
                'details' => '关于我们 显示的标题',
                'type' => 'text',
                'order' => 1,
                'group' => 'About',
            ])->save();
        }
        $setting = $this->findSetting('about.content');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '关于我们 显示的内容',
                'value' => '我们是一支富有活力的队伍!!!',
                'details' => '关于我们 的内容',
                'type' => 'rich_text_box',
                'order' => 2,
                'group' => 'About',
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
