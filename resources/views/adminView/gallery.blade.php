@extends('layouts.admin_layout')
@section('container')
<div class="container">
    <form class="form-horizontal" role="form"
      enctype="multipart/form-data" action="{{url('/gallery')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <label for="category" class="control-label">Выберите категорию</label>
            <div>
                <p>
                    <select name="category" id="category">
                        <option>Плитка</option>
                        <option>Гипсокартон</option>
                        <option>Отделка</option>
                        <option>Ремонт 'до' и 'после'</option>
                        <option>Другое</option>
                    </select>
                </p>
            </div>
        </div>
        <div class="form-group">
            <label for="uploadfile" class="control-label">Выберите файл</label>
            <div>
                <input type="file" name="uploadfile">
            </div>
        </div>
        <div class="form-group">
            <div>
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </div>
        </div>
    </form>
</div>
<div class="container img-table">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Категория</th>
            <th>Название</th>
            <th>Миниатюра</th>
            <th class="text-right">Действие</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($content))
            @foreach($content as $image)
                <tr>
                    <td>{{$image->id}}</td>
                    <td>{{$image->category}}</td>
                    <td>{{$image->img}}</td>
                    <td><img class="show-Img" src="{{asset('upload/images_small/'.$image->img)}}"></td>
                    <td class="text-right"><a href="/gallery/delete/{{$image->id}}"
                   onclick="return confirm('Вы уверены?');">удалить</a></td>
                </tr>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="container text-center">
        <div id="pagination"><?php echo $content->render(); ?></div>
    </div>
</div>
@endsection