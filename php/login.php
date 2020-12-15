<?php

$username = $_POST['username'];
$password = $_POST['password'];


$mysqli = new mysqli('localhost','root','','bookbig','3307');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
    }
    else{
        $q = "SELECT password,UserID FROM userinfo WHERE username = '$username'";
        if($result = $mysqli->query($q)){
            $result->data_seek(0);
            $row = $result->fetch_array();
            if(!isset($row)){
                echo 'wrong username';
                echo "<button onclick=window.location.href='http://localhost/BookBig/login.php'>back</button>";
            }
            else{
                if($password == $row['password']){
                    $userid =$row['UserID'];
                    echo "<div style='text-align: center;'><h1>login successful!'</h1><br><a href='http://localhost/BookBig/User/home.php?uid=$userid'>Continue!
                    </a></div>
                    ";
                }
                else{
                    echo 'wrong password';
                    echo "<button onclick=window.location.href='http://localhost/BookBig/login.php'>back</button>";
                }
            }
        }       
    }
    $mysqli->close();
?>

