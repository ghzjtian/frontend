<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SentResult;

class MailController extends Controller
{


    public function sendMail(){
        Mail::to(setting('contact.email'))->send(new SentResult(setting('glb.title')));
        if(count(Mail::failures()) < 1){
            $result = '信息发送成功，感谢您的留言!';
        }else{
            $result = '发送邮件失败，请重试！';
        }
        return view('email.result',['result'=>$result]);
    }

}
