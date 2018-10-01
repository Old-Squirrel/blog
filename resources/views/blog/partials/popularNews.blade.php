<div class="mb-3">
    <div class="row">
        <div class="col-sm-4">
            <h2><i>Popular news</i></h2>
        </div>
        <div class="col-sm-8">
            <hr class="newsType__hr">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-7 ">
            @foreach($popularNews as $popularNew)
                <div class="card news-div mb-4 border-dark">
                    <div class="card-header">
                        <a class="a-decor-none" href="{{route('article',$popularNew->slug)}}">
                            <h3 class="card-title text-center text-capitalize">
                                {{$popularNew->title}}
                            </h3></a>
                    </div>
                    @if($popularNew->image !=null)
                        <img class="card-img-top" src="{{asset($popularNew->image)}}">
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
                                        {{$popularNew->description_short}}
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Author :</small>
                                    <span class="badge-pill"> {{$popularNew->users->name}}</span>
                                </div>
                        </div>
                        @endforeach
                </div>

                <div class="col-5">
                    <!-- SearchForm -->
                    <div class="search__div">
                        <form name="search-form" action="{{ URL::action('BlogController@search') }}" method="get">
                            <div class="searchForm__div ">
                                <h2 class="searchForm__text">Search</h2>

                                <input class="col-sm-8 search__input_field" type="text" name="search"
                                       placeholder="Looking for...">
                                <input class="col-sm-3 search__input_button" type="submit" value="Submit">
                            </div>

                        </form>
                    </div>
                    @foreach($fakeNews as $fakeNew)
                        <div class="card news-div mb-4 border-info">
                            <div class="card-header bg-secondary ">
                                <p class="card-text">
                                    <a class="a-decor-none" href="{{route('article',$fakeNew->slug)}}">
                                        <h3 class="card-title text-center text-capitalize">{{$fakeNew->title}}</h3>
                                    </a>
                                </p>
                            </div>


                            @if($fakeNew->image !=null)
                                                <img class="card-img-top" src="{{$fakeNew->image}}"
                                                     title="{{$fakeNew->title}}">
                                                <div class="card-body">
                                                    @else
                                                        <div class="card-body">
                                                            <div class="border border-info div-instead-image text-center">
                                                                <h4 class="mt-5">
                                                                    News image
                                                                </h4>
                                                            </div>
                                                            @endif
                                <h5 class="card-text">
                                    {{$fakeNew->description_short}}
                                </h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Author :</small>
                                <span class="badge-pill">{{$fakeNew->users->name}}</span>
                                <hr>
                                <p>Category:
                                    <a class="a-decor-none"
                                       href="{{route('category',$fakeNew->categories->first()->slug)}}">
                                        {{$fakeNew->categories->first()->title}}
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>

