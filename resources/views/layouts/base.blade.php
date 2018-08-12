<!DOCTYPE html>
<html>

<header>
    {{--头部及 styles .--}}
    @section('style')
        @include('layouts.style')
    @show
    @yield('script')

    @show
</header>
<body>

{{--头顶的导航条--}}
@section('nav_bar')
    @include('layouts.nav_bar')
@show
{{--主页置顶大图--}}
@yield('header_img')

{{--显示 产品--}}
@yield('products')
{{--产品的详细页面--}}
@yield('products_detail')


@yield('gallery')
{{-- 显示 动态--}}
@yield('news')
{{--动态 详情页面--}}
@yield('news_detail')

@yield('about')
@yield('contact')

@yield('email_result')

{{--

首页,home
产品展示,products
最新动态,news
关于我们,about
联系我们,contact

--}}

{{--首页的置顶大图--}}
{{--@section('header_img')--}}
{{--@include('layouts.header_img')--}}
{{--@show--}}

{{--普通的 section 信息--}}
{{--@section('promo')--}}
{{--@include('layouts.promo')--}}
{{--@show--}}

{{-- gallery 信息--}}
{{--@section('gallery')--}}
{{--@include('layouts.gallery')--}}
{{--@show--}}

{{--新闻信息 news --}}
{{--@section('news')--}}
{{--@include('layouts.news')--}}
{{--@show--}}

{{--普通的 section2 信息--}}
{{--@section('static')--}}
{{--@include('layouts.static')--}}
{{--@show--}}



{{-- skills 信息--}}
{{--@section('skills')--}}
{{--@include('layouts.skills')--}}
{{--@show--}}

{{-- pricing 信息--}}
{{--@section('price')--}}
{{--@include('layouts.price')--}}
{{--@show--}}

{{-- contact 信息--}}
{{--@section('contact')--}}
{{--@include('layouts.contact')--}}
{{--@show--}}

{{-- footer 信息--}}
@section('footer')
    @include('layouts.footer')
@show


</body>
</html>
