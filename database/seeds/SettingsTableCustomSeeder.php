<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

/**
 * 导入自定义的 Setting 中的数据
 * Class SettingsTableCustomSeeder
 */
class SettingsTableCustomSeeder extends Seeder
{
    use Seedable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed('SettingsTableAboutSeeder');
        $this->seed('SettingsTableContactSeeder');
        $this->seed('SettingsTableFooterSeeder');
        $this->seed('SettingsTableGallerySeeder');
        $this->seed('SettingsTableHomeSeeder');
        $this->seed('SettingsTableNewsSeeder');
        $this->seed('SettingsTableProductSeeder');
    }
}
