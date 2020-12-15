<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];

$email = $_POST['email'];
$tel = $_POST['tel'];

$birthday = $_POST['birthday'];
$dob = date_format(date_create($birthday),'d/m/Y');
$age = (int)(date('Y')) - (int)(substr($dob,6,10));

$address = $_POST['address'];
$subdistrict = $_POST['subdistrict'];
$district = $_POST['district'];
$province = $_POST['province'];
$postcode = $_POST['postcode'];
$country = $_POST['country'];

$username = $_POST['username'];
$password = $_POST['password'];


if(
    strlen($fname) == 0 ||
    strlen($lname) == 0 ||
    strlen($gender) == 0 ||
    strlen($email) == 0 ||
    strlen($tel) == 0 ||
    strlen($dob) == 0 ||
    strlen($address) == 0 ||
    strlen($subdistrict) == 0 ||
    strlen($district) == 0 ||
    strlen($province) == 0 ||
    strlen($country) == 0 ||
    strlen($postcode) == 0 ||
    strlen($username) == 0 ||
    strlen($password) == 0
){
    echo "please fill in every information!";
    echo "<button onclick=window.location.href='http://localhost/BookBig/signup.php'>back</button>";

}
elseif(strlen($tel)!=10){
    echo "please check your phone number carefully!";
    echo "<button onclick=window.location.href='http://localhost/BookBig/signup.php'>back</button>";
}
elseif(strlen($postcode)!=5){
    echo "please check your postcode carefully!";
    echo "<button onclick=window.location.href='http://localhost/BookBig/signup.php'>back</button>";
}
elseif($password != $_POST['confirmpassword']){
    echo "password and confirmed password are not the same!<br> please check carefully!";
    echo "<button onclick=window.location.href='http://localhost/BookBig/signup.php'>back</button>";
}
else{
    $mysqli = new mysqli('localhost','root','','bookbig','3307');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
    }
    else{
        $insert_user = "INSERT INTO userinfo(username, password, fname, lname, gender, email, tel, dob, age, address, subdistrict, district, province, country, postcode)
        VALUES('$username', '$password', '$fname', '$lname', '$gender', '$email', '$tel', '$birthday', '$age', '$address', '$subdistrict', '$district', '$province', '$country', '$postcode')";
        if(!$mysqli->query($insert_user)){
            echo $mysqli->error;
        }
        else{
            echo "<h1 style='text-align: center;'>Sign up success!</h1>
            <br><div style='text-align: center;'>
            <button onclick=window.location.href='http://localhost/BookBig/login.php'>Log In</button>
            </div>";
        }
            
    }
    $mysqli->close();
}



?>