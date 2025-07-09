@extends('layouts.app1')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register_step2') }}">
@endsection

@section('title_section')
  <div class="title__page-title">
    <h2>新規会員登録</h2>
  </div>
  <div class="title__step-name">
    <h3>STEP２　体重データの入力</h3>
  </div>
@endsection

@section('input_section')
  <form action="/register" method="post">
    @csrf
    <div class="current_weight">
      <label for="">現在の体重</label>
      <input type="number" step="0.1" name="current_weight" placeholder="現在の体重を入力">kg
    </div>
    <div class="target_weight">
      <label for="target">目標の体重</label>
      <input type="number" name="target_weight" step="0.1" id="target" placeholder="目標の体重を入力">kg
    </div>
@endsection

@section('button_section')
  <button type="submit">アカウント作成</button>
  </form>
@endsection
