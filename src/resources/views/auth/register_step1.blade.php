@extends('layouts.app1')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register_step1.css') }}">
@endsection

@section('title_section')
  <div class="title__page-title">
      <h2>新規会員登録</h2>
  </div>
  <div class="title__step-name">
      <h3>STEP１　アカウント情報の登録</h3>
  </div>
@endsection

@section('input_section')
  <form action="/register/step2" method="post">
    @csrf
    <div class="personal_section">
      <!-- 名前 -->
      <div class="personal_name">
        <div class="name_input">
          <label for="name">お名前</label>
          <input type="name" name="name" id="name" placeholder="名前を入力">
        </div>
        <div class="name_validation"></div>
      </div>
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
    <div class="button__next-step">
      <button type="submit">次に進む</button>
    </div>
    <div class="button__login">
      <a href="/login">ログインはこちら</a>
    </div>
  </form>
  @endsection
