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
        <h2 class="uk-heading-divider">ライブラリーの使い方　：</h2>

        <ul class="uk-list uk-list-disc uk-list-muted">
        	<li>
        		<ul> <h3>ファイル　：</h3>
		            <li>ZIPダウンロード　：　<br>
		            	<div class="divider">
		            		<a href="{{route('download')}}" class="uk-button uk-button-large uk-button-default deep-sky text-white"> ダウンロード </a>
		            	</div>

		            	<p> パッケージはCSSファイルです。</p>
		            </li>

		            <li> もしくはCDN から参照　：　<br>
		            	<div class="divider light-gray">
			            	
			            	&lt;link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/color.css"&gt; <br>
			    			&lt;link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/text.css"&gt;

		    			</div>
		            </li>
		         </ul>
        	</li>
        	<li>
        		<h3>スターターテンプレート </h3>

    			<div class="divider light-gray">

    				&lt;!DOCTYPE html&gt; <br>
    				&nbsp;	&lt;html&gt; <br>
    				&nbsp; &nbsp;	&lt;head&gt; <br>
    					&nbsp; &nbsp; &nbsp;	&lt;title&gt; Hello, World	&lt;/title&gt; <br>

    					&nbsp; &nbsp; &nbsp;	<span class="text-ash">&lt;!-- ここにいれます --&gt;</span> <br>
    					&nbsp; &nbsp; &nbsp;	&lt;link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/color.css"&gt; <br>
	    				&nbsp; &nbsp; &nbsp;	&lt;link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/text.css"&gt; <br>
    				&nbsp; &nbsp;	&lt;/head&gt; <br>
    				&nbsp; &nbsp;	&lt;body&gt; <br>
    				<br>
    				<br>
    				&nbsp; &nbsp;	&lt;/body&gt; <br>
    				&nbsp;	&lt;/html&gt; <br>
		            
	    		</div>
        	</li>
        	<li>
        		<h3>実施し方： </h3>
        		<ul>
        			<li>使用したい物を選択</li>
        			<li>選択した名前は「クラス」に入れる</li>
        			<li>お好きなコードを使ってください</li>
        		</ul>
        		
        	</li>
    	</ul>
    </div>

@endsection
