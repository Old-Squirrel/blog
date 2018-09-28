<div class="row mt-2 mb-2">
    <div class=" col-sm-3">
        <h2><i>Main news</i></h2>
    </div>
    <div class="col-sm-9">
        <hr class="newsType__hr mr-4">
    </div>
</div>
<div class="mb-3">
    <div class="card-deck">
        @foreach($main_articles->slice(0,2) as $main_article)
            <div class="card news-div mb-4 border-dark">
                <div class="card-header bg-secondary ">
                    <a class="a-decor-none" href="{{route('article',$main_article->slug)}}">
                        <h3 class="card-title text-center text-capitalize">{{$main_article->title}}</h3>
                    </a>
                </div>
                <img class="card-img-top" src="{{asset($main_article->image)}}" alt="">
                <div class="card-body">
                    <p class="card-text">{{$main_article->description_short}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Category :</small>
                    <a class="a-decor-none" href="{{route('category',$main_article->categories->first()->slug)}}">
                            <span class="badge-pill"> {{$main_article->categories->first()->title}}</span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="card-deck">
        @foreach($main_articles->slice(2,2) as $main_article)
            <div class="card news-div mb-4 border-dark">
                <div class="card-header bg-secondary ">
                    <a class="a-decor-none" href="{{route('article',$main_article->slug)}}">
                        <h3 class="card-title text-center text-capitalize">{{$main_article->title}}</h3>
                    </a>
                </div>
                <img class="card-img-top" src="{{asset($main_article->image)}}" alt="">
                <div class="card-body">
                    <p class="card-text">{{$main_article->description_short}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Category :</small>
                    <a class="a-decor-none" href="{{route('category',$main_article->categories->first()->slug)}}">
                        <span class="badge-pill"> {{$main_article->categories->first()->title}}</span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>