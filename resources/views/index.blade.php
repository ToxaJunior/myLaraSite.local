@extends('layouts.main')
@section('content')
<div class="row slider">
    <div id="carousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-slider" src="{{asset('bootstrap/images/slide-1.jpg')}}" alt="">
                <div class="container">
                    <div class="carousel-caption-info col-md-4">
                        <h3>Мы работаем - Вам жить</h3>
                        <p>Наша компания сделает ваше жилище уютным и комфортным, мы всегда на связи</p>
                        <a class="btn my-btn modbox fancybox.ajax" href="{{url('/modbox1')}}">Связаться</a>
                    </div>
                </div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img class="img-slider" src="bootstrap/images/slide-2.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption-info col-md-4">
                        <h3>Мы работаем - Вам жить</h3>
                        <p>Наша компания сделает ваше жилище уютным и комфортным, мы всегда на связи</p>
                        <a class="btn my-btn modbox fancybox.ajax" href="{{url('/modbox1')}}">Связаться</a>
                    </div>
                </div>
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img class="img-slider" src="bootstrap/images/slide-3.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption-info col-md-4">
                        <h3>Мы работаем - Вам жить</h3>
                        <p>Наша компания сделает ваше жилище уютным и комфортным, мы всегда на связи</p>
                        <a class="btn my-btn modbox fancybox.ajax" href="{{url('/modbox1')}}">Связаться</a>
                    </div>
                </div>
                <div class="carousel-caption"></div>
            </div>
        </div>
        <a href="#carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<div class="container slogan text-center">
    <img src="bootstrap/images/icon-1.png" alt="">
    <h3 class="slogan-type">Начните путь к мечте</h3>
    <p class="main-color-text">Не бойтесь перемен</p>
</div>
<div class="container">
    <div class="col-md-offset-1 col-lg-offset-2 col-sm-12 col-md-5 col-lg-4 hidden-xs">
        <img src="bootstrap/images/image-1.jpg" alt="">
    </div>
    <div class="col-xs-offset-1 col-sm-12 col-md-5 col-lg-4">
        <div class="image-1-text">
            <p class="main-color-text">Многие веб-разработчики на сайтах размещают после
                навигационного меню фоновое изображение, которое
                придаёт веб-странице некоторый стиль и делает дизайн
                сайта более завершённым.</p>
            <div class="block-info">
                <div class="info-glif">
                    <a class="glyphicon glyphicon-user" href="#"></a>
                </div>
                <div class="image-1-info">
                    <a class="uppercase" href="#">Профессиональная команда</a>
                    <div class="main-color-text">пн-птн: 12.00 - 17.30</div>
                </div>
            </div>
            <div class="block-info">
                <div class="info-glif" href="#">
                    <a class="glyphicon glyphicon-time"></a>
                </div>
                <div class="image-1-info">
                    <a class="uppercase" href="#">24/7 поддержка</a>
                    <div class="main-color-text">пн-птн: 12.00 - 17.00</div>
                </div>
            </div>
            <div class="block-info">
                <div class="info-glif" href="#">
                    <a class="glyphicon glyphicon-usd"></a>
                </div>
                <div class="image-1-info">
                    <a class="uppercase" href="#">Доступные расценки</a>
                    <div class="main-color-text">пн-птн: 12.00 - 17.00</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container slogan text-center">
    <img src="bootstrap/images/icon-1.png" alt="">
    <h3 class="slogan-type">Узнайте все о ремонтах</h3>
    <p class="main-color-text">Не бойтесь перемен</p>
</div>
<div class="container">
    @for($i = 4; $i < 8; $i++)
        <div class="col-xs-6 col-sm-5 col-md-3 col-lg-3 block-info-list">
            <div class="header-info-glif top-left">
                <img src="bootstrap/images/electric_drill.png">
            </div>
            <h5 class="slogan-min text-center">{{$categoryTree[$i]->name}}</h5>
            <p class="main-color-text text-center">Многие веб-разработчики на сайтах размещают после
                навигационного меню фоновое изображение</p>
            <div class="my-btn-1">
                <a href="{{url('/showArticle/'.$categoryTree[$i]->id)}}">Узнать больше</a>
            </div>
        </div>
    @endfor
    <a href="#spoiler" data-toggle="collapse" class="btn my-btn-2">Открыть еще рубрики</a>
    <div id="spoiler" class="collapse">
        @for($i = 8; $i < 12; $i++)
            <div class="col-xs-6 col-sm-5 col-md-3 col-lg-3 block-info-list">
                <div class="header-info-glif top-left">
                    <img src="bootstrap/images/electric_drill.png">
                </div>
                <h5 class="slogan-min text-center">{{$categoryTree[$i]->name}}</h5>
                <p class="main-color-text text-center">Многие веб-разработчики на сайтах размещают после
                    навигационного меню фоновое изображение</p>
                <div class="my-btn-1">
                    <a href="{{url('/showArticle/'.$categoryTree[$i]->id)}}">Узнать больше</a>
                </div>
            </div>
        @endfor
    </div>
</div>
<div class="container slogan text-center">
    <img src="bootstrap/images/icon-1.png" alt="">
    <h3 class="slogan-type">Наш последний проект</h3>
    <p class="main-color-text">Не бойтесь перемен</p>
</div>
<div class="container-fluid">
    <div class="row img-mar-null">
        @if(count($images) > 3)
            @for($i = 0; $i < 4; $i++)
            <div class="col-xs-6 col-sm-6 col-md-3 img-pad-null">
                <img class="img-responsive" src="{{asset('upload/images_large/'.$images[$i]->img)}}">
            </div>
            @endfor
        @endif
    </div>
    <div class="row img-mar-null">
        @if(count($images) > 7)
            @for($i = 4; $i < 8; $i++)
                <div class="col-xs-6 col-sm-6 col-md-3 img-pad-null">
                    <img class="img-responsive" src="{{asset('upload/images_large/'.$images[$i]->img)}}">
                </div>
            @endfor
        @endif
    </div>
    <div class="gallery-info">
        <div class="container">
            <div class="row"></div>
            <div class="col-md-offset-1 col-md-8 uppercase">
                <h3>Хотите посмотреть все наши работы ?</h3>
            </div>
            <div class="col-md-3">
                <a class="btn my-btn" href="{{url('/gallery/show')}}">Посмотреть все фото</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="image-2-text">
                <h2 class="slogan-type">Почему мы?</h2>
                <p class="main-color-text">Многие веб-разработчики на сайтах размещают после
                    навигационного меню фоновое изображение, которое
                    придаёт веб-странице некоторый стиль и делает дизайн
                    сайта более завершённым.</p>
                <div class="block-info">
                    <img class="img-circle my-img-circle" src="bootstrap/images/man-1.jpg" alt="">
                    <div class="image-2-info">
                        <strong class="uppercase">Огромный опыт работы</strong>
                        <div class="main-color-text">Многие веб-разработчики на сайтах размещают после
                            навигационного меню</div>
                    </div>
                </div>
                <div class="block-info">
                    <img class="img-circle my-img-circle" src="bootstrap/images/man-2.jpg" alt="">
                    <div class="image-2-info">
                        <strong class="uppercase">Передовые технологии</strong>
                        <div class="main-color-text">Многие веб-разработчики на сайтах размещают после
                            навигационного меню</div>
                    </div>
                </div>
                <div class="block-info">
                    <img class="img-circle my-img-circle" src="bootstrap/images/man-3.jpg" alt="">
                    <div class="image-2-info">
                        <strong class="uppercase">Честность и порядочность</strong>
                        <div class="main-color-text">Многие веб-разработчики на сайтах размещают после
                            навигационного меню</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <img src="bootstrap/images/man.png" alt="">
        </div>
    </div>
</div>
@endsection