
@foreach($categories as $category)

    @if ($category->children->where('published', 1)->count())

        <li class="dropdown">
            <a href="{{url("/blog/category/$category->slug")}}" class="dropdown-toggle nav-link "
               data-toggle="dropdown" aria-expanded="false" role="button" >
                <h5 class="">{{$category->title}}</h5>
            </a>

            <ul class="dropdown-menu bg-dark " >
                @include('layouts.top_menu',['categories'=>$category->children])
            </ul>

    @else
        <li>
            <a class="nav-link " href="{{url("/blog/category/$category->slug")}}" ><h5>{{$category->title}}</h5></a>
            @endif
        </li>
        @endforeach


