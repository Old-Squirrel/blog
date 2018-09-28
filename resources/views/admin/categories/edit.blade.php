@extends('admin.layouts.app_admin')

@section('content')



        @component('admin.components.breadcrumb')

            @slot('title')  Редактироваание категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot

        @endcomponent

        <hr/>
        <form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
            <input type="hidden" name="_method" value="put">

            {{csrf_field()}}
            {{-- Form include --}}
            @include('admin.categories.partials.form')
        </form>


@endsection