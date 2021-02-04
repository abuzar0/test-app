$(document).ready(function() {

    //button click event capture
    $('#submit').on('click', function(e) {

        //so the page doesn't reload on submit
        e.preventDefault();

        //getting data from the DOM
        var email =$("#name").val();
        var password = $("#password").val();
        //logging
        console.log(email);
        console.log(password);
        //actual ajax request
        if($("#name").val()!='' & $("#password").val()!='' ){
        $.ajax({
        type:'post',
        url:'backend.php',
        data:{
         do_login:"do_login",
         email:email,
         password:password
        },
        success:function(data) {
        if(data=="success") {
            console.log(data);
           window.location.href="dashboard.php";}
        else{
          alert("Wrong Details");}
        }
        });
    }
    else{
        alert("fill entery ....");
    }
        /*
         *   ENDalert('Received OK');
         */
    });
});