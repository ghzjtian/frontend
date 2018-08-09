@extends('layouts.base')

{{--首页的置顶大图--}}
@section('header_img')
    @include('layouts.header_img')
@endsection

{{--
首页,home
产品展示,products
相关图片展示
最新动态,行业的新闻,news
关于我们,about
联系我们,contact

--}}

{{--产品展示--}}
@section('products')
    @include('layouts.products',['isHomePage'=>true])
@endsection

{{--图片展示,从 gallery 中选几张酒的作品出来这里展示，点击进去就是 gallery 页}}
{{-- gallery 信息--}}
@section('gallery')
    @include('layouts.gallery')
@endsection


{{--最近的新闻事件,酒品知识,从新闻中摘取几个出来，放在这里，然后点击就进去相关的 news 页的详细--}}
{{--普通的 section 信息--}}
@section('news')
    @include('layouts.news')
@endsection

{{--关于我们--}}

@section('about')
    @include('layouts.about')
@endsection

{{--联系我们.--}}
@section('contact')
    @include('layouts.contact')
@endsection
