<div class="card news-div mb-4 border-dark">
    <div class="card-header bg-secondary ">
        <a class="a-decor-none" href="{{route('article',$mainNew->slug)}}">
            <h3 class="card-title text-center text-capitalize">{{$mainNew->title}}</h3>
        </a>
    </div>
    @if($mainNew->image != null )
        <img class="card-img-top" src="{{asset($mainNew->image)}}" alt="">
        <div class="card-body">
            @else
                <div class="card-body">
                    <div class="border border-info div-instead-image text-center  " >
                        <h4 class="mt-5">
                            News image
                        </h4>
                    </div>
                    @endif
                    <p class="card-text">{{$mainNew->description_short}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Category :</small>
                    <a class="a-decor-none" href="{{route('category',$mainNew->categories->first()->slug)}}">
                        <span class="badge-pill"> {{$mainNew->categories->first()->title}}</span>
                    </a>
                </div>
        </div>