<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/8/8
 * Time: 15:21
 */

namespace App\Utils;
use TCG\Voyager\Facades\Voyager;


class UrlUtils
{

    /**
     * 如果是服务器内部的 Image 的地址，就取得完整的 URL 后再返回
     * @param String $url
     * @return String
     */
    public static function getImageURL( $url){
        if($url==null) return null;
        if(filter_var($url,FILTER_VALIDATE_URL)){
            return $url;
        }
        return Voyager::image($url);
    }

}