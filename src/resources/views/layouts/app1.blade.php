<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PiGLy</title>
  <link rel="stylesheet" href="{{ asset('css/common1.css') }}">
  @yield('css')
</head>
<body>
  <main>
    <div class="flame">
      <!-- タイトルほか -->
      <div class="title_section">
        <h1 class="title_app">PiGLy</h1>
        @yield('title_section')
      </div>

      <!-- 入力欄 -->
        @yield('input_section')
      <!-- ボタン（「次に進む」「登録」など） -->
      <div class="button_section">
        @yield('button_section')
      </div>
    </div>
  </main>
</body>
</html>