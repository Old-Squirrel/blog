@extends('layouts.app')
@section('title')
    Blog.news
@endsection
@section('content')

 @include('blog.partials.home_main')

 @include('blog.partials.home_popular')
 @include('blog.partials.home_latest')
@endsection
