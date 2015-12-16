<?

	session_start();

	include ("connection.php");

	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['diary'];
	

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Secret Diary Main Page</title>

	
	
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">



</head>

<style>

html, body {

	height:100%;
	color:#F3F3F3;

}

.center {
	text-align:center;
	background-color:black;
	border-radius: 50px;
	
}

.textarea {
	
	font-family: cursive, sans-serif;
	font-size:1.5em;
	padding:20px 20px 20px 20px;
	margin:auto;
	border-radius: 50px;
	background-image:url("http://jaandlu.com/php/images/paper.jpg");

}


.contentContainer {
	background-image:url("http://jaandlu.com/php/images/diary.gif");
	width:100%;
	height:100%;
	background-size:cover;
	background-position:center;
	
}

.topMarign {
	margin-top:80px;
}



</style>


<body data-spy="scroll" data-target=".navbar-collapse">

<div class="navbar navbar-inverse navbar-fixed-top">

	<div class="container">

		<div class="navbar-header pull-left">
        
          <a class="navbar-brand" href="#">IDiary</a>
        
        </div>
        
        
		<div class="pull-right">

        	<ul class="navbar-nav nav">

         		<li><a href="diary.php?logout=1">Log Out</a></li>
			
			</ul>
         
		</div>

	</div>
	
</div>



<div class="container contentContainer">
  		<div class="row">
  		
  			<div class="col-md-6 col-md-offset-3 topMarign center" >
  				
  				<div>
 			 
					 <textarea name="editor1" class="form-control textarea">
					 <?php echo $diary;?>			
        			</textarea>
 			 		
 			 	</div>
 			 	
 			 </div>
 		 
		</div>
		
  </div>

	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	
		$(".contentContainer").css("min-height",$(window).height());
		
		$("textarea").css("min-height",$(window).height()-120);
		
		$("textarea").keyup(function() {
    	
    		$.post("updatediary.php", {diary:$("textarea").val()} );
    	
    	});
    	
    	
	
	</script>	
	
   
</body>
</html>
