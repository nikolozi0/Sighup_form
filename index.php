
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP FORM</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php require 'process.php'; ?>
    <div class="container">
    <h1>  SIGNUP FORM </h1>
    <form class="contact-form" action="#" method="POST">
        <div class="text-field">
        <input class="text-outline" type="text" name="name" placeholder="Full name" required>
        <input  class="text-outline" type="text" name="lastName" placeholder="Full Lastname" required>
        <input class="text-outline" type="email" name="email" placeholder="E-mail" required>
        <button type="submit" name="submit" >SUBMIT</button>
</div>
</form>
</div>
</body>
</html>

