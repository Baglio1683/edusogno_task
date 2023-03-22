<?php

require_once('config.php');


$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);
$name = $connection->real_escape_string($_POST['name']); 


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql_select = "SELECT * FROM users WHERE email = '$email' ";

    if ($result = $connection->query($sql_select)) {

        if ($result->num_rows == 1) {

            $row = $result->fetch_array(MYSQLI_ASSOC);

            if(password_verify($password , $row['password'])){

                session_start(); 
                
                $_SESSION['logged'] = true; 
                $_SESSION['id'] = $row['id']; 
                $_SESSION['name'] = $row['name']; 
                $_SESSION['email'] = $row['email']; 
              

                header("location:user-area.php"); 

            }else{
                echo 'la password non è corretta'; 
            }
        } else{
                echo 'non ci sono password con quello username'; 
          }
    }
    else{
        echo 'Errore in fase di Login';
        }


    $connection->close(); 
}
