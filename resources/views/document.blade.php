@extends('layouts.app')

@section('title')
	<title> ドキュメント </title>

	<style type="text/css">
		.divider {
			width:800px; 
			padding:20px; 
			margin:20px;
		}
	</style>
@endsection

@section('content')

	<div class="uk-flex uk-flex-column">
        <h3>ライブラリー使い方　：</h3>

        <ul class="uk-list uk-list-disc uk-list-muted">
            <li>このファイルダウンロード　：　<br>
            	<div class="divider">
            		<button class="uk-button uk-button-large uk-button-default light-sky text-white"> ダウンロード </button>
            	</div>
            </li>

            <li> HTML マークアップ　：　<br>
            	<div class="divider light-gray">
	            	
	            	&lt;link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/color.css"&gt; <br>
	    			&lt;link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/text.css"&gt;

    			</div>

            </li>
    	</ul>
    </div>

@endsection