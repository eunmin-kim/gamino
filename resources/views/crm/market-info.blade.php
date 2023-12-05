<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/market-info.css'])
    <title>store1</title>
</head>

<body>
<div class="all">
    <nav class="leftnavibar">
        <ul>
            <li class="nav-item li-title1"><img src="{{asset("image/logo.png")}}" class="mainlogo"></li>
            <li class="nav-item li-title1-1">The<br>Restaurant<br>reservation system</li>
            <li class="nav-item li-title2"><img src="{{asset("image/profile.png")}}" class="profile"></li>
            <li class="nav-item li-title3">가미노야끼</li>
            <li><a class="current">가게 관리</a></li>
            <li><a>메뉴관리</a></li>
            <li><a>로그아웃</a></li>
        </ul>
    </nav>

    <div class="content">
{{--        TODO: 영업시간 보여주기--}}
        <div class="caption">※ @if($marketInfo->market_notice == null)
                                   "공지사항 없음"
            @else
                {{$marketInfo->market_notice}}
        @endif
            <button class="Cbutton change-notice-btn" style="margin-left: 20px;">
                변경 요청하기
            </button>
        </div>

        <div class="box1">
            <div class="title">
                가게 관리
            </div>

            <div class="babo">
                <div class="bbabo">
                    <div class="bbbabo1">기본정보</div>
                    <a href="{{route("crm.wait")}}" class="bbbabo" style="display: block">대기정보</a>
                </div>

                <div class="tools">
                    <div class="toolbox1">
                        <div class="menu">
                            <div class="name">로고</div>
                        </div>
                        <div>
                            <img src="{{asset("storage/images/".$marketInfo->market_logo_img_name)}}" class="photo">
                        </div>
                        <div>

                        </div>
                    </div>


                    <div class="toolbox1">
                        <div class="menu">
                            <div class="name">가게이름</div>
                        </div>
                        <div class="toolment">
                            <h3>{{$marketInfo->market_name}}</h3>
                            <button class="Button change-name-btn">
                                변경 요청하기
                            </button>
                        </div>
                    </div>

                    <div class="toolbox1">
                        <div class="menu">
                            <div class="name">실제위치</div>
                        </div>
                        <div class="toolment">
                            <h4>{{$marketInfo->market_location}}</h4>
                        </div>
                        <div>
                            <button class="Button change-loc-btn">
                                노출위치 변경
                            </button>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

@vite(['resources/js/crm.js'])
</body>

</html>
