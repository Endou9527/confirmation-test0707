@extends('layouts.app2')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
  <main class="main">
    <div class="top">
      <div class="top__goal">
        <p>目標体重</p>
        <p class="top__weight">{{ $targetWeight['target_weight'] }}kg</p>
      </div>
      <div class="top__gap">
        <p>目標まで</p>
        <p class="top__weight">{{ $gapWeight }}kg</p>
      </div>
      <div class="top__latest">
        <p>最新体重</p>
        <p class="top__weight">{{ $latestWeight['weight'] }}kg</p>
      </div>
    </div>

    <div class="middle">
      <div class="middle__search-record-section">
        <form class="search_field">
          <input type="date">
          <p>〜</p>
          <input type="date">
          <button type="submit" class="search_field--button">検索</button>
        </form>

        <form action="/weight_logs/create">
          <div class="record_field">
            <input type="checkbox" id="modal-toggle" hidden>
              <!-- モーダル -->
            <div class="record--modal_overlay">
              <div class="record--modal_wrapper">
                <div class="record--modal_header">
                  <h1>Weight Logを追加</h1>
                </div>
                <div class="record--modal_main">
                  <form action="/weight_logs/create">
                    <div class="record--date">
                      <label for="date">日付</label>
                      <input type="date"  name="date" id="date">
                    </div>
                    <div class="record--weight">
                      <label for="weight">体重</label>
                      <input type="number" step="0.1" name="weight" id="weight">
                    </div>
                    <div class="record--calories">
                      <label for="calories">摂取カロリー</label>
                      <input type="number" name="calories" id="calories">
                    </div>
                    <div class="record--exercise_time">
                      <label for="exercise_time">運動時間</label>
                      <input type="time" name="exercise_time" id="exercise_time">
                    </div>
                    <div class="record--exercise_content">
                      <label for="exercise_content">運動内容</label>
                      <input type="text" name="exercise_content" id="exercise_content">
                    </div>
                    <div class="button_field">
                      <label for="modal-toggle" class="close-button">戻る</label>
                      <button type="submit">登録</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </form>
        <label for="modal-toggle" class="open-button">データ追加</label>
      </div>

      <div class="middle__table-section">
        <table>
          <thead>
            <tr>
              <th>日付</th>
              <th>体重</th>
              <th>食事摂取カロリー</th>
              <th>運動時間</th>
              <th>{{-- 詳細画面用 --}}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($weightLogs as $weightLog)
            <tr>
              <td>{{ $weightLog['date'] }}</td>
              <td>{{ $weightLog['weight'] }}</td>
              <td>{{ $weightLog['calories'] }}</td>
              <td>{{ $weightLog['exercise_time'] }}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="pagination_section"></div>
  </main>
@endsection