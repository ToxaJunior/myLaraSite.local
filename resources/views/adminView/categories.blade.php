@extends('layouts.admin_layout')
@section('container')
    <ul class="">
        <?php $i = 0?>
        @foreach($categoryTree as $item)
            @if($item->level > $i)
                <ul style='margin-left:{{$item->level * 50}}px;'
                    id='list_{{$item->parent_id}}' class="">
                    @endif
                    @if($item->level < $i)
                </ul>
            @endif
            <?php $i = $item->level?>
            <li><a id='{{$item->id}}'
                   href="">{{$item->name}}</a></li>
        @endforeach
        <li>
            <a href="">Последние новости</a></li>
    </ul>
@endsection