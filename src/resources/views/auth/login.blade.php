@extends('layouts.app1')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('title_section')
  <div class="title__page-title">
      <h2>ログイン</h2>
  </div>
@endsection

@section('input_section')
<form action="/login" method="post">
  @csrf
  <div class="personal_section">
    <!-- メールアドレス -->
    <div class="personal_email">
      <div class="email_input">
        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" placeholder="メールアドレスを入力">
      </div>
      <div class="email_validation"></div>
    </div>
    <!-- パスワード -->
    <div class="personal_password">
      <div class="password_input">
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" placeholder="パスワードを入力">
      </div>
      <div class="password_validation"></div>
    </div>
  </div>
@endsection

@section('button_section')
  <div class="button__login">
    <button type="submit">ログイン</button>
  </div>
  <div class="button__register">
    <a href="/register/step1">アカウント作成はこちら</a>
  </div>
</form>
@endsection