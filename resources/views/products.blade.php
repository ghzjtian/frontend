@extends('layouts.base')

{{--产品展示--}}
@section('products')
    @include('layouts.products',['isHomePage'=>false])
@endsection
