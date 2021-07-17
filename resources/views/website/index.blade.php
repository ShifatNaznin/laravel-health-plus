@extends('layouts.website')

@section('content')

@include('website.include.banner')
@include('website.include.static')
@include('website.include.banner-two')
{{-- @include('website.include.category') --}}
@include('website.include.feature')
@include('website.include.dealarea')
@include('website.include.equipment')
@include('website.include.accessories')
@include('website.include.brand')
@include('website.include.recently-add')
@include('website.include.blog')



@endsection
