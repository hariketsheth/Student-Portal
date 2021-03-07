
<?php 
session_start();
$con = mysqli_connect('servername', 'username', 'password', 'dbname');
if ($con== true){
    $_SESSION['connection']="your_own_keyword";
}


?>

