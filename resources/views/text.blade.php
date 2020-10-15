@extends('layouts.app')

@section('title')
	<title> テキスト </title>
	<style type="text/css">
		.box {
			width: 450px;
			height: 150px;
			padding: 10px;
		}
	</style>
@endsection

@section('content')

	<div class="uk-flex uk-flex-column">
        <h3 class="uk-heading-divider">テキストカラー</h3>

        <ul class="uk-list uk-list-disc uk-list-muted">
        	<h4>使い方　：</h4>
            <li>以下のカラーパレッドから好きな色を選んでください</li>
            <li>選んだカラー名はクラス名として使用します</li> <br>
            <li>
            	<code>class</code> に入れて使用してください。
            	<br>
       		
        		<strong>例</strong>　：  レッドの"brick" クラス
        		<br>
        		<code>
        			&lt;span class='text-brick'&gt; これは "text-brick" のクラスです　&lt;/span&gt;
        		</code>
        		<br>
        		<br>

        		<strong>結果</strong>　：
        		<span class='text-brick'> 
        			これは "text-brick" のクラスです　
        		</span>	
       		</li> 
    	</ul>
    </div>


    <br>
    <br>
    <h3 class="uk-heading-divider paddingtop">テキストの整列</h3>

   	<div uk-grid>
	    <div>
	        <div class="uk-width-1-2">
	        	<h3 class="uk-card-title">左揃え</h3>
	        	<div class="box text-left light-beige">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
				</div>
	        </div>
	    </div>
	    <div>
	        <div class="uk-width-1-2">
	        	<h3 class="uk-card-title">中央揃え</h3>
	        	<div class="box text-center light-beige">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
				</div>
	        </div>
	    </div>
	    <div>
	        <div class="uk-width-1-2">
	        	<h3 class="uk-card-title">右揃え</h3>
			    <div class="box text-right light-beige">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
				</div>
	        </div>
	    </div>
	    <div>
	        <div class="uk-width-1-2">
	        	<h3 class="uk-card-title">両端揃え</h3>
	        	<div class="box text-justify light-beige">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.
				</div>
	        </div>
	    </div>
	</div>


    <h3 class="uk-heading-divider paddingtop">カラー</h3>
		
    <div class="uk-flex uk-flex-center">
		<div class="uk-width-3-5@m uk-width-2-3@l">
			<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">モノクロム</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <span class='gray text-white'>
			            		 	text-white
			            		</span>
			            	</li>
	        				<li> <span class='text-light-gray'>
	        						text-light-gray
	        					</span>
	        				</li>
	        				<li> <span class='text-ash'>
	        						text-ash
	        					</span>
	        				</li>
	        				<li> <span class='text-gray'>
	        						text-gray
	        					</span>
	        				</li>
	        				<li> <span class='text-black'>
	        						text-black
	        					</span>
	        				</li>
			            </ul>    
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">レッド</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <span class='text-orange-red'>
			            			text-orange-red
			            		</span>
			            	</li>
			            	<li> <span class='text-red'>
			            			text-red
			            		</span>
			            	</li>
			            	<li> <span class='text-crimson'>
			            			text-crimson
			            		</span>
			            	</li>
			            	<li> <span class='text-light-brick'>
			            			text-light-brick
			            		</span>
			            	</li>
	        				<li> <span class='text-brick'>
	        						text-brick
	        					</span>
	        				</li>
	        				<li> <span class='text-dark-maroon'>
	        						text-dark-maroon
	        					</span>
	        				</li>
	        				
			            </ul>   
			        </div>
			    </div>
			     <div>
			    	<div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">ピンク</h3>
			            	<ul class="uk-list uk-list-square">
			            		<li> <span class='text-pink-brown'>
			            				text-pink-brown
			            			</span>
			            		</li>
	        					<li> <span class='text-nude-light-pink'>
	        							text-nude-light-pink
	        						</span>
	        					</li>
	        					<li> <span class='text-nude-pink'>
	        							text-nude-pink
	        						</span>
	        					</li>
	        					<li> <span class='text-light-pink'>
	        							text-light-pink
	        						</span>
	        					</li>
	        					<li> <span class='text-pink'>
	        							text-pink
	        						</span>
	        					</li>
			            		<li> <span class='text-fuschia'>
			            				text-fuschia
			            			</span>
			            		</li>
	        					<li> <span class='text-salmon'>
	        							text-salmon
	        						</span>
	        					</li>
			            	</ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">イエロー</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <span class='text-pale-gold'>
			            			text-pale-gold
			            		</span>
			            	</li>
			            	<li> <span class='text-light-khaki'>
			            			text-light-khaki
			            		</span>
			            	</li>
			            	<li> <span class='text-yellow'>
			            			text-yellow
			            		</span>
			            	</li>
			            	<li> <span class='text-light-gold'>
			            			text-light-gold
			            		</span>
			            	</li>
			            	<li> <span class='text-gold'>
			            			text-gold
			            		</span>
			            	</li>
			            	<li> <span class='text-khaki'>
			            			text-khaki
			            		</span>
			            	</li>
			        		<li> <span class='text-dark-gold'>
			        				text-dark-gold
			        			</span>
			        		</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">ベージュ</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <span class='text-yellow-beige'>
			            			text-yellow-beige
			            		</span>
			            	</li>
			            	<li> <span class='text-light-beige'>
			            			text-light-beige
			            		</span>
			            	</li>
			            	<li> <span class='text-beige'>
			            			text-beige
			            		</span>
			            	</li>
			            	<li> <span class='text-red-beige'>
			            			text-red-beige
			            		</span>
			            	</li>			        		
			        		<li> <span class='text-brown-beige'>
			        				text-brown-beige
			        			</span>
			        		</li>
			        		<li> <span class='text-light-brown'>
			        				text-light-brown
			        			</span>
			        		</li>
			        		<li> <span class='text-wood'>
			        				text-wood
			        			</span>
			        		</li>
			        		<li> <span class='text-chocolate'>
			        				text-chocolate
			        			</span>
			        		</li>
			        		<li> <span class='text-dark-brown'>
			        				text-dark-brown
			        			</span>
			        		</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">ブルー</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <span class='text-aqua'>
			            			text-aqua
			            		</span>
			            	</li>
			        		<li> <span class='text-turquoise'>
			        				text-turquoise
			        			</span>
			        		</li>
			        		<li> <span class='text-sky'>
			        				text-sky
			        			</span>
			        		</li>
			        		<li> <span class='text-light-sky'>
			        				text-light-sky
			        			</span>
			        		</li>
			        		<li> <span class='text-deep-sky'>
			        				text-deep-sky
			        			</span>
			        		</li>
			        		<li> <span class='text-marine'>
			        				text-marine
			        			</span>
			        		</li>
	        				<li> <span class='text-dark-aqua'>
	        						text-dark-aqua
	        					</span>
	        				</li>
	        				<li> <span class='text-blue'>
	        						text-blue
	        					</span>
	        				</li>
	        				<li> <span class='text-dark-marine'>
	        						text-dark-marine
	        					</span>
	        				</li>
	        				<li> <span class='text-navy'>
	        						text-navy
	        					</span>
	        				</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">パープル</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <span class='text-thistle'>
			            			text-thistle
			            		</span>
			            	</li>
			            	<li> <span class='text-plum'>
			            			text-plum
			            		</span>
			            	</li>
			            	<li> <span class='text-violet'>
			            			text-violet
			            		</span>
			            	</li>
			            	<li> <span class='text-purple'>
			            			text-purple
			            		</span>
			            	</li>
			        		<li> <span class='text-violet-red'>
			        				text-violet-red
			        			</span>
			        		</li>
			        		<li> <span class='text-dark-purple'>
			        				text-dark-purple
			        			</span>
			        		</li>
			        		<li> <span class='text-dark-violet'>
			        				text-dark-violet
			        			</span>
			        		</li>
			            </ul>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-hover uk-card-body">
			            <h3 class="uk-card-title">緑</h3>
			            <ul class="uk-list uk-list-square">
			            	<li> <span class='text-light-leaf'>
			            			text-light-leaf
			            		</span>
			            	</li>
			            	<li> <span class='text-leaf'>
			            			text-leaf
			            		</span>
			            	</li>
			            	<li> <span class='text-green'>
			            			text-green
			            		</span>
			            	</li>
			        		<li> <span class='text-light-green'>
			        				text-light-green
			        			</span>
			        		</li>
			        		<li> <span class='text-light-seaweed'>
			        				text-light-seaweed
			        			</span>
			        		</li>
			        		<li> <span class='text-seaweed'>
			        				text-seaweed
			        			</span>
			        		</li>
			        		<li> <span class='text-dark-green'>
			        				dark-green
			        			</span>
			        		</li>
	        				<li> <span class='text-olive'>
	        						olive
	        					</span>
	        				</li>
	        				<li> <span class='text-dark-leaf'>
	        						dark-leaf
	        					</span>
	        				</li>
			            </ul>
			        </div>
			    </div>
			   
			</div>
		</div>
	</div>

@endsection
