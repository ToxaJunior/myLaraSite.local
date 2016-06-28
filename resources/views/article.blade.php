@extends('layouts.main')
@section('content')
    <div class="row slider">
        <div class="item">
            <img class="img-responsive gallery-img-slider" src="{{asset('bootstrap/images/header-img-news.jpg')}}" alt="">
            <h1 class="slogan-type-white caption-info">{{$sliderTitle}}</h1>
        </div>
    </div>
    <div class="container">
    @if(isset($content))
        <h2>{!! $content->title !!}</h2>
        {!! $content->article.' |'!!}
        {!! $content->created_at !!}

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
@endsection