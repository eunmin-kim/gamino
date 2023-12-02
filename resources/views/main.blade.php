<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Document</title>
</head>
<body>
<div class="all">
    <nav class="leftnavibar">
        <ul>
            <li class="nav-item li-title1"><a href="/"><img src="image/logo.png" class="mainlogo"></a></li>
            <li class="nav-item li-title1-1">The<br>Restaurant<br>reservation system</li>
            <li class="nav-item li-title2"><img src="image/profile.png" class="profile"></li>
            @guest()
                <li class="nav-item li-title3">로그인 해주세요</li>
                <li><a href="{{route('login')}}" class="current">로그인</a></li>
                <li><a href="{{route('join')}}">회원가입</a></li>
            @endguest
            @auth()
                <li>반갑습니다.</li>
            @endauth
            <li><a>장바구니 / 0</a></li>
        </ul>
    </nav>

    <div class="content">

        <div class="box1">
            <div>
                <img src="image/mmm.png" class="center">
            </div>
            <div class="ment1">The Restaurantreservation system</div>
            <div class="ment">
                식당 예약 웹페이지 Here To Go 에 오신 것을 환영합니다<br><br>
                예약 시스템으로 당신의 소중한 시간을 확보하세요
            </div>
        </div>
    </div>

</body>
</html>
