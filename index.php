<?php 
session_start();
  include("include/db_connect.php");
  
 			
?>   

  
<!DOCTYPE html>
<html lang="de">
	<head>
	<!--	<link rel="icon" href="favicon.png">-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 	<meta http-equiv="content-type" content="text/html; charset=UTF-8" > 
	 	<meta name="robots" content="index,follow">
 	 	<meta name="description" content="">
	 	<meta name="keywords" content=""> 
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    	<title>Startseite</title>

   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
	</head>
	<body>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<div class="container">
  <script>
  

 $(document).ready(function()
{
	$('#search').keyup(function()
	{
		if($(this).val().length >= 0)
		{
			$.get("search.php", {search: $(this).val()}, function(data)
			{
				$("#results").html(data);
				$('.dropdown-toggle').dropdown();
			});
		}
	});
}); 
  
  </script>
  <form action="search.php">
<div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Dönerladen suchen</span>
  </div>


    
    <div class="dropdown-menu" id="results">
      <a class="dropdown-item" href="#">Alle anzeigen</a>
      
    </div>

		<input type="text" id="search" name="search" list="laeden"/
class=" dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"		
		> 
	<?php ?>
	
  
</form>
</div>		
		<!-- Content here -->
</div>
		
		
		
		<div class="col-6">
      	
    		
		<div class="col-3">
		
		</div>	
		
    
  </body>
</html>
