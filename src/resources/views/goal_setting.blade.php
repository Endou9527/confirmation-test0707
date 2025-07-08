@extends('layouts.app2')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/goal_setting.css') }}">
@endsection

@section('content')
  <main>
    <div class="flame">
      <div class="title_section">
        <h2 class="title_inner">目標体重設定</h2>
      </div>
      <div class="goal_section">
        <div class="goal_input">
          <input type="number" step="0.1" class="goal_input--inner">kg
        </div>
        <div class="goal_validation"></div>
      </div>
      <div class="button_section">
        <div class="button_section--inner">
          <div class="button_back">
            <a href="/admin">戻る</a>
          </div>
          <div class="button_update">
            <button type="submit" action="/target">更新</button>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection