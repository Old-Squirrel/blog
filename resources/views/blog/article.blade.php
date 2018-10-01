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
            @if($article->image != null)
                <img class="card-img-top " src="{{asset($article->image)}}">
                <div class="card-body">
                    @else
                        <div class="card-body">
                            <div class="border border-info div-instead-image text-center">
                                <h4 class="mt-5">
                                    News image
                                </h4>
                            </div>
                            @endif
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


