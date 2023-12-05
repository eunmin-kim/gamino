<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/pay.css'])
    <title>pay1</title>
</head>

<body>
<div class="all">
    <nav class="leftnavibar">
        <ul>
            <li class="nav-item li-title1"><img src="image/logo.png" class="mainlogo"></li>
            <li class="nav-item li-title1-1">The<br>Restaurant<br>reservation system</li>
            <li class="nav-item li-title2"><img src="image/profile.png" class="profile"></li>
            <li class="nav-item li-title3">채연 님 입장하셨습니다.</li>
            <li><a>로그아웃</a></li>
            <li><a>장바구니 / 0</a></li>
            <li><a class="pay pay-btn">결제하기</a></li>
        </ul>
    </nav>

    <div class="content">
        <div class="caption">※&nbsp;&nbsp;&nbsp;금일 영업시간 : 18:00 ~ 22:00 매장이용에 참고 바랍니다.</div>

        <div class="box1">
            <div class="title">
                결제수단
            </div>

            <div class="Accordion_wrap">

                <div class="que">
                    <!-- 3)무통장입금--> <input class="checkbox" type="checkbox" name="xxx"
                                           value="yyy"><span>무통장입금</span>
                </div>
                <div class="anw">
                    <p class="anw3">농협 123 - 1234 - 1234 - 1234<br>
                        (은행 창구, 인터넷 뱅킹 이용 가능)
                    <p>
                </div>
                <div class="que">
                    <!-- 4)만나서결제--> <input class="checkbox" type="checkbox" name="xxx"
                                           value="yyy"><span>만나서결제</span>
                </div>
                <div class="anw">
                </div>
            </div>

        </div>
    </div>
</div>



<script>
    document.getElementById("icon").onclick = function () {
        document.getElementById("modal").style.display = "block";
    }

    document.getElementById("close").onclick = function () {
        document.getElementById("modal").style.display = "none";
    }
</script>

<script>
    document.getElementById("icon2").onclick = function () {
        document.getElementById("modal2").style.display = "block";
    }

    document.getElementById("close2").onclick = function () {
        document.getElementById("modal2").style.display = "none";
    }
</script>
<script>
    $(document).ready(function () {
        $(".que").click(function () {
            $(this).next(".anw").stop().slideToggle(300);
            $(this).toggleClass('on').siblings().removeClass('on');
            $(this).next(".anw").siblings(".anw").slideUp(300); // 1개씩 펼치기
        });
    });
</script>
@vite(['resources/js/pay.js'])
</body>

</html>
