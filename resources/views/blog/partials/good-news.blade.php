<div class="col-sm-4">
    <div class="mt-2">
        <div class="text-sm-center">
            <h2><i>Good news</i></h2>
            <hr class="newsType__hr">
            <hr class="newsType__hr">
        </div>

        @foreach($good_articles as $good_article)

            <div class="card news-div mb-4 border-info">
                <div class="card-header bg-secondary ">
                    <p class="card-text">
                        <a class="a-decor-none" href="{{route('article',$good_article->slug)}}">
                            <h3 class="card-title text-center text-capitalize">{{$good_article->title}}</h3>
                        </a>
                    </p>
                </div>
                <img class="card-img-top" src="{{$good_article->image}}" title="{{$good_article->title}}">
                <div class="card-body">
                    <h5 class="card-text">
                        {{$good_article->description_short}}
                    </h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Author:
                        <span class="badge-info"> foobarbaz</span>
                        <hr>
                        Category:
                        <a class="a-decor-none" href="{{route('category',$good_article->categories->first()->slug)}}">
                            {{$good_article->categories->first()->title}}</p> </a>
                    </small>

                </div>
            </div>
        @endforeach
    </div>
</div>
