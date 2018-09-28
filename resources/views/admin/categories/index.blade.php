@extends ('admin.layouts.app_admin')

@section( 'content')

        @component('admin.components.breadcrumb')
            @slot('title')Список категорий @endslot
            @slot('parent')Главная  @endslot
            @slot('active')Категории @endslot
        @endcomponent


        <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary">Создать категорию</a>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){return true}else{return false}"
                              action="{{route('admin.category.destroy',$category)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <a class="btn btn-default " href="{{route('admin.category.edit', $category)}}">
                                Редактировать</a>
                            <button type="submit" class="btn btn-dark">Удалить</button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination ">
                        {{$categories->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>




@endsection