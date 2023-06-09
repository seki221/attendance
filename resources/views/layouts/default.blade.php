<!DOCTYPE html>
<html lang="ja">
<?php

use Carbon\Carbon;
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/default.css">
</head>

<body>
  <header>
    <div class="header__inner">
      <div class="header__title">
        <a href="/" class="header__title">Atte</a>
      </div>
      @if(Auth::check())
      <nav>
        <ul>
          <li class="nav__item">
            <a href="/">ホーム</a>
          </li>
          <li class="nav__item">
            <a href="/attendance_list?date={{Carbon::today()->format('Y-m-d')}}">日付一覧</a>
          </li>
          <li class="nav__item"><a href="/user_page">ユーザー 一覧</a></li>
          <li class="nav__item">
            <form action="{{route('logout')}}" method="post">
              @csrf
              <button class="nav__logout">ログアウト</button>
            </form>
          </li>
        </ul>
      </nav>
      @endif
    </div>
  </header>
  @yield('content')
  <footer>
    <small>Atte, Inc.</small>
  </footer>
</body>

</html>