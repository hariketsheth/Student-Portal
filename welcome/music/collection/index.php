<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- APlayer CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=0.3" />
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

<body alink="#ffffff" link="#ffffff" vlink="#ffffff" oncontextmenu="return false;" >
<?php 
session_start();
require_once ('connection.php');
$test=$_SESSION['connection'];
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

$fetch_data = "SELECT * FROM prechyksecure WHERE username = '$email'";
$run_query = mysqli_query($con, $fetch_data);
$fetch_info = mysqli_fetch_assoc($run_query);    
$xceding= (time()-$_SESSION['last_login_timestamp']);
if($xceding > 1799)
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
  text: "You were automatically logged out from your account due to inactivity of more than 30 minutes.",
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

  
       

    <title>PRECHYK AIROLI - Music Collection</title>
    <style>
    	body{
    		background-color: #f7f7f7;
    		font-family: Open sans;
    	}
        .bxtn
        {width:150px;
        background-color:#ff6300;
        border:none;outline:0;
        height:49px;
        border-radius:49px;
        color:#fff;
        text-transform:uppercase;
        font-weight:600;
        margin:10px 0;
        cursor:pointer;
        transition:.5s;
        }
        .bxtn:hover{
            background-color:#4d84e2;
            }
    	img{
    		width: 100%;
    		min-height: 250px;
    	}
    	.main{
    		padding: 40px 0;
    	}
    	.col-md-3{
    		margin-bottom: 40px;
    	}
    	.album-poster{
    		position: relative;
    		display: block;
    		border-radius: 7px;
    		overflow: hidden;
    		box-shadow: 0 15px 35px #3d2173a1;
    		transition: all ease 0.4s;
    	}
    	.album-poster:hover{
    		box-shadow: none;
    		transform: scale(0.98) translateY(5px);
    	}
    	h3{
    		font-size: 34px;
    		margin-bottom: 34px;
    		border-bottom: 4px solid #e6e6e6;
    		padding-bottom: 15px;
    	}
    	p{
    		font-size: 15px;
    	}
    	h4{
    		font-size: 16px;
    		text-transform: uppercase;
    		margin-top: 15px;
    		font-weight: 700;
    	}
		

		/*default is hide music player*/
		#aplayer{
			position: fixed;
			bottom: -100%;
			left: 0;
			width: 100%;
			margin: 0;
			box-shadow: 0 -2px 2px #dadada;
			background-color: #fff;
			transition: all ease 0.5s;
		}
		#aplayer.showPlayer{
			bottom: 0;
		}

		
		/*MUSIC PLAYER CUSTOMIZING STYLE*/
		span{
			color: #000 !important;
			font-size: 16px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-loaded{
			background: #e0e0e0;
    		height: 4px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played{
			height: 4px;
			background-color: #2196F3 !important;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played .aplayer-thumb{
			background-color: #2196F3 !important;
		}

		.aplayer .aplayer-icon{
			width: 20px;
			height: 20px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-time .aplayer-icon path {
		    fill: #000;
		}
		.aplayer .aplayer-info .aplayer-music{
			margin-bottom: 5px;
		}


    </style>
	<body>
<style type="text/css">
  .mobileShow {display: none;}

  /* Smartphone Portrait and Landscape */
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){ 
      .mobileShow {display: inline;}
  }
</style>
<div class="main">
	<div class="container">
		<div class="row">
        <div class="col-md-12">
       <h2> Hariom <?php echo $fetch_info['name'] ?>, </h2>
       <p> Do use this section to listen to bhajans, mantras, shlokas, strotrams and many more music from Chinmaya Mission.<br> Feel free to drop your suggestions for addition of bhajans, music you want here. All suggestions are welcomed and <br> will be implemented. It is proven fact that Music helps relieve stress so just enjoy yourself !<br> <b><i>Send your suggestions at <a href="mailto:prechykairoli@gmail.com" >prechykairoli@gmail.com</a></i></b><br></p>
       <div class="mobileShow"><p><u><b>ONLY FOR MOBILE USERS</b></u><br><b>[Please note that when viewed from mobiles - The controls such as Play, Pause, Forward are there at the bottom of the page]</b><br>*If you have Zoomed In, then Please Zoom out and scroll down to the bottom of the page to find the controls </p>
       </div>
       </div>
   
			<div class="col-md-12">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Account" onclick="window.location.href='https://prechykairoli.rf.gd/welcome/account.php';" class="bxtn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Logout" onclick="logout()" class="bxtn"> 
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
				<h3>Collection - Music</h3>
			</div>
			<div class="col-md-3">
				<a href="javascript:void();" class="album-poster" data-switch="0">
					<img src="https://i1.sndcdn.com/avatars-000612385770-c3m21q-t500x500.jpg" alt="">
				</a>
				<h4>Guru Strotam</h4>
				<p>Chinmaya Mission</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="1">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_jO9hCrLRHkWv2Fg2sUOWrJH-wUlSxCZ2Ew&usqp=CAU" alt="">
				</a>
				<h4>Anandmaya Gurudev</h4>
				<p>Chinmaya Mission</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="2">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQGIPOvzU_uslvPGqMP8KOLQzGWHN1T1BcUKA&usqp=CAU" alt="">
				</a>
				<h4>Na Tatra Suryo</h4>
				<p>Chinmaya Mission</p>
			</div>

			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="3">
					<img src="https://www.chinmayanewyork.org/wp-content/uploads/2015/07/Swami-Tejomayananda.jpg" alt="">
				</a>
				<h4>Gurudev Tava</h4>
				<p>Chinmaya Mission</p>
			</div>

			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="4">
					<img src="https://www.hindubhagwan.com/Gallery/images/portfolio/full/hanuman-images.jpg" alt="">
				</a>
				<h4>Hanuman Chalisa</h4>
				<p>Chinmaya Mission</p>
			</div>
			<!--<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="5">
					<img src="https://images.pexels.com/photos/210922/pexels-photo-210922.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4>veniam expedita</h4>
				<p>Porro distinctio fuga - 2020</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="6">
					<img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4>Lorem ipsum</h4>
				<p>Lorem ipsum - 2010</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4>Repellat illo</h4>
				<p>Lorem ipsum dolor sit ame - 2020</p>
			</div>-->
			
		</div>


	 <div class="row">
			<div class="col-md-12">
				<h3>Coming Soon</h3>
			</div>
			<div class="col-md-2">
				<a  class="album-poster">
					<img src="https://i.pinimg.com/originals/c5/14/8d/c5148d73c100f59b0f04047926af8764.png" alt="Bhajans">
				</a>
				<h4>Bhajans</h4>
			</div>
			<div class="col-md-2">
				<a  class="album-poster">
					<img src="https://i.pinimg.com/236x/dd/60/72/dd60723f3c0407a1e142d022b7f19981.jpg" alt="Strotams">
				</a>
				<h4>Strotams</h4>
			</div>
			<div class="col-md-2">
				<a  class="album-poster">
					<img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Sourire_coul_2.jpg" alt="Aarti">
				</a>
				<h4>Aarti</h4>
			</div>
			
			<div class="col-md-2">
				<a  class="album-poster">
					<img src="https://chinmayamalaysia.com/wp-content/uploads/2016/03/15-12-01.jpg" alt="Specials">
				</a>
				<h4>Specials</h4>
			</div>
			<div class="col-md-2">
				<a  class="album-poster">
					<img src="https://www.chinmayamission.com/wp-content/uploads/2017/06/11049.jpg" alt="Extras">
				</a>
				<h4>Extras</h4>
			</div>
			<div class="col-md-2">
				<a class="album-poster">
					<img src="https://www.chinmayamission.com/wp-content/uploads/2017/06/8618.jpg" alt="Favourites">
				</a>
				<h4>Favourites</h4>
			</div>
		</div>


	</div>
</div>

	<div id="aplayer"></div>

	<!-- Jquery Link -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<!-- Bootstrap Link -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- APlayer Jquery link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>	

	<script>


		// NOW I CLICK album-poster TO GET CURRENT SONG ID
		$(".album-poster").on('click', function(e){
			var dataSwitchId = $(this).attr('data-switch');
			//console.log(dataSwitchId);

			// and now i use aplayer switch function see
			ap.list.switch(dataSwitchId); //this is static id but i use dynamic 

			// aplayer play function
			// when i click any song to play
			ap.play();

			// click to slideUp player see
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
		    container: document.getElementById('aplayer'),
		    listFolded: true,
		    audio: [
		    {
		        name: 'Guru Strotam',
		        artist: 'Swami Chinmayananda',
		        url: 'source/guru_strotam.mp3',
		        cover: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSVE7DWSR0YnV7yI9H_w982YNIb0Yc5H_j4yg&usqp=CAU'
		    },
			{
		        name: 'Anandmaya Gurudev',  
		        artist: 'Swami Chinmayananda', 
		        url: 'source/anandgurudev.mp3', 
		        cover: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_jO9hCrLRHkWv2Fg2sUOWrJH-wUlSxCZ2Ew&usqp=CAU' 
		    },
			{
				name: 'Na Tatra Suryo Na Bhati',
				artist: 'Swami Chinmayananda',
				url: 'source/natatra.mp3',
				cover: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQGIPOvzU_uslvPGqMP8KOLQzGWHN1T1BcUKA&usqp=CAU',
			},
			{
				name: 'Gurudev Tava',
				artist: 'Swami Tejomayananda',
				url: 'source/gurudevtava.mp3',
				cover: 'https://www.chinmayanewyork.org/wp-content/uploads/2015/07/Swami-Tejomayananda.jpg',
            },
            {
				name: 'Hanuman Chalisa',
				artist: 'Sant Tulsidas',
				url: 'source/hanuman.mp3',
				cover: 'https://www.hindubhagwan.com/Gallery/images/portfolio/full/hanuman-images.jpg',
            },


		    ]
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