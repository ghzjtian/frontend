@component('mail::message')
# 您好,管理员({{setting('glb.title')}}):

网站 ({{setting('glb.title')}}) 收到了客户留言的信息:


|项目|内容|
|---|---|
|姓名|{{$receive_name}}|
|电子邮件|{{$email}}|
|主题|{{$subject}}|
|信息内容|{{$message}}|


@component('mail::button', ['url' =>  env('APP_URL')  ])
    访问 '{{setting('glb.title')}}' 主页
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
