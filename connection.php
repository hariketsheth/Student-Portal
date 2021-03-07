
<?php 
session_start();
$con = mysqli_connect('servername', 'username', 'password', 'dbname');
if (!$con){
    $_SESSION['connectiondb']="false";
}
else {
     $_SESSION['connectiondb']="true";
}

?>

