<?php
error_reporting(0);
$username = 'root';
$password = '';
try{
    $connection = new PDO('mysql:host=localhost;dbname=crud', $username, $password); 

}catch(PDOException $e){
    // echo "Connection faild: " . $e->getMessage();
}
if (isset($_POST["action"])) 
{
    if ($_POST["action"] == "Load") {
        $statement = $connection->prepare("SELECT * FROM signup ORDER BY id DESC");
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        $output .= '
   <table class="container">
    <tr>
     <th >First Name</th>
     <th >Last Name</th>
     <th >email</th>
     <th >Delete</th>
    </tr>
  ';
        if ($statement->rowCount() > 0) {
            foreach ($result as $row) {
                $output .= '
    <tr>
    <td>' . $row["student_first_name"] . '</td>
    <td>' . $row["student_last_name"] . '</td>
    <td>' . $row["email"] . '</td>
     <td><button type="button" id="' . $row["id"] . '" class="btn btn-danger btn-xs delete">Delete</button></td>
    </tr>
    ';
            }
        } else {
            $output .= '
    <tr>
     <td align="center">Data not Found</td>
    </tr>
   ';
        }
        $output .= '</table>';
        echo $output;
    }
    
    try{
        
        $statement = $connection->prepare("
        INSERT INTO signup (student_first_name, student_last_name, email)
        VALUES (:student_first_name, :student_last_name,:email)
       ");
       $result = $statement->execute(
        array(
            ':student_first_name' => $_POST["firstName"],
            ':student_last_name' => $_POST["lastName"],
            ':email' => $_POST["email"]
        )
             );
             if (!empty($result)) {
                 echo 'Data Inserted Successfully';
                 
             }
             
         }catch(PDOException $e){

            // echo "Connection faild: " . $e->getMessage();
         }
    
        
    
   
    if ($_POST["action"] == "Delete") {
        $statement = $connection->prepare(
            "DELETE FROM signup WHERE id = :id"
        );
       $result = $statement->execute(
            array(
                ':id' => $_POST["id"]
            )
        );
        if (!empty($result)) {
            echo 'Data Deleted';
        }
    }
}