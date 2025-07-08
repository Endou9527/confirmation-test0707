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
<form action="/">
  <div class="current_weight">
    <label for="">現在の体重</label>
    <input type="number" step="0.1" placeholder="現在の体重を入力">kg
  </div>
  <div class="target_weight">
    <label for="">目標の体重</label>
    <input type="number" step="0.1" placeholder="目標の体重を入力">kg
  </div>
</form>
@endsection

@section('button_section')
  <button type="submit">アカウント作成</button>
@endsection