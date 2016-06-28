@extends('layouts.admin_layout')
@section('scripts')
<script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('container')
<div class="container my-bg">
    <div class="form-horizontal my-bg">
        <form enctype="multipart/form-data" action="{{url('/store')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Выберите рубрику :</label>
                    <p>
                        <select name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </p>
                    <label for="title">Введите заголовок статьи :</label>
                    <p>
                        <input type="text" id="title" name="title" size="75" placeholder="Введите заголовок" required>
                    </p>
                </div>
                <div class="col-md-6 block-preview form-group">
                    <h4 class="text-center">Блок превью</h4>
                    <label for="uploadfile" class="control-label">Выберите изображение для анонса :</label>
                    <div>
                        <input type="file" name="uploadfile">
                    </div>
                    <label>Введите текст анонса статьи(не более 400 символов) :</label>
                    <textarea name="preview" cols="80" rows="5" maxlength="400"></textarea>
                </div>
            </div>
                <textarea id="editor1" name="article" cols="100" rows="20">
                </textarea>
                <script type="text/javascript">
                    CKEDITOR.replace('editor1', {
                        filebrowserBrowseUrl: '/js/kcfinder/browse.php',
                        filebrowserUploadUrl: '/js/kcfinder/upload.php'
                    });
                </script>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
</div>
@endsection
