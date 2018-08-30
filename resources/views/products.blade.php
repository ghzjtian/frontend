@extends('layouts.base')

@section('page_title',setting('glb.products'))

{{--产品展示--}}
@section('products')
    @include('layouts.products',['isHomePage'=>false])
@endsection
