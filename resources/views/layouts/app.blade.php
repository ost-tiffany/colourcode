<!DOCTYPE html>
<html>
<head>
   @yield('title')

   <!-- Uikit -->
    <link rel="stylesheet" type="text/css" href="{{asset('uikit-3.5.0/css/uikit.min.css')}}">
    <script type="text/javascript" src="{{asset('uikit-3.5.0/js/uikit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('uikit-3.5.0/js/uikit-icons.min.js')}}"></script>

    <!-- カラー　CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/text.css')}}">

</head>
<body>

    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="{{route('index')}}"><span uk-icon="home"></span></a></li>
                <li class="uk-parent">
                    <a href="#">プロダクト</a>
                    <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                         <li><a href="{{route('document')}}">ドキュメント</a></li>
                        <li><a href="{{route('background')}}">カラー</a></li>
                        <li><a href="{{route('text')}}">テキスト</a></li>
                    </ul>
                </div>
                </li>
                <li><a href="{{route('sample')}}">サンプル</a></li>
            </ul>
        </div>
    </nav>

    <div class="uk-flex uk-flex-center"> 
    <div class="uk-width-5-6">
        <div class="uk-card uk-card-default uk-card-body">
            @yield('content')
        </div>
    </div>
</div>
    
</body>
</html>