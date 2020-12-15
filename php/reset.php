<?php
$username = $_GET['username'];
$new_password = $_POST['new_password'];
$confirm_password =$_POST['confirm_password'];

if($new_password!=$confirm_password){
    echo "<div style='text-align: center;'><h1>Please Check Password Carefully!</h1>
    <button onclick=window.location.href='http://localhost/BookBig/forget.php'>back</button></div><br><br></div>";
}


else{
    $mysqli = new mysqli('localhost','root','','bookbig','3307');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
    }
    else{
        $q = "UPDATE userinfo SET password='$new_password' WHERE username = '$username'";
        $mysqli->query($q);
        echo "<div style='text-align: center;'><h1>Your password has beed reset!</h1>
        <button onclick=window.location.href='http://localhost/BookBig/login.php'>DONE!</button></div><br><br></div>";
    }
}

?>