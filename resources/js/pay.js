import $ from "jquery";
$('.pay-btn').click(async()=> {
    var storeItem = localStorage.getItem("orderData");
    let postData = JSON.parse(storeItem)

    const result = await fetch('/order',{
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "Accept": "application/json",
        },
        method: 'POST',
        mode: 'cors',
        credentials:"same-origin",
        body: JSON.stringify(postData.order),
    })
    if (result.ok == false)
    {

        alert("주문하신 메뉴가 없습니다.")
    }
    else
    {

        window.location.href = '/wait-order';
    }

})
