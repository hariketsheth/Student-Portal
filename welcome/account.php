<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.4" />
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
.</script>
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

<body alink="#ffffff" link="#ffffff" vlink="#ffffff" oncontextmenu="return false;">
<?php 
session_start();
require_once ('connection.php');
$test=$_SESSION['connection'];
$email = $_SESSION['uname'];
$status = $_SESSION['status'];
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
else if (($email==true)&& ($test==true) &&($status=="active"))  {

$fetch_data = "SELECT * FROM prechyksecure WHERE username = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);    
$xceding= (time()-$_SESSION['last_login_timestamp']);
if($xceding > 899)
 {
session_destroy();
    ?>
    
    <link rel="stylesheet" href="https://prechykairoli.rf.gd/css/style.css" />
        <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<script>Swal.fire({
  title: 'SESSION TIMED OUT !!',
  text: "You were automatically logged out from your account due to inactivity of more than 15 minutes.",
  icon: 'warning',
  confirmButtonColor: '#d63',
  confirmButtonText: 'Continue'
})
      .then((value) => {
     location.href='https://prechykairoli.rf.gd/welcome/logout.php'
	 });
      </script>
  
<?php
}
else {

?>
<title><?php echo $fetch_info['fullname'] ?></title>
<meta http-equiv="refresh" content="60">
<link rel="stylesheet" href=<?php echo $fetch_info['skills'] ?>>
<link rel="stylesheet" href="https://prechykairoli.rf.gd/welcome/styleclo.css" />
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
 <link rel="stylesheet" href="styles.css" />
<STYLE>A {text-decoration: none;} </STYLE>
<div class="wrapper">
		<div class="resume">
			<div class="left">
				<div class="img_holder">

					<img src=<?php echo $fetch_info['photo'] ?> alt="picture" height="230" oncontextmenu="return false;" >
				</div>
				<div class="contact_wrap pb">
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-phone-volume"></i></div>
									<div class="text"><?php echo $fetch_info['phone'] ?></div>
								</div>
							</li>
							<li>
                            <a href=<?php echo $fetch_info['mailto'] ?> target="_blank">
								<div class="li_wrap">
								
									<div class="icon"><i class="fas fa-at"></i></div>
									<div class="text"><?php echo $fetch_info['email'] ?><br><?php echo $fetch_info['domain'] ?></div>
                                    
								</div>
                                </a>
							</li>
							<li><a href="https://hariom.prechykairoli.rf.gd" target="_blank">
								<div class="li_wrap">
								
									<div class="icon"><i class="fas fa-sitemap"></i></div>
									<div class="text">PRECHYK WEBSITE</div>
								</div>
								</a>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-street-view"></i></div>
									<div class="text">Mumbai, IN</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="hobbies_wrap pb">
					<div class="title">
						Features
					</div>
					<div class="hobbies">
						<ul>
							<li>
							<a href="https://bit.ly/3dEcsQm" target="_blank">
								<div class="li_wrap" >
								
									<div class="icon"><i class="fas fa-swatchbook"></i></div>
									<div class="text">Repository</div>
								</div>
								</A>
							</li>
			
							<li>
							<a href="https://prechykairoli.rf.gd/89Tedn/Folder/Files/dashboard/assignments.php">
								<div class="li_wrap" >
									<div class="icon"><i class="fas fa-user-graduate"></i></div>
									<div class="text">Assignments</div>
								</div>
								</a>
							</li>
                             <li>
						<a href="https://prechykairoli.rf.gd/welcome/music/collection/">
								<div class="li_wrap">
									<div class="icon"> <i class="fas fa-music"></i></div>
									<div class="text">MUSIC</div>
								</div>
								</a>
					
						</ul>
					</div>
				</div>
                <div class="hobbies_wrap pb">
					<div class="title">
						Controls
					</div>
                    <div class="hobbies">
						<ul>
							<li>
                            <?php /*<a href="https://meet.google.com/kyu-ibhm-guq" target="_blank">
                            <div class="li_wrap"><!-- onclick="join()"-->
                            <a>
                            <div class="li_wrap" onclick="join()"> */ ?>
						<a>
                            <div class="li_wrap" onclick="join()">
                                <script>
                                function join(){
                                    Swal.fire({
  title: 'BUTTON DISABLED',
  text: "At present, the button is deactivated & would be activated only 5-10 minutes before the start of the meeting.",
  icon: 'info'
})
                                }
                                </script>
									<div class="icon"><i class="fas fa-user-clock"></i></div>
									<div class="text">Join Meeting</div>
								</div>
							      </a>
							</li>
                            				<li>
								<div class="li_wrap" onclick="logout()">
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
                               
                                </script>
									<div class="icon"><i class="fas fa-check-circle"></i></div>
									<div class="text">LOGOUT</div>
								</div>
								
							</li>
                            </div>
                    </div>
				<div class="skills_wrap pb">
					<div class="title">
						Assignments
					</div>
					<div class="skills">
						<div class="html-container">
            <!---Name--->
                <div class="name"><h5>Allotted</h5></div>
                <!---LOADING...--->
                <div class="loader">
                <div class="html-loader1"></div>
            </div>
                <!---percentage--->
                <div class="percentage"><h5>5</h5></div>
            </div>
			<br>
            <!---CSS SECTION--->
            <div class="css-container">
            <!---Name--->
                <div class="name"><h5>Submitted</h5></div>
                <!---LOADING...--->
                <div class="loader">
                <div class="css-loader1"></div>
            </div>
                <!---percentage--->
                <div class="percentage"><h5><?php echo $fetch_info['assign_submited'] ?></h5></div>
            </div>
			<br>
            <!---JAVASCRIPT SECTION--->
            <div class="js-container">
            <!---Name--->
                <div class="name"><h5>Pending</h5></div>
                <!---LOADING...--->
                <div class="loader">
                <div class="js-loader1"></div>
            </div>
                <!---percentage--->
                <div class="percentage"><h5><?php echo $fetch_info['assign_pending'] ?></h5></div>
            </div>
            <br>
            <br>
					</div>
				</div>
				
			</div>
			
			<div class="right">
				<div class="header">
					<div class="name_role">
						<div class="name">
							<?php echo $fetch_info['fullname'] ?>
						</div>
						<div class="role">@<?php echo $fetch_info['username'] ?></div>
                        
					</div>
					<div class="about">
						"PRECHYK AIROLI is associated with Chinmaya Mission. It creates vehicles for self-unfoldment: 
from Vedantic institutes that train teachers, to jnana yajnas and spiritual camps, to regular spiritual study classes for adults, children and youth, to 
social service and educational projects (including schools, hospitals, rural development and retirement homes), to a rich array of Vedantic literature in print, 
audio and video media. The mission is to provide individuals from any background, the wisdom of Vedanta and practical means for spiritual growth and happiness enabling them to 
become positive contributors to the society."

					</div>
				</div>
				<div class="right_inner">
					<div class="exp">
                    <br>
						<div class="titlex">
							Upcoming Meetings 
						</div>
						<div class="exp_wrap">
							<ul>
								<li>
									<font color="#ff0000">
										<marquee><b> Don't forget to LOGOUT from your account once done. Have a great day ahead. </b> </marquee>
									</font>
										</li>
                             
                                 <li>
									<div class="li_wrap">
										<div class="date">
											26th December, 2020 
										</div>
										<div class="info">
											<p class="info_title">
												PRECHYK AIROLI 
											</p>
											<p class="info_com">
											  (1:50pm - 3:20pm)
											</p>
											<p class="info_cont">
											 PRECHYK AIROLI Session to be conducted on Google Meet. Link will be activated only 5-10 minutes before the actual start of the meeting. Join by clicking the button on the left. <br>
											</p>
										</div>
									</div>
								</li>

                                <li>
									<div class="li_wrap">
										<div class="date">
											2nd January, 2020 
										</div>
										<div class="info">
											<p class="info_title">
												PRECHYK AIROLI <img src="https://prechykairoli.rf.gd/img/new-icon.gif">
											</p>
											<p class="info_com">
											  (1:50pm - 3:20pm)
											</p>
											<p class="info_cont">
											 PRECHYK AIROLI Session to be conducted on Google Meet. Link will be activated only 5-10 minutes before the actual start of the meeting. Join by clicking the button on the left. <br>
											</p>
										</div>
									</div>
								</li>
								<br>
                                
							</ul>
						</div>
					</div>
                    
                    <br>
                    <ul>
                                <li>
                                 <div class="clock">
      <div class="center-nut">
</div>
<div class="center-nut2">
</div>
<div class="indicators">
        <div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
<div>
</div>
</div>
<div class="sec-hand">
        <div class="sec">
</div>
</div>
<div class="min-hand">
        <div class="min">
</div>
</div>
<div class="hr-hand">
        <div class="hr">
</div>
</div>
</div>
<script>
      const sec = document.querySelector(".sec");
      const min = document.querySelector(".min");
      const hr = document.querySelector(".hr");
      setInterval(function(){
        let time  = new Date();
        let secs = time.getSeconds() * 6;
        let mins = time.getMinutes() * 6;
        let hrs = time.getHours() * 30;
        sec.style.transform = `rotateZ(${secs}deg)`;
        min.style.transform = `rotateZ(${mins}deg)`;
        hr.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
      });
    </script>
                                </li>
                    </ul>
					<div class="education">
                    <br>
                    <div class="titlex">
							Recent Class Summary
						</div>
                        
                    <iframe src='https://prechykairoli.rf.gd/welcome/PRECHYK.pdf#toolbar=0' width='100%'  style='height:300px;'></iframe>
   
                    <br>
                    <br>
                     <br>
                    <br>
						<div class="titlex">
							Announcements & Updates
						</div>
                        
						<div class="education_wrap">
                        <ul>
                        
                            <style>
                            #rcorners1 {
  border-radius: 20px;
 background: #1D4350;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #A43931, #1D4350);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #A43931, #1D4350); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */




  padding: 20px;
  width: 500px;
  height: 240px;
  color: #ffffff;
     box-shadow: 5px 10px 18px #888888;
}

 #rcorners2 {
  border-radius: 20px;
 background: #333333;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff1818, #553333);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ee1818, #883333); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


  padding: 20px;
  width: 500px;
  height: 140px;
  color: #ffffff;
     box-shadow: 5px 10px 18px #888888;
}
                            </style>
                            
							
                                <br>
                               <li>
                                <div class="li_wrap" id="rcorners1">
										<div class="date">
                                        <font color="#ffffff">
											<b>IMPORTANT</b>
                                            </font>
										</div>
										<div class="info1">
											<p class="info1_title" >
                                      
												PORTAL PASSWORD TO BE CHANGED <img src="https://prechykairoli.rf.gd/img/new-icon.gif"> 
                                               
											<p class="info1_com">
												<b>(25th - 30th December, 2020)</b>
											</p>
										<p class="info1_cont">
												Please note that the Portal Passwords for all will be changed anyday between 25th to 30th December. Whenever changed, 
                                                you will recieve any <b>auto-generated mail</b> containing your new credentials. This is done to ensure proper security 
                                                & function of the Portal.
											</p>
										</div>
									</div>
                                    
								</li>
                                </ul>
                        <br>
                        
                        <marquee direction="up">
							<ul>
                            <li>
									<div class="li_wrap">
										<div class="date">
											2nd October, 2020
										</div>
										<div class="info">
											<p class="info_title">
												MUSIC BUTTON ADDED 
											<p class="info_com">
												(5:00pm)
											</p>
											<p class="info_cont">
												Please find the <b>MUSIC</b> button in the left side under Features tab. Now enjoy and learn music from Chinmaya Mission at any time of the day. Send your suggestions (if any) for addition of any particular bhajan, shlokas, etc. on prechykairoli@gmail.com. All suggestions are welcomed and will be implemented.  
											</p>
										</div>
									</div>
								</li>
							<li>
									<div class="li_wrap">
										<div class="date">
											12th September, 2020
										</div>
										<div class="info">
											<p class="info_title">
												LOGOUT BUTTON RELEASED 
											<p class="info_com">
												(1:00pm)
											</p>
											<p class="info_cont">
												Please find the <b>LOGOUT</b> button in the left side under Controls tab. Please don't forget to logout from your account once you are done using your account. We will automatically log you out after 15 minutes of inactivity from server side.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											27th August, 2020
										</div>
										<div class="info">
											<p class="info_title">
												PORTAL PASSWORD WAS CHANGED
											</p>
											<p class="info_com">
												(5:00pm)
											</p>
											<p class="info_cont">
												New Portal password is sent on your registered mail. Please note that Portal Password would remain same until notified. Portal Passwords are changed once/ twice in a month for security reasons. If you want to change your portal password before we do automatically, you can write us a mail at prechykairoli@gmail.com
											</p>
										</div>
									</div>
								</li>
							</ul>
                            </marquee>
						</div>
                        
					</div>
				</div>
               
			</div>
            
		</div>
        
	</div>

<?php
}
}
else if (($email==true)&& ($test==true) &&($status=="inactive"))  {
$fetch_data = "SELECT * FROM prechyksecure WHERE username = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);  
$xceding= (time()-$_SESSION['last_login_timestamp']);
if($xceding > 300)
 {
session_destroy();
?>
    
    <link rel="stylesheet" href="https://prechykairoli.rf.gd/css/style.css" />
        <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<script>Swal.fire({
  title: 'SESSION TIMED OUT !!',
  text: "You are now redirected to the homepage. Please contact us at prechykairoli@gmail.com for any queries.",
  icon: 'warning',
  confirmButtonColor: '#d63',
  confirmButtonText: 'Continue'
})
      .then((value) => {
     location.href='https://prechykairoli.rf.gd/welcome/logout.php'
	 });
      </script>
  
<?php
 }
 else{
?>
    
    <link rel="stylesheet" href="https://prechykairoli.rf.gd/css/style.css" />
        <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<script>Swal.fire({
  title: 'Sorry <?php echo $fetch_info['name'] ?>',
  text: "You are trying to get into your account the wrong way. Your account is currently inactive. Please do notify us at prechykairoli@gmail.com for re-activation.",
  icon: 'info',
  confirmButtonColor: '#0af',
  confirmButtonText: 'Continue'
})
      .then((value) => {
     location.href='https://prechykairoli.rf.gd/welcome/logout.php'
	 });
      </script>
  
<?php
}
}
else {
  echo "<script>location.href='https://prechykairoli.rf.gd/index.php'</script>";
}

?>
</body>
</html>