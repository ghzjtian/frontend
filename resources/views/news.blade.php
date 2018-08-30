@extends('layouts.base')

@section('page_title',setting('glb.news'))

@section('news')
    @include('layouts.news',['isHomePage'=>false])
@endsection