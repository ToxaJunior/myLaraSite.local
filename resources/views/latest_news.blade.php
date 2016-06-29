@inject('pageController', 'App\Http\Controllers\PageController')
@extends('layouts.main')
@section('content')
    <div class="row slider">
        <div class="item">
            <img class="img-responsive gallery-img-slider" src="{{asset('bootstrap/images/header-img-news.jpg')}}" alt="">
            <div class="container">
                <h1 class="slogan-type-white caption-info-news text-center">{{$sliderTitle}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row first-img-news">
            <div class="col-md-9 col-lg-8">
                @foreach($previews as $preview)
                    <div class="row">
                        <div class="col-xs-4 col-sm-7 col-md-7 img-news">
                            <img src="{{asset('upload/images_news/'.$preview->img_preview)}}" alt="">
                        </div>
                        <div class="col-xs-7 col-sm-5 col-md-4 news-preview-relative">
                            <div class="news-preview">
                                <h4 class="uppercase">{!! $preview->title !!}</h4>
                                <p class="main-color-text">{!! $preview->preview !!}</p>
                                <a class="uppercase" href="{{url('/show/'.$preview->id.'/'.$sliderTitle)}}">
                                    Читать далее  <span class="glyphicon glyphicon-arrow-right"></span></a>
                                <div class="hidden-xs date-info">
                                    <div class="text-center num">{{$preview->created_at->format('d')}}</div>
                                    <div class="text-center">{{$preview->created_at ->format('M.Y')}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="hidden-xs hidden-sm col-md-3 col-lg-4">
                <div class="menu-news">
                    <h4 class="uppercase">Категории</h4>
                    <img src="{{asset('bootstrap/images/yellow-line.png')}}" alt="">
                    <ul class="category">
                        <?php $i = 0?>
                        @foreach($categoryTree as $item)
                            @if($item->level > $i)
                                <div style='margin-left:{{$item->level * 40}}px;'
                                    id='list_{{$item->parent_id}}' class="subcategory_1">
                                    @endif
                                    @if($item->level < $i)
                                </div>
                            @endif
                            <?php $i = $item->level?>
                            <div class="category-line">
                                <div class="inline text-left">
                                    <img src="{{asset('bootstrap/images/paint-yellow.png')}}" alt="">
                                </div>
                                <div class="inline category-name">
                                    <a id='{{$item->id}}' onmouseover="javascript:Menu({{$item->id}})"
                                           href="{{url('/showArticle/'.$item->id)}}">{{$item->name}}</a>
                                </div>
                                <div class="inline category-count">
                                    ({{$pageController->getCountArticles($item->id)}})
                                </div>
                            </div>
                        @endforeach
                        <div class="category-line">
                            <div class="inline">
                                <img src="{{asset('bootstrap/images/paint-yellow.png')}}" alt="">
                            </div>
                            <div class="inline category-name">
                                <a href="{{url('/showLatestNews')}}">Последние новости</a>
                            </div>
                            <div class="inline category-count">
                                ({{App\Page::all()->count()}})
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container text-center news-pagination">
            <div id="pagination"><?php echo $previews->render(); ?></div>
        </div>
    </div>
@endsection