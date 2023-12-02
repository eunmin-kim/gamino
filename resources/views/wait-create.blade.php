<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/wait-create.css'])
    <title>waitcreate1</title>
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
        <div class="box1 order-section">
            <div class="title">
                대기등록
            </div>
            <div class="toolbox">
                <button style="cursor:pointer;" class="box3 order-inhouse">매장</button>
                <button style="cursor:pointer;"  class="box4 order-visit">포장</button>
            </div>
        </div>
        <div class="box1 ready-section">

            <div class="title">
                대기등록
            </div>
            <div class="toolbox">
                <button class="box3" style="    height: 70px;
    width: 130px;
    border-radius: 10px;
    background-color: rgb(190, 62, 62);
    color: #fffefe;
    font-size: 23px;
    font-weight: bold;
    border-width: 0;
    margin: 0 20px;  /* 추가: 각 버튼 사이의 간격 조절 */">인원 수</button>
                : <input class="count" style="    width: 140px;
    height: 70px;
    text-align: right;
    font-size: 21px;
    border-radius: 15px;" type="text" value="2 명   ">
            </div>
            <button style="    height: 50px;
    width: 170px;
    border-radius: 10px;
    background-color: rgb(221, 156, 17);
    color: #201f1f;
    font-size: 20px;
    font-weight: bold;
    border-width: 0;
    margin-top:30px;  /* 추가: 각 버튼 사이의 간격 조절 */" class="box4 select-menu">메뉴 선택하기</button>
        </div>
        <div class="umm" style="    align-items: center;
    margin-top: -50px;">
            <div class="title" style="width: 110px;
    font-size: 25px;
    margin-top: -90px;
    margin-bottom: 35px;
    text-align: center;
    background-color: rgb(27, 26, 25);
    padding: 20px;
    border-radius: 15px;
    color: rgb(255, 255, 255);
    font-weight: bold;
    display: inline-block;">
                Menu
            </div>
            <div class="babo" style="    display: flex;
    align-items: center">
                <div class="toolbox1" style="    width: 300px;
    /* 추가: 각 toolbox의 너비를 설정하여 동일한 간격으로 배치 */
    height: 480px;
    display: flex;
    flex-direction: column;
    /* 추가: 각 toolbox의 내부 요소들을 세로로 정렬 */
    align-items: center;
    /* 수정: 수직 정렬을 위해 시작 부분에 정렬 */
    background-color: rgba(248, 234, 188, 0.781);
    border-radius: 10px;
    margin: 0 30px;
    /* 추가: toolbox 간격을 주기 위한 margin */
    border: 2px solid #000000;
    font-size: 14px;">
                    <div><img src="image/taco.jpg" class="photo" style="    width: 220px;
    height: 220px;
        border-radius: 30px;
    margin-top: 30px;"></div>
                    <div class="menu" style="    height: 50px;
    width: 280px;
    display: flex;
    margin-top: 10px;
    align-items: center;
    padding: 20px;
    display: flex;
    justify-content: center;">
                        <div class="name">타코야끼 8알 | 4.5</div>
                        <button class="choose" style="">선택</button>
                    </div>
                    <div class="menu" style="    height: 50px;
    width: 280px;
    display: flex;
    margin-top: 10px;
    align-items: center;
    padding: 20px;
    display: flex;
    justify-content: center;">
                        <div class="name">타코야끼 12알 | 6.5</div>
                        <button class="choose">선택</button>
                    </div>
                    <div class="menu" style="    height: 50px;
    width: 280px;
    display: flex;
    margin-top: 10px;
    align-items: center;
    padding: 20px;
    display: flex;
    justify-content: center;">
                        <div class="name">타코야끼 16알 | 8.5</div>
                        <button class="choose">선택</button>
                    </div>

                </div>

                <div class="toolbox2" style="   width: 300px;
    /* 추가: 각 toolbox의 너비를 설정하여 동일한 간격으로 배치 */
    height: 480px;
    display: flex;
    flex-direction: column;
    /* 추가: 각 toolbox의 내부 요소들을 세로로 정렬 */
    align-items: center;
    /* 수정: 수직 정렬을 위해 시작 부분에 정렬 */
    background-color: rgba(248, 234, 188, 0.781);
    border-radius: 10px;
    margin: 0 30px;
    /* 추가: toolbox 간격을 주기 위한 margin */
    border: 2px solid #000000;
    font-size: 14px;
">
                    <div><img src="image/taco.jpg" class="photo" style="    width: 220px;
    height: 220px;
        border-radius: 30px;
    margin-top: 30px;"></div>
                    <div class="menu">
                        <div class="name">막동이 | 14.0</div>
                        <button class="choose">선택</button>
                    </div>
                    <div class="menu">
                        <div class="name">야동이 | 14.0</div>
                        <button class="choose">선택</button>
                    </div>

                </div>

                <div class="toolbox3" style=" width: 300px;
    /* 추가: 각 toolbox의 너비를 설정하여 동일한 간격으로 배치 */
    height: 480px;
    display: flex;
    flex-direction: column;
    /* 추가: 각 toolbox의 내부 요소들을 세로로 정렬 */
    align-items: center;
    /* 수정: 수직 정렬을 위해 시작 부분에 정렬 */
    background-color: rgba(248, 234, 188, 0.781);
    border-radius: 10px;
    margin: 0 30px;
    /* 추가: toolbox 간격을 주기 위한 margin */
    border: 2px solid #000000;
    font-size: 13px;">
                    <div><img src="image/taco.jpg" class="photo" style="    width: 220px;
    height: 220px;
        border-radius: 30px;
    margin-top: 30px;
    "></div>
                    <div class="menu">
                        <div class="name">오코노미야끼 까만맛 | 11.0</div>
                        <button class="choose">선택</button>
                    </div>
                    <div class="menu">
                        <div class="name">오코노미야끼 빨간맛 | 11.0</div>
                        <button class="choose">선택</button>
                    </div>
                    <div class="menu">
                        <div class="name">오코노미야끼 하얀맛 | 13.0</div>
                        <button class="choose">선택</button>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
@vite(['resources/js/waiting.js'])
</body>

</html>
