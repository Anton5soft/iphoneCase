<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="http://localhost:8000/packages/davzie/laravel-bootstrap/css/bootstrap.css">
        @yield('head')
	</head>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/">iBuy</a>
            </div>

            <div class="collapse navbar-left navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="http://localhost:8000/">Главная</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Чехлы
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="/posts" tabindex="-1" role="menu">Чехлы на iphone 5/5s</a></li>
                            <li><a href="http://google.com" tabindex="-1" role="menu">Чехлы на iphone 5/5s</a></li>
                    </li>
                        </ul>
                    </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Акссесуары
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li><a href="http://google.com" tabindex="-1" role="menu">Чехлы на iphone 5/5s</a></li>
                        <li><a href="http://google.com" tabindex="-1" role="menu">Чехлы на iphone 5/5s</a></li>
                </li>
                </ul>
                </li>
                    <li class="">
                        <a href="http://localhost:8000/admin/blocks">Доставка и оплата</a>
                    </li>
                    <li class="">
                        <a href="http://localhost:8000/admin/galleries">Отзывы</a>
                    </li>
                   
                </ul>
            </div><!-- /.nav-collapse -->


    </div><!-- /.navbar -->
	<body>

		<div class="container">
			@if (Session::has('message'))
				<div class="flash alert">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif

			@yield('main')
		</div>

	</body>

    <script src="http://localhost:8000/packages/davzie/laravel-bootstrap/js/jquery.js"></script>
    <script src="http://localhost:8000/packages/davzie/laravel-bootstrap/js/bootstrap.min.js"></script>
    @yield('js')
</html>