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
            @foreach($latestNews as $latestNew)
                <div class="mt-5">
                    <a class="text-center mb-2" href="{{route('article',$latestNew->slug)}}">
                        <h3 class="text-capitalize "><span class="badge badge-dark">
                            {{$latestNew->title}}
                        </span></h3></a>
                    <div class=" row" >
                        <div class="col-3" >
                            <a class="ml-3 " href="{{route('category',$latestNew->categories->first()->slug)}}" >
                    <span class="badge badge-success">
                        {{$latestNew->categories->first()->title}}
                    </span></a>
                            @if($latestNew->image != null)
                            <img class="col" src="{{$latestNew->image}}">
                             @else
                                <div class="border border-info text-center div-instead-image-latest">
                                <h3 class="text-danger mt-4">
                                    News image
                                </h3>
                                </div>
                                @endif
                            <p class="ml-3">
                                Author:<span class="badge badge-pill">{{$latestNew->users->name}}</span>
                            </p>
                        </div>
                        <div class="col-8 mt-3" >
                            {{$latestNew->description_short}}
                        </div>
                    </div>
                    <hr class="col-11">
                </div>


            @endforeach
        </div>

            @include('blog.partials.goodNews')

    </div>
    <ul class="pagination justify-content-center">
      {{$latestNews->links()}}
    </ul>

</div>


