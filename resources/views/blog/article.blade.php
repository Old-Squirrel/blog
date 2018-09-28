@extends('layouts.app')

@section('title', $article->title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)


@section('content')

    <div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card mb-4 border-dark">
            <div class="card-header">
                    <h3 class="card-title text-center ">
                        {{$article->title}}
                    </h3>
            </div>
            <img class="card-img-top " src="{{asset($article->image)}}">
            <div class="card-body">
                <p class="card-text text-left">
                    {{$article->description}}
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Created by :</small>
                <span class="badge-pill">{{$article->users->name}}</span>
            </div>
        </div>
    </div>
    </div>
@endsection


