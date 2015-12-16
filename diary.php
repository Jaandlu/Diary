<? include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="IDiary" content="IDiary Login">
    
    

    <title>IDiary</title>

    <!-- Bootstrap core CSS -->
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">


<style>

html, body {

	height:100%;
	color:#F3F3F3;
	background-color:darkgrey;
}

.center {
	text-align:center;
	background-color:black;
	border-radius: 50px;
}


.contentContainer {
	background-image:url("http://jaandlu.com/php/images/diary.gif");
	width:100%;
	height:100%;
	background-size:cover;
	background-position:center;
	padding-top:100px;
}

.white {
	color:#F3F3F3;
}




</style>

</head>
<body>

  
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IDiary</a>
        
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">
         
			<form method="post" class="navbar-form navbar-right">
			
				<div class="form-group">
					<input type="username" name="usernameLogin" class="form-control" placeholder="Username" value="<?php echo addslashes($_POST['usernameLogin']); ?>" />
				</div>	
	
				<div class="form-group">
					<input type="password" name="passwordLogin" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['passwordLogin']); ?>"/>
				</div>	
				
				<div class="form-group">
					<input type="submit" name="submit" value="Login" class="btn btn-success"></input>
				</div>

			</form>
         
         
         
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  
  
  

 <div class="container contentContainer">

      <div class="row">
        
  		<div class="col-md-6 col-md-offset-3 center">
  		
  			<h1>IDiary</h1>
    	
    		<lead>The private and portable diary. Sign up now!</lead>
    	
			<?php
				if ($error) {
				echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
	
				}
		
				if ($message) {
				echo '<div class="alert alert-info">'.addslashes($message).'</div>';
		
				}
	
	
			?>
  		
  			<form class="form center-text" method="post">
				
					<div class="form-group">	
						<label for="username">Username</lable>
						<input type="username" name="username" class="form-control" value="<?php echo addslashes($_POST['username']); ?>" />
					</div>	
	
					<div class="form-group">
						<label for="email">Email</lable>					
						<input type="email" name="email" class="form-control" value="<?php echo addslashes($_POST['email']); ?>" />
					</div>	
	
					<div class="form-group">
						<label for="password">Password</lable>					
						<input type="password" name="password" class="form-control" value="<?php echo addslashes($_POST['password']); ?>"/>
					</div>	
	
	
					<div class="form-group">
						<label for="passwordCheck">Re-enter Password</lable>					
						<input type="password" name="passwordCheck" class="form-control" value="<?php echo addslashes($_POST['passwordCheck']); ?>" />
					</div>		
				
					<div class="form-group">
						<input type="submit" name="submit" value="Sign Up" class="btn btn-success"></input>
					</div>

				</form>	
			
 		</div> 	
 		
		
    </div>

     

 </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="//getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  
  	<script>
	
	$(".contentContainer").css("min-height",$(window).height());
	
	</script>
	 
  </body>
</html>