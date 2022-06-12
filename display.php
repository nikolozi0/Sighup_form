<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"DELETE FROM `signup` WHERE `id`='$id'");
}

$query = "SELECT * FROM signup";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Format</title>
    <style>
        *{
            padding: 0;
            margin:0;
            box-sizing: border-box;
        }
        body{
            width:100%;
            min-height: 100vh;
            background-color:#3498db;
        }
        .container{
            max-width: 900px;
            margin: 100px auto;
            width:100%;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        table th{
            background-color:white;
            color:#525252;
            padding:10px;
        }
        table td{
            padding:12xp;
            color:#525252;
            font-size:16px;
            text-align:center;
        }
        table tr{
            background-color:#ffffffd9;
        }

        .btn{
            color:darkred;
            font-size:15px;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="container">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Operation</th>
            </tr>
            <?php 
            if($num>=0){
                while($data=mysqli_fetch_assoc($connect)){
                    echo "
                    <tr>
                    <td>".$data['id']."</td>
                    <td>".$data['name']."</td>
                    <td>".$data['lastname']."</td>
                    <td>".$data['email']."</td>
                    <td><a href='display.php?id=".$data['id']."' class='btn'>Delete</a></td>
                    </tr>
                    ";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>




