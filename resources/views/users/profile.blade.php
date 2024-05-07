@extends('layouts.app')

@section('title')
<title>Profile</title>
@endsection

@section('content')
<div class="mt-5 mb-5 d-flex align-items-center flex-column"> 
  <img class="d-block profile-img" src="{{ asset('storage\images\profile.jpg') }}">
  <div class="profile-text">
    齋藤大<br>
    1990年10月13日
    栃木県宇都宮市生まれ<br>
    武蔵野美術大学工芸工業デザイン学科&ensp;金工専攻卒業<br>
    <br>
    在学中に立体デザイン、画像編集ソフト、金属加工を学ぶ<br>
    大学卒業後は学生時代の経験を活かし、ジュエリーや金工品の制作<br>
    同時にキャリアとして画像処理ソフトを始めとしたPC関連製品の販売・アフターサポートや、キャスターなどの金属製品の営業に携わる<br>
    <br>
    またTVCM用の3DCGモデルのモデリング、リギング、キャスターの工業デザインなどにも携わる<br>
    <br>
    直近ではオンライン家庭教師の自社開発Webアプリの接続・アフターサポート、サイバーセキュリティの監視・情報収集・発信などのIT系業務に携わる<br>
    <br>
    趣味としてピアノを嗜む<br>
  </div>
</div>

@endsection