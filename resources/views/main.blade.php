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
            @auth('market')

                <li style="color: white;text-align: center;"><a href="{{route('crm.logout')}}">로그아웃</a></li>
                <li style="color: white;text-align: center;"><a href="{{route('crm.info')}}">관리자 페이지</a></li>
            @elseauth('web')
                <li style="color: white;text-align: center;">반갑습니다.</li>
                <li style="color: white;text-align: center;"><a href="{{route('logout')}}">로그아웃</a></li>
            @else
                <li class="nav-item li-title3">로그인 해주세요</li>
                <li><a href="{{route('login')}}" class="current">로그인</a></li>
                <li><a href="{{route('crm.login')}}">관리자 로그인</a></li>
                <li><a href="{{route('join')}}">회원가입</a></li>
            @endauth
        </ul>
    </nav>

    <div class="content">

        <div class="box1">
            <div>
                <img src="image/mmm.png" class="center">
            </div>
            <div class="ment1">음식점 예약 시스템</div>
            <div class="ment">
               Here To Go 에 오신 것을 환영합니다<br><br>
                예약 시스템으로 당신의 소중한 시간을 확보하세요

            </div>
           @auth('market')

            @else
                <a href="{{route('wait.create')}}" style="display: block;text-decoration: none;color: white" class="">
                    <button style="background: rgb(2,0,36);background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(245,149,149,1) 0%, rgba(255,124,0,1) 100%);" class="p-4 mt-4 font-black rounded-xl">예약하러 가기</button>
                </a>
            @endauth
        </div>
    </div>
</div>
@auth()
    @if(session('order') === true)
        <div class="bg-white p-4 rounded text-center" style="position: absolute; top: 20px; right: 20px;">
            <p class="font-black" style="display: block">현재 대기 접수된 주문이 있어요!</p>
            <a href="/wait-order" style="text-decoration: underline;display: block" class="mt-2">바로가기</a>
        </div>
    @endif
@endauth
</body>
</html>
