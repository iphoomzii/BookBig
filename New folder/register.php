<!DOCTYPE html>
<html>
<head>
    <title>Regitration</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <form action="register/register_result.php" method="post">
    <div class="register_content">
        <?php
        include 'register/register1.php';
       
        include 'register/register2.php';      
        
        include 'register/register3.php';
        echo "<input type='submit' value='submit'></input>";
        ?>
    </div>
    </form>    
</body>
</html>