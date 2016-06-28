@extends('layouts.admin_layout')
@section('container')
    <table class="table">
        <form action="{{url('/feedback/delete')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <thead>
        <tr>
            <th>Дата сообщения</th>
            <th>Имя</th>
            <th>Контактные данные</th>
            <th>Сообщение</th>
            <th class="text-right"><input type="submit" value="Удалить отмеченные" onclick="return confirm('Вы уверены?');"></th>
        </tr>
        </thead>
            <tbody>
            @foreach($content as $mess)
                <tr>
                    <td>{{$mess->created_at}}</td>
                    <td>{{$mess->name}}</td>
                    <td><span>Tel:</span><span>{{$mess->tel}}</span>
                        <br>
                        <span>E-mail:</span><span><a href="#">{{$mess->email}}</a></span></td>
                    <td>{{$mess->message}}</td>
                    <td class="text-right">

                            <div class="checkbox">
                                <label class="del-mess-label" for="{{$mess->id}}">
                                    <input type="checkbox" id="{{$mess->id}}" name="checkbox[{{$mess->id}}]"
                                           value="{{$mess->id}}">Удалить
                                </label>
                            </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </form>
    </table>
    <div class="container text-center">
        <div id="pagination"><?php echo $content->render(); ?></div>
    </div>
@endsection