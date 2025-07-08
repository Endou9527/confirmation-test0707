<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PiGLy</title>
  <link rel="stylesheet" href="{{ asset('css/common2.css') }}">
  @yield('css')
</head>
<body>
  <header class="header">
    <div class="header_inner--title_section">
      <h1 class="header_inner--title">PiGLy</h1>
    </div>
    <div class="header_inner--button_section">
      <div class="header_inner--button">
        <a href="/wight_logs/goal_setting" class="header_inner--button__setting">目標体重設定</a>
      </div>
      <div class="header_inner--button">
        <a href="/logout" class="header_inner--button__logout">ログアウト</a>
      </div>
    </div>
  </header>

  @yield('content')
  
</body>
</html>