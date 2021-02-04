$(document).ready(function() {

            //button click event capture
            $('#sigin').on('click', function(e) {

                //so the page doesn't reload on submit
                e.preventDefault();
                console.log("OK HAI NA KIA ...");

                //getting data from the DOM
                var email = $("#name").val();
                var password = $("#password").val();
                var c_password = $("#c_password").val();
                if(c_password === password)
                {

                      //flag
                var valid = true;

                //logging
                console.log(email);
                console.log(password);


                //email validation
                if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {} else valid = false;

                if (valid)
                    if (password.length >= 8)
                        if (password.match(/[A-Z]/i)) {} else valid = false;
                else valid = false;

                //if validated, send ajax request
                if (valid)
                //actual ajax request
                    $.ajax({
                    url: "insert_info.php",
                    method: "POST",
                    data: {
                        email: email,
                        password: password,
                        submitFlag: 1,
                    },
                    success:function(data){
                        if(data=="OK"){
                        alert("YOUR ACCOUNT RIGERTER......");
                        window.location.href='index.php';
                        }
                        else{
                            alert("YOUR ACCOUNT IS NOT  RIGERTER DUE TO TECHNINCAL PROBLEMS .......");
                        }
                    }
                });
                else{
                    alert("IN-VALID....")
                }              
              }
            else{
                alert("PASSWORD IS IN CORRECT...");

            }

        });     /*
                 *   ENDalert('Received OK');
                 */
        });