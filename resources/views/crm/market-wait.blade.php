<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/market-wait.css'])
    <title>store3</title>
</head>

<body>
<div class="all">
    <nav class="leftnavibar">
        <ul>
            <li class="nav-item li-title1"><img src="{{asset('image/logo.png')}}" class="mainlogo"></li>
            <li class="nav-item li-title1-1">The<br>Restaurant<br>reservation system</li>
            <li class="nav-item li-title2"><img src="{{asset('image/profile.png')}}" class="profile"></li>
            <li class="nav-item li-title3">가미노야끼</li>
            <li><a class="current">가게 관리</a></li>
            <li><a>메뉴관리</a></li>
            <li><a>로그아웃</a></li>
        </ul>
    </nav>

    <div class="content">
        <div class="caption">※&nbsp;&nbsp;&nbsp;금일 영업시간 : 18:00 ~ 22:00 매장이용에 참고 바랍니다.&nbsp;&nbsp;&nbsp;
            <button class="Cbutton change-notice-btn">
                변경 요청하기
            </button>
        </div>

        <div class="box1">
            <div class="title">
                가게 관리
            </div>


            <div class="babo">
                <div class="bbabo">
                    <a href="{{route('crm.info')}}"><div class="bbbabo">기본정보</div></a>

                    <div class="bbbabo1">대기정보</div>
                </div>

                <div class="tools">
                    @foreach($waiting as $i => $v)
                        <div class="toolbox{{$i}}">
                            <div class="a">
                                <div class="ment">
                                    {{$i}}번째 {{$v->name}}님<br>
                                    {{$v->order_menu}}<br>
                                    등록시간 {{$v->created_at}}<br>
                                </div>

                            </div>
                            <div class="b">
                                <input class="box-id" type="hidden" value="{{$i}}">
                                <input class="waiting-id" type="hidden" value="{{$v->waiting_id}}">
                                <button class="button2 order-finish-btn">
                                    입장
                                </button>
                            </div>
                        </div>

                    @endforeach


                </div>


            </div>


        </div>
    </div>
</div>

@vite(['resources/js/crm.js'])
</body>

</html>
