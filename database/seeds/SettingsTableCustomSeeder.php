<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

/**
 * 导入自定义的 默认的数据到数据库
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
        //Setting 的数据
        $this->seed('SettingsTableAboutSeeder');
        $this->seed('SettingsTableContactSeeder');
        $this->seed('SettingsTableFooterSeeder');
        $this->seed('SettingsTableGallerySeeder');
        $this->seed('SettingsTableHomeSeeder');
        $this->seed('SettingsTableNewsSeeder');
        $this->seed('SettingsTableProductSeeder');

        //其它 TAb 的数据
        $this->seed('AboutsTableSeeder');
        $this->seed('EventsTableSeeder');
        $this->seed('PicturesTableSeeder');
        $this->seed('ProductsTableSeeder');


    }
}
