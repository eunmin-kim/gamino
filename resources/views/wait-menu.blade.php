<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/wait-menu.css'])
    <title>waitcreate3</title>
</head>

<body>
<div class="all">
    <nav class="leftnavibar">
        <ul class="menu-bar">
            <div class="li-title_toolbox">
                <li class="nav-item li-title1"><img src="image/logo.png" class="mainlogo"></li>
                <li class="nav-item li-title1-1">The<br>Restaurant<br>reservation system</li>
            </div>
            <li class="nav-item li-title2"><img src="image/Cart.png" class="profile"></li>
            <li class="nav-item li-title3">장 바 구 니</li>
            <div class="menu-bar-item">
            </div>
            <li class="total">총합계 : 0원</li>

            <li><a href="#" class="pay">결제하기</a></li>

        </ul>
    </nav>

    <div class="content">
        <div class="caption">※&nbsp;&nbsp;&nbsp;금일 영업시간 : 18:00 ~ 22:00 매장이용에 참고 바랍니다.</div>
        <div class="box1">
            <div class="umm">
                <div class="title">
                    Menu
                </div>
                <div class="babo">
                    <div class="toolbox1">
                        <div><img src="image/taco.jpg" class="photo"></div>
                        <div class="menu">
                            <div class="name item1">타코야끼 8알 | 4.5</div>
                            <button class="choose item1">선택</button>
                        </div>
                        <div class="menu">
                            <div class="name item2">타코야끼 12알 | 6.5</div>
                            <button class="choose item2">선택</button>
                        </div>
                        <div class="menu">
                            <div class="name item3">타코야끼 16알 | 8.5</div>
                            <button class="choose item3">선택</button>
                        </div>

                    </div>

                    <div class="toolbox2">
                        <div><img src="image/taco.jpg" class="photo"></div>
                        <div class="menu">
                            <div class="name item4">막동이 | 14.0</div>
                            <button class="choose item4">선택</button>
                        </div>
                        <div class="menu">
                            <div class="name item5">야동이 | 14.0</div>
                            <button class="choose item5">선택</button>
                        </div>

                    </div>

                    <div class="toolbox3">
                        <div><img src="image/taco.jpg" class="photo"></div>
                        <div class="menu">
                            <div class="name item6">오코노미야끼 까만맛 | 11.0</div>
                            <button class="choose item6">선택</button>
                        </div>
                        <div class="menu">
                            <div class="name item7">오코노미야끼 빨간맛 | 11.0</div>
                            <button class="choose item7">선택</button>
                        </div>
                        <div class="menu">
                            <div class="name item8">오코노미야끼 하얀맛 | 13.0</div>
                            <button class="choose item8">선택</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@vite(['resources/js/select-menu.js'])
</body>

</html>
