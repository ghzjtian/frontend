@extends('layouts.base')
{{--图片展示,从 gallery 中选几张酒的作品出来这里展示，点击进去就是 gallery 页}}
{{-- gallery 信息--}}
@section('news')
    @include('layouts.news',['isHomePage'=>false])
@endsection