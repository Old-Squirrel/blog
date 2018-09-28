@extends('layouts.app')

@section('content')

        @forelse($search_result as $result)

            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card mb-4 border-dark">
                        <div class="card-header">
                            <a class="a-decor-none" href="{{route('article',$result->slug)}}">
                                <h3 class="card-title text-center text-capitalize">
                                    {{$result->title}}
                                </h3></a>
                        </div>

                        <img class="card-img-top " src="{{asset($result->image)}}">

                        <div class="card-body">
                            <p class="card-text text-left">
                                {{$result->description_short}}
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
            {{$search_result->links()}}
        </ul>
@endsection

