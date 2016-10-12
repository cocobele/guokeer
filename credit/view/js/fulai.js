
$('#term div').on('click',function(){
    $('#term div').removeClass('chosen');
    $(this).addClass('chosen');
})

$('.apply').on('click',function(){
    var name=$('#name').val(),
        phone=$('#phone').val(),
        idcard=$('#idcard').val(),
        province=$('#province').val(),
        city=$('#city').val(),
        address=$('#address').val(),
        term=$('#term .chosen').attr('data-term');
        cardid=$(this).attr('cardid');


    $.ajax({
        type: "POST",
        url: "?c=credit&a=getForm",
        data: {
            name: name,
            phone:phone,
            idcard:idcard,
            province:province,
            city:city,
            address:address,
            term:term,
            cardid:cardid
        },
        dataType: "json",
        success: function (data) {
            console.log(data);
        }
    })
})