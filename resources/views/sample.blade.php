@extends('layouts.app')

@section('title')
	<title> サンプル </title>
@endsection

@section('content')

	<div class="uk-flex uk-flex-column">
		<h2 class="uk-heading-divider">サンプル</h2>

		<h4 class="uk-text-center text-gray"> テンプレートや何かコードから作成しました結果のページ　</h4>
		<p class="uk-text-center text-ash">サンプルについて書きたいこと</p>

		<!-- 二つレイアウトがあります、決まってないのでとりあえずここに置いています -->

		<!-- 第一 -->
		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
		    <div class="uk-card-media-left uk-cover-container">
		        <img src="images/light.jpg" alt="" uk-cover> <!-- 写真がなかったらなし -->
		        <canvas width="600" height="400"></canvas>
		    </div>
		    <div>
		        <div class="uk-card-body">
		            <h3 class="uk-card-title">Media Left</h3>
		            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
		        </div>
		    </div>
		</div>

		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
		    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
		        <img src="images/light.jpg" alt="" uk-cover> <!-- 写真がなかったらなし -->
		        <canvas width="600" height="400"></canvas>
		    </div>
		    <div>
		        <div class="uk-card-body">
		            <h3 class="uk-card-title">Media Right</h3>
		            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
		        </div>
		    </div>
		</div>

		<!-- 第二 -->
		<div class="uk-child-width-1-2@m" uk-grid>
		    <div>
		        <div class="uk-card uk-card-default">
		            <div class="uk-card-media-top">
		                <img src="images/light.jpg" alt=""> <!-- 写真がなかったらなし -->
		            </div>
		            <div class="uk-card-body">
		                <h3 class="uk-card-title">Media Top</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
		            </div>
		        </div>
		    </div>
		    <div>
		        <div class="uk-card uk-card-default">
		            <div class="uk-card-body">
		                <h3 class="uk-card-title">Media Bottom</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
		            </div>
		            <div class="uk-card-media-bottom">
		                <img src="images/light.jpg" alt=""> <!-- 写真がなかったらなし -->
		            </div>
		        </div>
		    </div>
		</div>
	</div>

@endsection