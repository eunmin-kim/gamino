<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/wait-order.css'])
    <title>waitorder1</title>
</head>

<body>
<div class="all">
    <nav class="leftnavibar">
        <ul>
            <li class="nav-item li-title1"><img src="image/logo.png" class="mainlogo"></li>
            <li class="nav-item li-title1-1">The<br>Restaurant<br>reservation system</li>
            <li class="nav-item li-title2"><img src="image/profile.png" class="profile"></li>
            <li class="nav-item li-title3">채연 님 입장하셨습니다.</li>
            <li><a class="current">카드 관리</a></li>
            <li><a>로그아웃</a></li>
            <li><a>장바구니 / 0</a></li>
        </ul>
    </nav>

    <div class="content">
        <div class="caption">※&nbsp;&nbsp;&nbsp;금일 영업시간 : 18:00 ~ 22:00 매장이용에 참고 바랍니다.</div>

        <div class="box1">
            <div class="title">
                현재 내 순서
            </div>
            <div class="dumi">
                <div class="order ">
                    <span class="order-count">25</span>번째 중 <span class="order-state">14</span>
                </div>
                <div class="order2">
                    번째
                </div>
            </div>
            <div class="ment">
                주변을 구경하고 있는건 어떨까요?
            </div>
            <div>
                <progress class="waiting-progress" value="20" max="100"></progress>
            </div>
            <div class="cancle" style="margin: auto;">
                <a style="color: white;text-decoration: none;" href="/">대기등록취소</a>
            </div>
        </div>

    </div>
</div>
@vite(['resources/js/stream.js'])
</body>

</html>
