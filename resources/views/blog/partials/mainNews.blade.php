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
        @foreach($mainNews->slice(0,2) as $mainNew)
           @include('blog.partials.card')
        @endforeach
    </div>
    <div class="card-deck">
    @foreach($mainNews->slice(2,2) as $mainNew)
    @include('blog.partials.card')
        @endforeach
    </div>
</div>