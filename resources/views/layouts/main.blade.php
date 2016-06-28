<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/test_style.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/modbox_style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/fancybox/source/jquery.fancybox.css')}}" type="text/css" media="screen"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('scripts')
</head>
<body>
<div class="row header-info">
    <div class="container">Рады приветствовать Вас на сайте компании "Классные пацаны"</div>
    <div class="img-slider"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-lg-offset-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 header-info-1">
            <span class="hidden-xs glyphicon glyphicon-time header-info-glif"></span>
            <div>
                <strong class="uppercase">Часы работы</strong>
                <div class="main-color-text">пн-птн: 12.00 - 17.00</div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 header-info-1">
            <span class="hidden-xs glyphicon glyphicon-info-sign header-info-glif"></span>
            <div>
                <strong class="uppercase">Где мы находимся</strong>
                <div class="main-color-text">пер.Вжопинский г.Мухосранск</div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}">Главная</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Полезные статьи <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php $i = 0?>
                                @foreach($categoryTree as $item)
                                @if($item->level > $i)
                                        <ul style='margin-left:{{$item->level * 50}}px;'
                                            id='list_{{$item->parent_id}}' class="subcategory">
                                @endif
                                @if($item->level < $i)
                                        </ul>
                                @endif
                                <?php $i = $item->level?>
                                <li><a id='{{$item->id}}' onmouseover="javascript:Menu({{$item->id}})"
                                            href="{{url('/showArticle/'.$item->id)}}">{{$item->name}}</a></li>
                            @endforeach
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{url('/showLatestNews')}}">Последние новости</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/gallery/show')}}">Галерея</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Прайс-листы</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('js/fancybox/source/jquery.fancybox.pack.js')}}" type='text/javascript'></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("a.gallery").fancybox();
        $("a.modbox").fancybox();
    });
</script>
<script type="text/javascript">

    function Menu(id) {
//        $('a').click(function(event) {
//            event.preventDefault();
//        });
        var menu = document.getElementById('list_' + id).style;
        if (menu.display == 'none') {
            menu.display = 'block';
        }
        else {
            menu.display = 'none';
        }
    }
</script>
</body>
<footer>
    <div class="row footer-info">
        <div class="container">
            <div class="contact-us">
                <img src="{{asset('bootstrap/images/bricks.png')}}" alt="">
                <div>
                    <h4 class="text-gr">Хотите чтобы мы воплотили Вашу мечту?</h4>
                    <h4 class="uppercase">Просто<a class="contact-us-a modbox fancybox.ajax" href="{{url('/modbox1')}}">свяжитесь
                            с нами</a>и дело сделано! </h4>
                </div>
                <a class="btn my-btn hidden-xs modbox fancybox.ajax" href="{{url('/modbox1')}}">Связаться</a>
            </div>
            <div class="col-md-3 footer">
                <h5 class="footer-top uppercase">Наши контакты</h5>
                <img src="{{asset('bootstrap/images/yellow-line.png')}}" alt="">
                <h5>Адрес</h5>
                <p>пер.Вжопинский г.Мухосранск</p>
                <h5>E-mail</h5>
                <p>123@123.com</p>
                <h5>Телефон</h5>
                <p>+38(076)457 35 44</p>
                <p>+38(076)457 35 44</p>
            </div>
            <div class="col-md-3 footer">
                <h5 class="footer-top uppercase">Время работы</h5>
                <img src="{{asset('bootstrap/images/yellow-line.png')}}" alt="">
                <p><span>Понедельник - Пятница</span>: 12.00 - 17.00</p>
                <p><span>Суббота - Воскресение</span>: Выходные</p>
            </div>
        </div>
    </div>
    <div class="row footer-info-bottom">
        <div class="container">
            <div class="copy">Copyright © 2016 сайт разработан Toxa-Junior</div>
            <ul class="footer-nav">
                <li><a href="{{url('/admin')}}">Войти</a></li>
                <li><a href="#">Выйти</a></li>
            </ul>
        </div>
    </div>
</footer>
</html>