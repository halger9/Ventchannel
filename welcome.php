<?php
require_once('facebook_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
	  <a class="brand" href="#">Vent Channel</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            <li class='dropdown'>
            </ul>
            <?php if ($user) {
            echo "<ul class='nav pull-right'>
            	<li class='dropdown'>
            		<a href='#' class='dropdown-toggle' data-toggle='dropdown'><b class='icon-user'></b>".$user_profile['name']."<b class='caret'></b></a>
              			<div class='dropdown-menu' style='padding: 15px; padding-bottom: 0px;'>
									<form id='form' class='form' method='post' action='login-beta.php'>
									<li><a href='#'>Settings</a></li>
 									<li><a href='#'>Profile</a></li>	
									<li><a href=".$logoutUrl.">Log Out</a></li>
									</form> 
						</div>
          		</li>
            </ul>";}else{
            	 echo "<ul class='nav pull-right'>
            	<li class='dropdown'>
            		<a href='#' class='dropdown-toggle' data-toggle='dropdown'><b class='icon-user'></b>Login<b class='caret'></b></a>
              			<div class='dropdown-menu' style='padding: 15px; padding-bottom: 0px;'>
									<form id='form' class='form' method='post' action='login-beta.php'>
										<fieldset>
  											<label class='UsernameLabel'>Email</label>
												<input type='email' id='Form_Email' name='email' value='' class='InputBox'>
												<label class='PasswordLabel'>Password</label>
												<input type='password' id='Form_Password' name='password' value='' class='InputBox Password'>
												<input type='hidden' name'file' value='<?echo $_POST['file']; ?>'>
											<input type='submit' id='Form_SignIn' name='Form/Sign_In' value='Sign In' class='btn btn-primary'>
										</fieldset>
										<span> or </span>
										<li><fb:login-button></fb:login-button></li>
 										<div id='fb-root'></div>
									</form> 
						</div>
          		</li>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
	  <div class="well sidebar-nav hidden-tablet hidden-phone">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span6">
	      <div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		    <img src="http://i.imgur.com/7CQb8.jpg"  alt="">
		    <div class="carousel-caption">
		      <h4>First Thumbnail label</h4>
		      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		    </div>
		  </div>
		  <div class="item">
		    <img src="http://i.imgur.com/iKTI3.jpg" alt="">
		    <div class="carousel-caption">
		      <h4>Second Thumbnail label</h4>
		      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		    </div>
		  </div>
		  <div class="item">
		    <img src="http://i.imgur.com/02apJ.jpg" alt="">
		    <div class="carousel-caption">
		      <h4>Third Thumbnail label</h4>
		      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		    </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	      </div>
	    </div>
	   </div>
          <div class="row-fluid">
            <div class="span4">
	      <h2>Sports</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
	      <h2>Politics</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
	      <h2>Facebook</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
	      <h2>Family</h2>
	      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
	    </div><!--/span-->
	    <div class="span4">
	      <h2>Friends</h2>
	      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
	    </div><!--/span-->
	    <div class="span4">
	      <h2>Road Rage</h2>
	      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
	    </div><!--/span-->
	  </div><!--/row-->
	  <div class="row-fluid">
	    <div class="span4">
	      <h2>School</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	      <p><a class="btn" href="#">View Channel &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->
      <div class='modal hide fade' id='sign-up'>
      	<div class='modal-header'>
      		<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
      		<p align='center'><h2>Sign Up</h2></p>
      	</div>
      	<div class='modal-body'>
      		<form method='post' action='sign-up.php' id='register'>
			    <fieldset id='inputs'>
			    	<input id='firstName' name='firstName' type='text' placeholder='First Name' autofocus required>
			        <input id='lastName' name='lastName' type='text' placeholder='Last Name' required>
			        <input id='email1' name='email1' type='email' placeholder='Email' required>
			        <input id='email2' name='email2' type='email' placeholder='Verify Email' required>
			        <input id='employeeId' name='employeeId' type='text' placeholder='Employee ID' required>   
			        <input id='password' autocomplete='off' name='password' type='password' placeholder='Password' required>
			    </fieldset>
			    <fieldset id='select'>
					<select class='select' name='costCenter' id='costCenter'> 
						<option class='option' value=''>---Cost Center---</option>
						<option class='option' value='69333'>Implementation Services</option>
						<option class='option' value='69101'>Cloud Operations</option>
						<option class='option' value='69501'>SIS Operations</option>
						<option class='option' value='69555'>Quality Assurance</option>
						<option class='option' value='69599'>Development</option>
					</select>
			    </fieldset>
			    <fieldset id='actions'>
			        <input type='submit' id='submit'  class='btn btn-primary' value='Register'>
			    </fieldset>
			
			</form>
					    <script>
			      window.fbAsyncInit = function() {
				FB.init({
				  appId: '<?php echo $facebook->getAppID() ?>',
				  cookie: true,
				  xfbml: true,
				  oauth: true
				});
				FB.Event.subscribe('auth.login', function(response) {
				  window.location.reload();
				});
				FB.Event.subscribe('auth.logout', function(response) {
				  window.location.reload();
				});
			      };
			      (function() {
				var e = document.createElement('script'); e.async = true;
				e.src = document.location.protocol +
				  '//connect.facebook.net/en_US/all.js';
				document.getElementById('fb-root').appendChild(e);
			      }());
			    </script>
      	</div>
      </div>
				
      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>


  </body>
</html>
