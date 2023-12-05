import $ from 'jquery';

let totalPrice = 0;
let orderMenu = "";
$('.choose').click(function(e) {
    var className = e.target.className;
    var temp = className.split(" ");
    var index = temp[1];
    // var text = $('.name.item'+index).text()
    var selectedMenu = $(`.name.${index}`).text();
    var item = selectedMenu.split('|');
    var price = item[1].trim();
    totalPrice += price  * 1000;
    orderMenu += item[0].trim()+",";
    console.log(orderMenu)
    $('.total').text(`총합계 : ${totalPrice}원`)
    $('.menu-bar-item').append('<li class="menu-item"><a>&nbsp;<img src="image/minus.png" class="minus">&nbsp;'+selectedMenu+'</a></li>')
})

$('.pay').click(async function() {
    // 메뉴 유효성 검사
    if (orderMenu === "")
    {
        alert("입력하신 메뉴가 없습니다.");
        return;
    }
    //  주문시 요청사항
    let orderNotice = prompt("주문시 요청 사항을 입력해주세요.");
    var where = localStorage.getItem('where');
    var postData = {
        order: {
            'where': where,
            'totalPrice':totalPrice,
            'orderMenu':orderMenu,
            'orderNotice': orderNotice
        }
    }
    localStorage.setItem("orderData",JSON.stringify(postData));
    window.location.href = "/pay";
})
