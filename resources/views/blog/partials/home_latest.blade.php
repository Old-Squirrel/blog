<div class="">
    <div class="row">
        <div class="col-sm-4">
            <h2><i>Latest news</i></h2>
        </div>
        <div class="col-sm-8">
            <hr class="newsType__hr">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 ">
            @foreach($latest_articles as $latest_article)
                <div class="mt-5">
                    <a class="text-center mb-2" href="{{route('article',$latest_article->slug)}}">
                        <h3 class="text-capitalize "><span class="badge badge-dark">
                            {{$latest_article->title}}
                        </span></h3></a>
                    <div class=" row" >
                        <div class="col-3" >
                            <a class="ml-3 " href="{{route('category',$latest_article->categories->first()->slug)}}" >
                    <span class="badge badge-success">
                        {{$latest_article->categories->first()->title}}
                    </span></a>
                            <img class="col" src="{{$latest_article->image}}">
                            <p class="ml-3">
                                Author:<span class="badge badge-pill">{{$latest_article->users->name ?? "foobarbaz"}}</span>
                            </p>
                        </div>
                        <div class="col-8 mt-3" >
                            {{$latest_article->description_short}}
                        </div>
                    </div>
                    <hr class="col-11">
                </div>


            @endforeach
        </div>

            @include('blog.partials.good-news')

    </div>
    <ul class="pagination justify-content-center">
      {{$latest_articles->links()}}
    </ul>

</div>


