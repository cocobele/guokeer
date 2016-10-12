
$('#create').on('click',function(e){
    e.preventDefault();
   $.ajax({
        type: "POST",
        url: "?c=createEmail&a=create",
        data: {
            'city' : $('#city').val(),
            'url-1': $('#url-1').val(),
            'url-2': $('#url-2').val(),
            'url-3': $('#url-3').val(),
           'word-1': $('#word-1').val(),
           'word-2': $('#word-2').val()
        },
        dataType: "json",
        success: function(data) {
            window.open ('?c=createEmail&a=preview&filepath='+data.data);
        }
    })
})