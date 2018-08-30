@extends('layouts.base')

@section('page_title',setting('glb.gallery'))

@section('gallery')
    @include('layouts.gallery',['isHomePage'=>false])
@endsection