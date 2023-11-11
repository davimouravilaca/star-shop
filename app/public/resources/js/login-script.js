$(document).ready(function() {
    $('#loginform').submit(function(e) {

        e.preventDefault();

        $.ajax({

            type: "POST",

            url: 'php/login-script.php',

            data: $(this).serialize(),

            success: function(response)

            {

                var jsonData = JSON.parse(response);

 

                // user is logged in successfully in the back-end

                // let's redirect

                if (jsonData.success == "1")

                {

                    alert('Login was Successful');

                }

                else

                {

                    alert('Invalid Credentials!');

                }

           }

       });

     });

});
