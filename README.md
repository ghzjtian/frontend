## 1.Yoyager 项目
## 2.各种 front-end 模板
## 3.开发的记录
## 4.项目 clone 后的搭建步骤

***
***
***

## 1.Yoyager 项目

* [1.yoyager 的 Github 地址](https://github.com/the-control-group/voyager)
* [2.yoyager 官方文档](https://voyager.readme.io/docs)
* 3.已经 [安装](https://laravel-china.org/docs/laravel/5.6/installation/1352) 并[搭建](https://laravel-china.org/docs/laravel/5.6/homestead/1355#configuring-homestead)好了 homestead 的开发环境.
* [4.voyager 的安装已经完成.](https://github.com/the-control-group/voyager)

***

## 2.各种 front-end 模板
* [1.Working with Voyager on the Front-end](https://devdojo.com/blog/tutorials/working-with-voyager-on-the-front-end)
* 2.根据 [www.w3school.com 模板(w3s 的都不错)](https://www.w3schools.com/w3css/w3css_templates.asp)的模板去开发前端网站
    * [1.w3s startup 模板](https://www.w3schools.com/w3css/tryw3css_templates_startup.htm#about)
    * [2. app launch 模板](https://www.w3schools.com/w3css/tryw3css_templates_app_launch.htm)
    * [3.MARKETING 模板](https://www.w3schools.com/w3css/tryw3css_templates_marketing.htm#)
    * [4.Marketing/Website template](https://www.w3schools.com/w3css/tryw3css_templates_website.htm#)
    * [5.Trends 文章列表](https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_trends_single)
* 3.[Free CSS](https://www.free-css.com/)
    * [1.STANDOUT (这个不错)](https://www.free-css.com/free-css-templates/page228/standout)
    * [2.Bino](https://www.free-css.com/free-css-templates/page228/bino)
    * [3.BOW](https://www.free-css.com/free-css-templates/page224/bow)
    * [4.CAFE](https://www.free-css.com/free-css-templates/page193/cafe)
    * [5.Exterior Design](https://www.free-css.com/free-css-templates/page165/exterior-design)
    * [6.furn-office](https://www.free-css.com/free-css-templates/page90/furn-office)
    
* 4.[https://www.themezy.com/ 红酒](https://www.themezy.com/free-website-templates/245-winery-free-responsive-website-template)

* 5.[Templated](https://templated.co/)
    * [1.Solarize 绿色](https://templated.co/solarize)
    * [2.Iridium 绿色](https://templated.co/iridium)
* 6.[bootstrapthemes.co](https://bootstrapthemes.co/)
    * [1.GreenFair](https://bootstrapthemes.co/item/greenfair-one-page-html5-template/)
    * [2.Cafe](https://bootstrapthemes.co/item/cafe-restaurant-free-website-template/)

***

## 3.开发的记录
* 1.先用 [w3schools templates](https://www.w3schools.com/w3css/tryw3css_templates_startup.htm#work)做底层的网站显示.
* 2.把各个功能模块分开,home ,about ,gallery ,news , contact us.  等等.
* 3.把 css , jquery 等等分开到另外的文件.
* 4.在 w3school 中寻找合适的 控件，导入前端，使得显示效果可以接受，如 轮播图.
* 5.把 voyager 中的简单的数据先整理好,并导入前端里面.
* 6.在 数据库的表 `settings` 中，可以新增其它的 Group.
* 7.[生成自己的 Setting 数据的 Seeder](http://blog.tian.tianlovezhen.site/2018/06/03/Laravel%E5%AD%A6%E4%B9%A0/#data_insert),这样就不用通过 WEB 去一个一个地输入，提高了效率和保证了
测试端和服务端的完美一致.如:

```angular2html
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

```

* 8.增加必要的 setting(MySettingsTableSeeder) 的数据设置.
* 9.发现在 homestead 的开发环境中，[view 的 cache 无法被清除.](http://blog.tian.tianlovezhen.site/2018/06/03/Laravel%E5%AD%A6%E4%B9%A0/#cache_clear)
* 10.Setting (如:SettingsHomeTableSeeder)中的 Group 不能被设置为 中文.
* 11.生成 Product 的数据库，并往数据库中添加数据，最后让数据跟 前台 对接.
    * 1.生成 Model: `php artisan make:model Product`
    * 2.生成迁移表: `php artisan make:migration create_products_table`,往表中添加数据并运行迁移`php artisan migrate`:
    ```angular2html
      $table->increments('id');
                $table->integer('author_id');
                $table->integer('category_id')->nullable();
                $table->string('title');
                $table->text('excerpt');//摘录
                $table->text('body');
                $table->string('image')->nullable();
                $table->boolean('image_align_right');
                $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
                $table->timestamps();

    ```
    * [3.往数据库中添加随机的数据](http://blog.tian.tianlovezhen.site/2018/06/03/Laravel%E5%AD%A6%E4%B9%A0/#cache_clear)
    * 4.增加一个 Product 的 BREAD.并设置一些固定的输入显示,如:
    ```json
    {
        "default": "radio1",
        "options": {
            "0": "否",
            "1": "是"
        }
    }
    ```
    
    ```json
    {
        "default": "PUBLISHED",
        "options": {
            "PUBLISHED": "发布",
            "DRAFT": "草稿",
            "PENDING": "等待"
        }
    }
    ```
   
    

***

## 4.项目 clone 后的搭建步骤
* 1.安装 `composer` 的依赖 `composer install`.
* 2.生成必要的 `Homestead` 文件(只是开发时需要). `php vendor/bin/homestead make`
* 3.增加 `.env` 文件:`cp .env.example .env`，并生成一个 key : `php artisan key:generate`
* 4.配置 `.env` 中的数据库及路径等信息
* 5.开启虚拟机 `vagrant up`
* 6.生成数据库的迁移: `php artisan migrate`
* 7.生成 voyager 的测试数据,先把 laravel 和 voyager 的语言和区域都调成 zh ,这样生成的数据就会是本地化: `php artisan voyager:install --with-dummy`
* 8.配置好 voyager 的 link: [http://blog.tian.tianlovezhen.site/2018/06/03/Laravel%E5%AD%A6%E4%B9%A0/#voyager_learn](http://blog.tian.tianlovezhen.site/2018/06/03/Laravel%E5%AD%A6%E4%B9%A0/#voyager_learn)
* 9.如果是在开发环境中配置好了各种的参数，记得把 数据库和 storage/app/public 中的内容导入到生产环境中.
* 10.在导入 SettingsHomeTableSeeder 的数据后，要手动在后台导入图片，否则会 CRASH ，[因为 Cache 的问题导致.](http://blog.tian.tianlovezhen.site/2018/06/03/Laravel%E5%AD%A6%E4%B9%A0/#cache_clear)


