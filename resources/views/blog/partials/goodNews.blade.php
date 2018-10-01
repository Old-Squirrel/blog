<div class="col-sm-4">
    <div class="mt-2">
        <div class="text-sm-center">
            <h2><i>Good news</i></h2>
            <hr class="newsType__hr">
            <hr class="newsType__hr">
        </div>
        @foreach($goodNews as $goodNew)

            <div class="card news-div mb-4 border-info">
                <div class="card-header bg-secondary ">
                    <p class="card-text">
                        <a class="a-decor-none" href="{{route('article',$goodNew->slug)}}">
                            <h3 class="card-title text-center text-capitalize">{{$goodNew->title}}</h3>
                        </a>
                    </p>
                </div>


                @if($goodNew->image !=null)
                    <img class="card-img-top" src="{{$goodNew->image}}" title="{{$goodNew->title}}">
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
                        {{$goodNew->description_short}}
                    </h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Author:
                        <span class="badge-pill"> {{$goodNew->users->name}}</span>
                        <hr>
                        Category:
                        <a class="a-decor-none" href="{{route('category',$goodNew->categories->first()->slug)}}">
                            {{$goodNew->categories->first()->title}} </a>
                    </small>

                </div>
            </div>

        @endforeach
    </div>
</div>
