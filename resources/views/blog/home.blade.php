@extends('layouts.app')
@section('title')
    Blog.news
@endsection
@section('content')

    @include('blog.partials.mainNews')
    @include('blog.partials.popularNews')
    @include('blog.partials.latestNews')
@endsection
