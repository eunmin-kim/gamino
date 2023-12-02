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
    orderMenu += item[0].trim()+" ";
    console.log(orderMenu)
    $('.total').text(`총합계 : ${totalPrice}원`)
    $('.menu-bar-item').append('<li class="menu-item"><a>&nbsp;<img src="image/minus.png" class="minus">&nbsp;'+selectedMenu+'</a></li>')
})

$('.pay').click(async function() {
    var where = localStorage.getItem('where');
    var postData = {
        'where': where,
        'totalPrice':totalPrice,
        'orderMenu':orderMenu
    }


    const result = await fetch('/order',{
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "Accept": "application/json",
        },
        method: 'POST',
        mode: 'cors',
        credentials:"same-origin",
        body: JSON.stringify(postData),
    })
   window.location.href = '/wait-order';
})
