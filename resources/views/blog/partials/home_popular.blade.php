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
            @foreach($popular_articles as $popular_article)
                <div class="card news-div mb-4 border-dark">
                    <img class="card-img-top " src="{{asset($popular_article->image)}}">
                    <div class="card-body">
                        <a class="a-decor-none" href="{{route('article',$popular_article->slug)}}">
                            <h3 class="card-title text-center text-capitalize">
                                {{$popular_article->title}}
                            </h3></a>
                        <p class="card-text text-left">
                            {{$popular_article->description_short}}
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created by :  </small>
                            <span class="badge-pill"> foobarbaz</span>
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

                        <input class="col-sm-8 search__input_field" type="text" name="search" placeholder="Looking for...">
                        <input class="col-sm-3 search__input_button" type="submit" value="Submit">
                    </div>

                </form>
            </div>
            @foreach($popular_main_news as $popular_main_new)
                <div class="card news-div mb-4 border-info">
                    <div class="card-header bg-secondary ">
                        <p class="card-text">
                            <a class="a-decor-none" href="{{route('article',$popular_main_new->slug)}}">
                                <h3 class="card-title text-center text-capitalize">{{$popular_main_new->title}}</h3>
                            </a>
                        </p>
                    </div>
                    <img class="card-img-top" src="{{$popular_main_new->image}}"
                         title="{{$popular_main_new->title}}">
                    <div class="card-body">
                        <h5 class="card-text">
                            {{$popular_main_new->description_short}}
                        </h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Author : </small>
                            <span class="badge-pill">foobarbaz</span>
                            <hr>
                            <p>Category:
                                <a class="a-decor-none"
                                   href="{{route('category',$popular_main_new->categories->first()->slug)}}">
                                    {{$popular_main_new->categories->first()->title}}
                                </a>
                            </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

