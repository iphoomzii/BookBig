<?php
$uid=$_GET['uid'];
$title=$_POST['title'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$genre=$_POST['genre'];
$pages=(int)($_POST['pages']);
$details=$_POST['details'];

if(strlen($title)==0){
    echo"<div style='text-align: center;'><h1>please fill the book's name</h1>
    <button onclick=window.location.href='http://localhost/BookBig/User/lease.php?uid=$uid'>DONE!</button>
    </div>";
}
else{
    $mysqli = new mysqli('localhost','root','','bookbig','3307');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
    }
    else{
        $q1 = "INSERT INTO book_details(from_user,title,author,publisher,genre,pages) VALUES('$uid','$title','$author','$publisher','$genre','$pages')";
        $q2 = "INSERT INTO book_review(from_user,title,description) VALUES('$uid','$title','$details')";
        if(!$mysqli->query($q1) ||  !$mysqli->query($q2)){
            echo $mysqli->error;
        }
        else{

        $q = "SELECT * FROM book_rent_detial WHERE title = '$title'";
        if($result = $mysqli->query($q)){
            $result->data_seek(0);
            $row = $result->fetch_array();
            if(!isset($row)){
                $number = 1;
                $q3 = "INSERT INTO book_rent_detial(from_user,title,amount) VALUES('$uid','$title','$number')";
                if(!$mysqli->query($q3)){
                    echo $mysqli->error;
                }
                else{echo "<div style='text-align: center;'><h1>You have posted your book for renting</h1>
                    <button onclick=window.location.href='http://localhost/BookBig/User/home.php?uid=$uid'>DONE!</button>
                    </div>";

                }
            }
            else{
            $number = (int)($row['amount'])+1;
            $q3 = "UPDATE book_rent_detial SET amount='$number' WHERE title = '$title'";
            if(!$mysqli->query($q3)){
                echo $mysqli->error;
            }
            else{echo "<div style='text-align: center;'><h1>You have posted your book for renting</h1>
                <button onclick=window.location.href='http://localhost/BookBig/User/home.php?uid=$uid'>DONE!</button>
                </div>";

            }
            }        
}else{
    echo $mysqli->error;
}

    }

}}
?>