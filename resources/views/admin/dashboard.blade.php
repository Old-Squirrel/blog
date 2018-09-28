@extends('admin.layouts.app_admin')

@section('content')

        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-md-center">Категорий {{$count_categories}}</p>
            </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-md-center">Материалов {{$count_articles}}</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-md-center">Посетителей 0</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="text-md-center">Сегодня 0</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-outline-primary" href="{{route('admin.category.create')}}">
                    Добавить категорию </a>
                @foreach($categories as $category)
                    <a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
                        <h5 class="list-group-item-heading">{{$category->title}}</h5>
                        <p class="list-group-item-text">
                            Материалов в данной категории :  {{$category->articles()->count()}}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-outline-primary" href="{{route('admin.article.create')}}">Добавить
                    материал</a>
                @foreach($articles as $article)
                    <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
                        <h5 class="list-group-item-heading">{{$article->title}}</h5>
                        <p class="list-group-item-text">
                            <!-- pluck() возвращает array[] значений для ключа 'title', выводим строку -->
                               Категория : {{$article->categories()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>

@endsection