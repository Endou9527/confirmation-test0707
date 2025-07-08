@extends('layouts.app2')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
  <main>
    <div class="flame">
      <div class="title_section">
        <h2 class="title">Weight Log</h2>
      </div>

      <div class="record_section">
        <div class="record_date">
          <div class="record_date--input">
            <label for="">日付</label>
            <input type="date">
          </div>
          <div class="record_date--validation"></div>
        </div>

        <div class="record_weight">
          <div class="record_weight--input">
            <label for="weight">体重</label>
            <input type="number" step="0.1" name="weight" id="weight"><span>kg</span>
          </div>
          <div class="record_weight--validation"></div>
        </div>

        <div class="record_calories">
          <div class="record_calories--input">
            <label for="calories">摂取カロリー</label>
            <input type="number" name="calories" id="calories"><span>cal</span>
          </div>
          <div class="record_calories--validation"></div>
        </div>

        <div class="record_exercise-time">
          <div class="record_exercise-time--input">
            <label for="exercise_time">運動時間</label>
            <input type="time" name="exercise_time" id="exercise_time">
          </div>
          <div class="record_exercise-time--validation"></div>
        </div>

        <div class="record_exercise-content">
          <div class="record_exercise-content--input">
            <label for="exercise_content">運動内容</label>
            <input type="text" name="exercise_content" id="exercise_content">
          </div>
          <div class="record_exercise-content--validation"></div>
        </div>
      </div>

      <div class="button_section">
        <div class="button_back">
          <a href="/admin">戻る</a>
        </div>
        <div class="button_update">
          <button type="submit">更新</button>
        </div>
        <div class="button_delete">
          <a href="/delete"></a>
        </div>
      </div>
    </div>
  </main>
@endsection