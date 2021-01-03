
<?php 
session_start();
$con = mysqli_connect('sql305.byetcluster.com', 'epiz_26875813', 'jyrvWYP8ZiG', 'epiz_26875813_airoli');
if ($con== true){
    $_SESSION['connectionz']="prechyk";
}

?>

