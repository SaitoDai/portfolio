@extends('layouts.app')

@section('title')
<title>Profile</title>
@endsection

@section('content')
<div class="mt-5 mb-5 py-5 d-flex align-items-center flex-column"> 
  <p>ログインして管理画面に移動します。</p>
  <form action="{{ route('users.login') }}" method="post">
    @csrf
    @method('post')
    <input class="mb-2 form-control" type="email" name="email"/>
    <input class="mb-3 form-control" type="password" name="password"/>
    <div class="d-flex">
      <button class="btn btn-success ms-auto" value="submit">送信</button>
    </div>
  </form>
</div>

@endsection