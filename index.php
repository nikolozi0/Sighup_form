
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP FORM</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    
    <div class="container">
    <h1>  SIGNUP FORM </h1>
    <form class="contact-form" action="#" method="POST" id="form">
        <div class="text-field">
        <input class="text-outline" type="text" name="student_first_name" id="student_first_name"  placeholder="Full name" >
        <input  class="text-outline" type="text" name="student_last_name" id="student_last_name" placeholder="Full Lastname" >
        <input class="text-outline" type="email" name="email" id="email" placeholder="E-mail" >
        <input type="hidden" name="customer_id" id="customer_id" />
        <button type="submit" name="action" id="action" >SUBMIT</button>
</div>
</form>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
        
        $('#action').click(function() {
            let firstName = $('#student_first_name').val(); 
            let lastName = $('#student_last_name').val();
            let email = $('#email').val();
            let id = $('#customer_id').val(); 
            let action = $('#action').val(); 
            if (firstName != '' && lastName != '' && email != '' ) 
            {
                $.ajax({
                    url: "action.php", 
                    method: "POST", 
                    data: {
                        firstName: firstName,
                        lastName: lastName,
                        email: email,
                        id: id,
                        action: action
                    }, 
                    success: function(data) {
                        alert(data); 
                    }
                });
            } else {
                alert("All Fields are Required"); 
            }
        });

    });
</script>
</body>
</html>

