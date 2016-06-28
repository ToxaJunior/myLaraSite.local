@extends('layouts.main')
@section('content')
    <div class="row slider">
        <div class="item">
            <img class="img-responsive gallery-img-slider" src="{{asset('bootstrap/images/header-img-gallery.jpg')}}" alt="">
            <h1 class="slogan-type-white caption-info">Портфолио</h1>
        </div>
    </div>
    <div class="container slogan text-center">
        <img src="bootstrap/images/icon-1.png" alt="">
        <h3 class="slogan-type">Наш последний проект</h3>
        <p class="main-color-text">Не бойтесь перемен</p>
    </div>
    <div class="container">
        <div class="row img-mar-null">
            @if(isset($images))
                @foreach($images as $image)
                <div class="col-xs-6 col-sm-6 col-md-4 img-pad-null">
                    <a class="gallery" rel="group" href="{{asset('upload/images_large/'.$image->img)}}">
                        <img class="img-responsive" src="{{asset('upload/images_small/'.$image->img)}}"></a>
                </div>
                @endforeach

                @if (count($errors) > 0)
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $(".feedbackMessage").trigger('click');
                        });
                    </script>
                    <div class="feedbackMessage">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endif
        </div>
        <div id="pagination" class="text-center my-pagination"><?php echo $images->render(); ?></div>
    </div>
@endsection