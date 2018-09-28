<?php
include('Database.php');
$db=new Database();
$ssql='SELECT * FROM et_login';
$db->Query($ssql);
$numr=$db->NumRows();
$result=$db->Rows();
?>
<!DOCTYPE html>
<html>
<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	  <meta name="google-signin-scope" content="profile email">
	  <meta name="google-signin-client_id" content="1027743188619-pjmnrtk3sul7hk404248r0g1c0tkvhc3.apps.googleusercontent.com">
	  <title>EnneagramTechnologies</title>
	  <!-- CSS  -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link rel="stylesheet" href="css/materialize-social.css">
	  <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
	<div class="row homemargin">
	    <div class="col s12 l6 m6 home-left valign-wrapper">
	        <div class="container" id="left-ul">
	               <ul class="">
	                  <li>What is Lorem Ipsum?</li>
	                  <li>Why do we use it?</li>
	                  <li>Where can I get some?</li>
	               </ul>
	        </div>
	    </div>
	    <div class="col s12 l6 m6  home-right ">
	        <div class="container">
	        	<h5>Start your self discovery..!</h5>
	            <ul class="collection tag">
	                <?php
		                if($numr==0)
		                { ?>
		                  <li>Enneagram list is empty.</li>
		                <?php 
		            	}
		            	else
		            	{ ?>
	                		 <?php 
	                		 foreach ($result as $key => $row) {
	                		 	?>
							    <li class="collection-item avatar">
							      <img src="<?php echo $row['et_login_img']; ?>" alt="" class="circle">
							      <span class="title"><?php echo $row['et_login_name']; ?> </span>
							      <p><?php echo $row['et_login_email']; ?><br>
							         Second Line
							      </p><a class='secondary-content dropdown-trigger btn' href='#' data-target='dropdown1'>Tag Me!</a>
							  </li>
	                		 <?php } 
	                		  ?> 
		            	<?php 
		            	}
	                ?>
	            </ul>
	        </div>
	    </div>
	</div>
	                    <!-- Dropdown Trigger -->
  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>
 <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="https://apis.google.com/js/platform.js?onload=onLoadGoogleCallback" async defer></script>
  </body>

<script type="text/javascript">
$(document).ready(function() {
	$('.dropdown-trigger').dropdown();
  window_size = $(window).height();
  $('.home-left,.home-right').height(window_size);
});
</script>
</html>