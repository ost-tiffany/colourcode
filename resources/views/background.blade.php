@extends('layouts.app')

@section('title')
	<title> カラー </title>

	<style type="text/css">
		.textright {
			text-align: right;
			padding-right: 5px;
			color:white;
		}
		.box {
			width: 120px;
			height: 50px;
			border: 0.5px solid gray;
		}
		.example {
			margin: 30px;
			height: 50px;
			max-width: 500px;
		}
	</style>
@endsection

@section('content')
	
	<div class="uk-flex uk-flex-column">
        <h3>バックグラウンドカラー使い方　：</h3>

        <ul class="uk-list uk-list-disc uk-list-muted">
            <li>以下のカラーから選んで</li>
            <li>お好きなカラーの名前はクラスの名前</li> <br>
            <li>
            	<code>class</code> で入れてください
            	<br>
       		
        		<strong>例</strong>　：  紫の"plum" クラス
        		<br>
        		<code>
        			&lt;div class='plum'&gt; これは "plum" のクラスです　&lt;/div&gt;
        		</code>
        		<br>
        		<br>

        		<strong>結果</strong>　：
        		<div class='plum example'> 
        			これは "plum" のクラスです　
        		</div>	

       		</li> <br>
       		<li> 
       			文字の色も変化できます。<a href="{{route('text')}}"> ここで選べます。</a>
       			<br>
       			<strong>例</strong>　：  赤の"crimson" クラス と　モノクロムの"text-white"文字
        		<br>
        		<code>
        			&lt;div class='crimson text-white'&gt; これは "crimson" と "text-white" 文字 のクラスです　&lt;/div&gt;
        		</code>
        		<br>
        		<br>

        		<strong>結果</strong>　：
        		<div class='crimson text-white example'> 
        			これは "crimson" と "text-white" 文字 のクラスです
        		</div>	

       		</li>
    	</ul>

    </div>

	<div class="uk-flex uk-flex-center">

		<div class="uk-width-3-5@m uk-width-2-3@l">
			<div class="uk-child-width-1-3@s uk-grid-match" uk-grid>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">モノクロム</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <div class='textright box white'>
			            		 	<span class="text-gray">White</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box light-gray'>
			            		 	<span>Light-gray</span>
			            		</div>
			            	</li>
	        				<li> <div class='textright box ash'>
	        						<span>ash</span>
	        					</div>
	        				</li>
	        				<li> <div class='textright box gray'>
	        						<span>gray</span>
	        					</div>
	        				</li>
	        				<li> <div class='textright box black'>
	        						<span>black</span>
	        					</div>
	        				</li>
			            </ul>    
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">赤</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <div class='textright box orange-red'>
			            			<span>orange-red</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box red'>
			            			<span>red</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box crimson'>
			            			<span>crimson</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box light-brick'>
			            			<span>light-brick</span>
			            		</div>
			            	</li>
	        				<li> <div class='textright box brick'>
	        						<span>brick</span>
	        					</div>
	        				</li>
	        				<li> <div class='textright box dark-maroon'>
	        						<span>dark-maroon</span>
	        					</div>
	        				</li>
	        				
			            </ul>   
			        </div>
			    </div>
			     <div>
			    	<div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">ピンク</h3>
			            	<ul class="uk-list uk-list-square">
			            		<li> <div class='textright box pink-brown'>
			            				<span class="text-gray">pink-brown</span>
			            			</div>
			            		</li>
	        					<li> <div class='textright box nude-light-pink'>
	        							<span>nude-light-pink</span>
	        						</div>
	        					</li>
	        					<li> <div class='textright box nude-pink'>
	        							<span>nude-pink</span>
	        						</div>
	        					</li>
	        					<li> <div class='textright box light-pink'>
	        							<span>light-pink</span>
	        						</div>
	        					</li>
	        					<li> <div class='textright box pink'>
	        							<span>pink</span>
	        						</div>
	        					</li>
			            		<li> <div class='textright box fuschia'>
			            				<span>fuschia</span>
			            			</div>
			            		</li>
	        					<li> <div class='textright box salmon'>
	        							<span>salmon</span>
	        						</div>
	        					</li>
			            	</ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">黄色</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <div class='textright box pale-gold'>
			            			<span class="text-gray">pale-gold</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box light-khaki'>
			            			<span class="text-gray">light-khaki</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box yellow'>
			            			<span class="text-gray">yellow</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box light-gold'>
			            			<span>light-gold</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box gold'>
			            			<span>gold</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box khaki'>
			            			<span>khaki</span>
			            		</div>
			            	</li>
			        		<li> <div class='textright box dark-gold'>
			        				<span>dark-gold</span>
			        			</div>
			        		</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">ベージュ</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <div class='textright box yellow-beige'>
			            			<span class="text-gray">yellow-beige</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box light-beige'>
			            			<span class="text-gray">light-beige</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box beige'>
			            			<span class="text-gray">beige</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box red-beige'>
			            			<span class="text-gray">red-beige</span>
			            		</div>
			            	</li>			        		
			        		<li> <div class='textright box brown-beige'>
			        				<span class="text-gray">brown-beige</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box light-brown'>
			        				<span>light-brown</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box wood'>
			        				<span>wood</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box chocolate'>
			        				<span>chocolate</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box dark-brown'>
			        				<span>dark-brown</span>
			        			</div>
			        		</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">青</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <div class='textright box aqua'>
			            			<span class="text-gray">aqua</span>
			            		</div>
			            	</li>
			        		<li> <div class='textright box turquoise'>
			        				<span>turquoise</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box sky'>
			        				<span class="text-gray">sky</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box light-sky'>
			        				<span>light-sky</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box deep-sky'>
			        				<span>deep-sky</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box marine'>
			        				<span>marine</span>
			        			</div>
			        		</li>
	        				<li> <div class='textright box dark-aqua'>
	        						<span>dark-aqua</span>
	        					</div>
	        				</li>
	        				<li> <div class='textright box blue'>
	        						<span>blue</span>
	        					</div>
	        				</li>
	        				<li> <div class='textright box dark-marine'>
	        						<span>dark-marine</span>
	        					</div>
	        				</li>
	        				<li> <div class='textright box navy'>
	        						<span>navy</span>
	        					</div>
	        				</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">紫</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <div class='textright box thistle'>
			            			<span>thistle</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box plum'>
			            			<span>plum</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box violet'>
			            			<span>violet</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box purple'>
			            			<span>purple</span>
			            		</div>
			            	</li>
			        		<li> <div class='textright box violet-red'>
			        				<span>violet-red</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box dark-purple'>
			        				<span>dark-purple</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box dark-violet'>
			        				<span>dark-violet</span>
			        			</div>
			        		</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">緑</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <div class='textright box light-leaf'>
			            			<span class="text-gray">light-leaf</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box leaf'>
			            			<span>leaf</span>
			            		</div>
			            	</li>
			            	<li> <div class='textright box green'>
			            			<span>green</span>
			            		</div>
			            	</li>
			        		<li> <div class='textright box light-green'>
			        				<span>light-green</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box light-seaweed'>
			        				<span>light-seaweed</span>
			        			</div>
			        		</li>
			        		<li> <div class='textright box seaweed'>
			        				<span>seaweed</span>
			        		</div>
			        		</li>
			        		<li> <div class='textright box dark-green'>
			        				<span>dark-green</span>
			        			</div>
			        		</li>
	        				<li> <div class='textright box olive'>
	        						<span>olive</span>
	        					</div>
	        				</li>
	        				<li> <div class='textright box dark-leaf'>
	        						<span>dark-leaf</span>
	        					</div>
	        				</li>
			            </ul>
			        </div>
			    </div>
			   
			</div>
		</div>
	</div>

@endsection