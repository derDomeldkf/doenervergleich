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
	
	$('body').on('click', '.dropdown-item', function() {
		
		var that=this;
		$( ".created" ).remove();
		$.getJSON("content.php", {laden_id: $(that).attr('id')}, function(data)
			{
				
				for (var i = 1, len = data[0].length; i <= len; i++) {
					
        			if ((data[0][i-1]['status'])==1) {
        				
        				$("#oeff_"+data[0][i-1]['tag']).append($('<div class="row created"><div class="col">'+data[0][i-1]['start']+'  bis  '+data[0][i-1]['ende']+'</div></div>'));
        				
        			}
        			else {
        				$("#oeff_"+data[0][i-1]['tag']).append($('<div class="row created"><div class="col">geschlossen</div></div>'));
        			}
        			
        			
        		}
        		$("#laden_name").html(data[1]['name']);
        		$("#laden_bewertung").html(data[1]['bewertung']);
        		$("#laden_adresse").html(data[1]['strasse']+" "+ data[1]['nummer']+", "+data[1]['plz']+" "+data[1]['ort']);
        		

				/*for (i = 0; i < data.length; i++) {
					
				}
				var oeffnung_array = jQuery.parseJSON(data);
				var art1 = duce.key1;
				var art2 = duce.key2;
			var art3 = duce.key3;				
				
				$("#content").html(data);*/
				
			});
			$("#laden_info").show();

			 /* 		var th= this;
			  		user=getCookie("user");
					$.post("include/logout.php",{
		   			0: user,
		   		},
		   		function (data) {
						if (data.replace(" \n", "") == 1) {
						}
						else{
							$(th).parent().hide();
							$( "#login" ).show();
						}
					});*/

			  
	});	
	
	
	
	
	
	
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
  <div class="container">
 
  <div class="row">
  		<form action="search.php">
			<div class="input-group input-group-lg">
  				<div class="input-group-prepend">
    				<span class="input-group-text" id="inputGroup-sizing-lg">Dönerladen suchen</span>
  				</div>
			   <div class="dropdown-menu" id="results">
      			
      			<?php $laden_request = $db->query("SELECT `id`, `name`, `ort`, `plz`  FROM `dv_laden` order by `bewertung` ASC LIMIT 5"); 
		
						if(isset($laden_request->num_rows) and  $laden_request->num_rows!= 0) {
							while($laden = $laden_request->fetch_assoc()){
								$all_laden[]=array("plz" => $laden['plz'] , "ort" => $laden['ort'] , "name" => $laden['name'], "id" => $laden['id']);
							}
							foreach($all_laden as $all_laden_each){
								echo '<a class="dropdown-item" id="'.$all_laden_each['id'].'" href="#'.$all_laden_each['id'].'">'. $all_laden_each['plz'] .' '. $all_laden_each['ort'] .' - '. $all_laden_each['name'] .'</a>';
							}
						}
					?>
					<a class="dropdown-item" href="#">Alle anzeigen</a>
      		</div>
				<input type="text" id="search" name="search" list="laeden" class=" dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
		</form>

		</div>
		</div>
		<div class="container  mt-3">
		<div class="col-6" id="laden_info" style="display:none;">
     <div class="row  py-2">
     <div class="col" id="laden_name">
     
    </div>
    <div id="laden_bewertung" class="col">
      
    </div>
     
     
     </div>
     
     <div class="row  py-2">
     

	<div id="laden_adresse" class="col">
      
    </div>
   
	</div>
<div class="row  py-2">
<div class="col">
      <b>Öffnungszeiten</b>
    </div>

</div>
<div class="row  py-2">
<div class="col-5 ">Montag:</div> <div class="col-7"  id="oeff_1"></div>
</div>
<div class="row  py-2">
<div class="col-5 ">Dienstag:</div> <div class="col-7"  id="oeff_2"></div>
</div>
<div class="row  py-2">
<div class="col-5 ">Mittwoch:</div> <div class="col-7"  id="oeff_3"></div>
</div>
<div class="row  py-2">
<div class="col-5 ">Donnerstag:</div> <div class="col-7"  id="oeff_4"></div>
</div>
<div class="row  py-2">
<div class="col-5 ">Freitag:</div> <div class="col-7"  id="oeff_5"></div>
</div>
<div class="row  py-2">
<div class="col-5">Samstag:</div> <div class="col-7"  id="oeff_6"></div>
</div>
<div class="row  py-2">
<div class="col-5">Sonntag:</div> <div class="col-7"  id="oeff_7"></div>
</div>
		

		</div>	

    		
		<div class="col-3">
		
		</div>	
		

	</div>
  </body>
</html>
