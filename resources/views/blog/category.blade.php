@extends('layouts.app')


@section('title')
    {{$category->title}}-newsBlog
@endsection


@section('content')

        @forelse($articles as $article)

            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card mb-4 border-dark">
                        <div class="card-header">
                            <a class="a-decor-none" href="{{route('article',$article->slug)}}">
                                <h3 class="card-title text-center text-capitalize">
                                    {{$article->title}}
                                </h3></a>
                        </div>
                        <img class="card-img-top " src="{{asset($article->image)}}">
                        <div class="card-body">
                            <p class="card-text text-left">
                                {{$article->description_short}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Created by :  </small>
                            <span class="badge-pill"> foobarbaz</span>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <h2 class="text-center">So far there is nothing</h2>
        @endforelse

        <ul class="pagination justify-content-center">
            {{$articles->links()}}
        </ul>


@endsection