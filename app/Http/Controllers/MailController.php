<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\View\View;

class MailController extends Controller
{

//    public function mail()
//    {
//        $name = 'Tian';
//        Mail::to('2941249122@qq.com')->send(new SendMailable($name));
//
//        if(count(Mail::failures()) < 1){
//            echo '发送邮件成功，请查收！'.now();
//            \view('email.result');
//        }else{
//            \view('email.result');
//            echo '发送邮件失败，请重试！'.now();
//        }
//    }

    public function sendMail(){
//        发现 倒计时的  javascript 在 子类中没效果，所以只能用 result 方法.
//        $name = 'Tian';
//        Mail::to('2941249122@qq.com')->send(new SendMailable($name));
        if(count(Mail::failures()) < 1){
            $result = '信息发送成功，感谢您的留言!';
        }else{
            $result = '发送邮件失败，请重试！';
        }
        return view('email.result',['result'=>$result]);
    }

}
