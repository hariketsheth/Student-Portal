
<?php 
session_start();
#$con = mysqli_connect('sql305.byetcluster.com', 'epiz_26875813', 'jyrvWYP8ZiG', 'epiz_26875813_usertable');
$con = mysqli_connect('sql305.byetcluster.com', 'epiz_26875813', 'jyrvWYP8ZiG', 'epiz_26875813_usertable');
if (!$con){
    $_SESSION['connectiondb']="false";
}
else {
     $_SESSION['connectiondb']="true";
}

?>

