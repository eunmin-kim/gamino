import $ from 'jquery';


$('.change-notice-btn').click(async ()=> {
    let data = prompt("변경할 이름을 입력해주세요");
    let send = {
        info: data
    }
    let result = await fetch(
        '/crm/notice',
        {
            method: "POST",
            body: JSON.stringify(send)
        }
    )
    if (result.ok == true)
    {
        let res = await result.json()
        window.location.reload();
    }
})
$('.change-name-btn').click(async ()=> {
    let data = prompt("변경할 가게이름을 입력해주세요");
    let send = {
        info: data
    }
    let result = await fetch(
        '/crm/name',
        {
            method: "POST",
            body: JSON.stringify(send)
        }
    )
    if (result.ok == true)
    {
        let res = await result.json()
        window.location.reload();
    }
})
$('.change-loc-btn').click(async ()=> {
    let data = prompt("변경할 위치를 입력해주세요");
    let send = {
        info: data
    }
    let result = await fetch(
        '/crm/loc',
        {
            method: "POST",
            body: JSON.stringify(send)
        }
    )
    if (result.ok == true)
    {
        let res = await result.json()
        window.location.reload();
    }
})

$('.order-finish-btn').click(async () => {
    let boxId = $('.box-id').val();
    let waitingId = $('.waiting-id').val();
    // console.log(waitingId);
    let finish = {
        finish: waitingId
    }
    let result = await fetch(
        '/crm/order',{
            method: 'POST',
            body: JSON.stringify(finish)
        }
    )
    if (result.ok == true)
    {
        alert(`${waitingId} 입장 완료되었습니다.`);
        $(`.toolbox${boxId}`).hide();
    }
})
