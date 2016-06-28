@extends('layouts.admin_layout')
@section('container')
    <a href="{{url('/create')}}">Добавить статью</a>
        <table class="table articles_list">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th class="text-right">Действие</th>
                </tr>
            </thead>
            <tbody>
            @foreach($content as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->category_name}}</td>
                    <td class="text-right"><a href="/delete/{{$article->id}}"
                   onclick="return confirm('Вы уверены?');">удалить</a> /
                        <a href="/edit/{{$article->id}}">редактировать</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="container text-center">
            <div id="pagination"><?php echo $content->render(); ?></div>
        </div>
@endsection