
var Total_r=0;var temp_r=0;
function cal()
{
    var result=0;
    var x=$('#quantity').val();
    var y=$('#price').val();
    result=x*y;
    $('#total').val(result); 
}
function Total()
{
    $('#Calculate').val(Total_r);
}
function productDelete(ctl) {
    var x=$(ctl).parents("tr").children('td:eq(3)').text();  
    $(ctl).parents("tr").remove();
    console.log(x);
    Total_r=parseInt(Total_r)-parseInt(x);
    //.parents("tr").parents("td").parents('#tatal');
    $('#Calculate').val(Total_r);

}
function add_row(){

                $("#table").append("<tr>" + 
                  "<td>"+$('#Name').val()+"</td>"+
                  "<td>"+$('#quantity').val()+"</td>" +
                   "<td>"+$('#price').val()+"</td>" +
                    "<td>"+$('#total').val()+"</td>" +
                    "<td>"+"<button type='button' onclick='productDelete(this);'class='btn btn-default'>"+"x"+"</button>" +"</td>"+
                      "</tr>"
                      );
}

$(document).ready(function()
{
    $('#Add').on('click',function(){
                if($('#quantity').val()&& $('#Name').val()&& $('#price').val()){
                    temp_r=$('#total').val();
                    Total_r=parseInt(Total_r)+parseInt(temp_r);
                    console.log(Total_r);
                    add_row();
                }
                else{
                    console.log(Total_r);
                    alert("plz fill !!");
                }
            });
})