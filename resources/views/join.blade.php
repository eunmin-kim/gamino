<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/join.css'])
    <title>join</title>
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
        <div class="caption">※&nbsp;&nbsp;&nbsp;금일 영업시간 : 18:00 ~ 22:00 매장이용에 참고 바랍니다.</div>


        <form class="box1">
            <div class="title">
                JOIN
            </div>
            <div class="toolbox1">
                <div>I D &nbsp;&nbsp;&nbsp;&nbsp;: <input class="id"></div>
                <div>password : <input class="pw"></div>
                <div>password-check : <input class="pw"></div>
                <div>name : <input class="pw"></div>
                <div>phone number : <input class="pw"></div>
            </div>
            <div class="toolbox2">
                <button type="submit" class="box3">회원가입</button>
                <button class="box4 back-btn"><a style="text-decoration: none;color: white;" href="/">뒤로가기</a></button>
            </div>
        </form>

    </div>
</div>
@vite(['resources/js/app.js'])
</body>

</html>
