<!DOCTYPE html>
<html>
<head>

   	<title> ホーム </title>
   <!-- Uikit -->
    <link rel="stylesheet" type="text/css" href="{{asset('uikit-3.5.0/css/uikit.min.css')}}">
    <script type="text/javascript" src="{{asset('uikit-3.5.0/js/uikit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('uikit-3.5.0/js/uikit-icons.min.js')}}"></script>

    <!-- カラー　CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/text.css')}}">

    <style>
    	.border {
    		border-radius: 20px;
    		font-size: 20px;
    	}
    	h1 {
    		padding-top: 100px;
    		padding-bottom: 30px;
    	}

    	h4 {
    		padding: 50px;
    	}
    </style>

</head>
<body>

    <div class="uk-text-center" uk-grid>
	    <div class="uk-width-1-1">
	        <div class="uk-card uk-card-body">
	        	<h1>カラーコード</h1>
	        	<h4 class="text-gray">
	        		グループ課題のために作成したものです。<br>
                    CSSライブラリをイメージしています。<br>
                    このサイトを利用することでクラス指定によりカラーや整列を呼び出すことができます。
	        	</h4>
	        	<a href="{{route('document')}}" class="uk-button uk-button-large uk-button-default border black text-white"> 
	        		利用方法
	        	</a>
	        	<a href="{{route('download')}}" class="uk-button uk-button-large uk-button-default border border deep-sky text-white"> ダウンロード </a>
	        </div>
	    </div>
	</div>
    
</body>
</html>


	
