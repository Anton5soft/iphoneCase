@extends('layouts.scaffold')
@section('head')
<link rel="stylesheet" href="{{ URL::asset('js/itemslider/css/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('js/itemslider/css/demo.css') }}">
@stop
@section('main')
<br>
<br>

<div id="mi-slider" class="mi-slider">
    <ul>
        <li><a href="#"><img src="images/iphone-5.jpg" alt="img02"><h4>iPhone 5/5s</h4></a></li>
        <li><a href="#"><img src="images/iphone-4.jpg" alt="img01"><h4>iPhone 4/4s</h4></a></li>
        <li><a href="#"><img src="images/iPad.jpg" alt="img03"><h4>iPad</h4></a></li>
        <li><a href="#"><img src="images/iPad-mini.jpg" alt="img04"><h4>iPad mini</h4></a></li>
    </ul>
    <ul>
        <li><a href="#"><img src="images/iphone5-cover.jpg" alt="img10"><h4>Наклейки iPhone 5/5s</h4></a></li>
        <li><a href="#"><img src="images/iphone4-cover.jpg" alt="img09"><h4>Наклейки iPhone 4/4s</h4></a></li>
        <li><a href="#"><img src="images/ipad-cover.jpg" alt="img11"><h4>Наклейки iPad</h4></a></li>

    </ul>
    <ul>
        <li><a href="#"><img src="images/earpods.jpg" alt="img05"><h4>Наушники</h4></a></li>
        <li><a href="#"><img src="images/cable.jpg" alt="img06"><h4>Кабеля</h4></a></li>
        <li><a href="#"><img src="images/chardg.jpg" alt="img07"><h4>Переходники</h4></a></li>
        <li><a href="#"><img src="images/other.jpg" alt="img08"><h4>Разное</h4></a></li>
    </ul>

    <nav>
        <a href="#">Чехлы</a>
        <a href="#">Наклейки</a>
        <a href="#">Аксессуары</a>
    </nav>
</div>
@section('js')
<script>
    $(function() {

        $( '#mi-slider' ).catslider();

    });
</script>
<script src="{{ URL::asset('js/jquery-2.1.0.js') }}"></script>
    <script src="{{ URL::asset('js/itemslider/js/jquery.catslider.js') }}"></script>
    <script src="{{ URL::asset('js/itemslider/js/modernizr.custom.63321.js') }}"></script>
@stop