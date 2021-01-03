
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5" />
	 <link rel="icon" type="image/jpg" href="https://prechykairoli.rf.gd/img/logo.ico">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	  <script src="https://prechykairoli.rf.gd/js/sweetalert2.all.min.js"> </script>
	  <script src="https://prechykairoli.rf.gd/js/jquery-3.4.1.min.js"></script> 
	  <link rel="stylesheet" href="https://prechykairoli.rf.gd/css/sweetalert2.min.css" />
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      
 <script>
		  $(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
		  $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});
	  </script>
		  <script language="text/javascript">
              document.onmousedown=disableclick;
		  status="Right Click Disabled";
		  function disableclick(event){ 
			  if(event.button==2) { 
				  alert(status); 
				  return false; }
		  }
</script>
	  <script>
		  document.addEventListener('contextmenu', event=> event.preventDefault());
document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
	  </script>
</head>

<body oncontextmenu="return false;" >
<?php 
session_start();
require_once ('connection.php');
$test=$_SESSION['connectionz'];
$email = $_SESSION['uname'];
if($email == false){
    ?>
 <link rel="stylesheet" href="https://prechykairoli.rf.gd/css/style.css" />
     <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script>Swal.fire({
  title: 'STOP THERE',
  text: "You are trying to enter without proper authorization, authentication & permission. Hence your IP address is copied and will be monitored by Cyber Security Team.",
  icon: 'warning',
  confirmButtonColor: '#d33',
  confirmButtonText: 'Warning'
})
      .then((value) => {
     location.href='https://prechykairoli.rf.gd/index.php'
	 });
      </script>
 <?php
}

else if($test == false){
 ?>
  <link rel="stylesheet" href="https://prechykairoli.rf.gd/css/style.css" />
        <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<script>Swal.fire({
  title: 'Internal Server Issue !!',
  text: "We weren't able to connect to our servers at this point of time. Please try in some time.",
  icon: 'error',
  confirmButtonColor: '#d73',
  confirmButtonText: 'Continue'
})
      .then((value) => {
     location.href='https://prechykairoli.rf.gd/welcome/logout.php'
	 });
      </script>
<?php
}
else if (($email==true)&& ($test==true))  {

$fetch_data = "SELECT * FROM secureprechyk WHERE username = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);
$xceding1= (time()-$_SESSION['last_login_timestamp']);
if($xceding1 > 893)
 {
    ?>
    
    <link rel="stylesheet" href="https://prechykairoli.rf.gd/css/style.css" />
        <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<script>Swal.fire({
  title: 'TIME UP !',
  text: "You are now entering to your account page since your permission to access Assignments page has expired.",
  icon: 'error',
  confirmButtonColor: '#d53',
  confirmButtonText: 'ACCOUNT'
})
      .then((value) => {
        location.href='https://prechykairoli.rf.gd/welcome/account.php'
	 });
      </script>
  
<?php
}
else {

?>
<title>Assignments</title>
<link rel="stylesheet" href="style.css">
<meta http-equiv="refresh" content="120">
    <div class="blog-card">
      <input type="radio" name="select" id="tap-1" checked>
      <input type="radio" name="select" id="tap-2">
      <input type="radio" name="select" id="tap-3">
	  <input type="radio" name="select" id="tap-4">
	  <input type="radio" name="select" id="tap-5">
      <input type="radio" name="select" id="tap-6">
      <input type="checkbox" id="imgTap">
      <div class="sliders">
        <label for="tap-1" class="tap tap-1"></label>
        <label for="tap-2" class="tap tap-2"></label>
        <label for="tap-3" class="tap tap-3"></label>
		<label for="tap-4" class="tap tap-4"></label>
		<label for="tap-5" class="tap tap-5"></label>
        <label for="tap-6" class="tap tap-6"></label>
      </div>
      <div class="inner-part">
        <label for="imgTap" class="img">
         <img class="img-1" src="profile-6.jpg">
        </label>
        <div class="content content-1">
          <span>PRECHYK AIROLI</span>
          <div class="title">
Hariom <?php echo $fetch_info['name'] ?>,</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class ="button1" onclick="account()">ACCOUNT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class ="button1" onclick="logout()">LOGOUT</button>
<br>
<br>
<div class="text">Please see your assignments by cliking the buttons below. You can go back to your <b>Account</b> page or <b>Logout</b> from here. If any issue, feel free to contact us via mail !</div>


 <script> 
                                function logout()
                                {
                                    Swal.fire({
  title: 'Are you sure, <?php echo $fetch_info['name'] ?>?',
  text: "You want to logout from your account.",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#e83',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Logout'
}).then((result) => {
  if (result.isConfirmed) {
   
   Swal.fire({
    confirmButtonText: 'HARIOM',
    confirmButtonColor: '#06a944',
   icon: 'success',
  title: 'LOGOUT SUCCESSFUL',
  text: 'Hariom <?php echo $fetch_info['name'] ?>, Have a nice day ahead. Keep checking the portal time-to-time for new updates & announcements.'
 
})
 
    .then((value) => {
     location.href='https://prechykairoli.rf.gd/welcome/logout.php'
	 });
  }
})
                                }
                                function account()
                                {
                                  
   location.href='https://prechykairoli.rf.gd/welcome/account.php'

  
                                }
                               
                                </script>

        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-2" src="profile-1.jpg">
        </label>
        <div class="content content-2">
          <span>June 21, 2020</span>
          <div class="title">
ARTHA</div>
<div class="text">
Activity for Prechyks in which they have to present a assignment. This activity was conducted so that the concept of ARTHA is grasped well. </div>

<button onclick=<?php echo $fetch_info['assign1'] ?>><?php echo $fetch_info['value1'] ?></button>

        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-3" src="profile-2.jpg">
        </label>
        <div class="content content-3">
          <span>June 28, 2020</span>
          <div class="title">
DHARMA</div>
<div class="text">
Activity for Prechyks in which they have to present a assignment. This activity was conducted so that the concept of DHARMA is grasped well.</div>
<button onclick=<?php echo $fetch_info['assign2'] ?>><?php echo $fetch_info['value2'] ?></button>
        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-4" src="profile-3.jpg">
        </label>
        <div class="content content-4">
          <span>July 4, 2020</span>
          <div class="title">
GURU</div>
<div class="text">
Activity for Prechyks in which they have to present a assignment. This activity was conducted so that the concept of GURU is grasped well.</div>
<button onclick=<?php echo $fetch_info['assign3'] ?>><?php echo $fetch_info['value3'] ?></button>
        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-5" src="profile-4.jpg">
        </label>
        <div class="content content-5">
          <span>July 18, 2020</span>
          <div class="title">
POSITIVE QUALITIES</div>
<div class="text">
Submit 2 positive qualities about all other Prechyks excluding yourself. This activity was conducted so that Prechyks stay motivated</div>
<button onclick=<?php echo $fetch_info['assign4'] ?>><?php echo $fetch_info['value4'] ?> </button>
        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-6" src="profile-5.jpg">
        </label>
        <div class="content content-6">
          <span>July 25, 2020</span>
          <div class="title">
POSITIVE QUALITIES</div>
<div class="text">
Make a collage of the Positive Qualities written for you by other Prechyks. This activity was conducted so that Prechyks stay motivated. Last Date - 8th August</div>
<button onclick=<?php echo $fetch_info['assign5'] ?>><?php echo $fetch_info['value5'] ?></button>
        </div>
</div>
</div>
<?php
}
}
else {
  echo "<script>location.href='https://prechykairoli.rf.gd/index.php'</script>";
}

?>
</body>
</html>