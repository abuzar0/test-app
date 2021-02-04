$(document).ready(function()
{
    console.log("ok hai bava g...");
    $('#add').on('click',function(){
        if($('#name').val() && $('#quantity').val()&& $('#price').val()){
            var name=$('#name').val();
            var price=$('#price').val();
            var quantity=$('#quantity').val();
            console.log(name);
            console.log(price);
            console.log(quantity);
            console.log("ok hai bava g...");
            $.ajax({
                url: "stock.php",
                method: "POST",
                data: {
                    name: name,
                    price: price,
                    quantity: quantity,
                    submitFlag: 1,
                },
                success: function(data){
                        alert('data is submitted');
                        console.log(name);
                        console.log(price);
                        console.log(quantity);
                        console.log('smitted');
                },
            });
        }
        else {
            alert('plz fill ......');
        }
    });
})