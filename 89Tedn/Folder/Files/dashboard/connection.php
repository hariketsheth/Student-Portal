
<?php 
session_start();
$con = mysqli_connect('servername', 'username', 'password', 'dbname');
if ($con== true){
    $_SESSION['connectionz']="your_own_keyword";
}

?>

