$(document).ready(function(){

    $("#Name").keyup(function(){

        var item=$('#Name').val();
        //alert(item);

        if(item !='')
        {
            $.ajax({
                url:"search.php",
                method:'post',
                data:{
                    item:item,
                },
                success: function(data)
                {
                    $('#Item_name').fadeIn();
                    $('#Item_name').html(data);
                    console.log(data);
                }

            });
        }
        else {
            $('#Item_name').fadeOut();
            $('#Item_name').html("");
        }
    })
     $(document).on('click','li',function(){
        $("#Name").val($(this).text());
        $('#Item_name').fadeOut();

     })

})