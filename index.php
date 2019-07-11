<?php 
session_start();
  include("include/db_connect.php");
  
dhdhd
 			
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

   <link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/lightbox.css" rel="stylesheet">
    	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<!--<script type="text/javascript">
			function resettag(tag){
  	  		if(tag.value=="<?php  echo  $datum_anzeige[2] ; ?>"){
  	      		tag.value="";
  	  		}
			} 
			function resetmonat(monat){
 	   		if(monat.value=="<?php  echo  $datum_anzeige[1] ; ?>"){
 	      		monat.value="";
  	  		}
			} 
			function resetjahr(jahr){
    			if(jahr.value=="<?php  echo  $datum_anzeige[0] ; ?>"){
    	    		jahr.value="";
    			}
			} 
			function resettagback(tag){
   	 		if(tag.value==""){
   	   		tag.value="<?php echo  $datum_anzeige[2] ;  ?>"  ;
   	 		}
			} 
			function resetmonatback(monat){
   	 		if(monat.value==""){
   	   		monat.value="<?php echo  $datum_anzeige[1] ;  ?>"  ;
   	 		}
			} 
			function resetjahrback(jahr){
   	 		if(jahr.value==""){
   	   		jahr.value="<?php echo  $datum_anzeige[0] ;  ?>"  ;
   	 		}
			} 
		</script>-->
	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="min-height:20px;">
	<!--<div class="container-fluid" id="comeback" style="display:none;">
		<a class="btn" style="padding:0px;color:white; margin-left:404px;" onclick="nav_show()">...</a>
	</div>-->
		<div class="container-fluid" id="navigation" style="display:block;">
   <!-- Brand and toggle get grouped for better mobile display -->
   		<div class="navbar-header">
   			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
           	 	<span class="icon-bar"></span>
          	  	<span class="icon-bar"></span>
          	  	<span class="icon-bar"></span>
         	</button>
   			<a class="navbar-brand" href="http://ldkf.de">LDKF.de</a>
   		</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      	<div id="navbar" class="navbar-collapse collapse">
     			<ul class="nav navbar-nav" >
      			<li class="active"><a href="">Startseite<span class="sr-only">(current)</span></a></li>
      			<li><a href="upload.php">Uploader</a></li>
      			<li><a href="group.php" title="Erm&ouml;glicht Gruppierung von MSN-Accounts">Multi-Accounts</a></li>
	</ul>
	</div>
     </div>
     </nav>
<div class="container main">
	<div class="masthead">
		<div class="jumbotron" style="border-radius:0px;">
			<h1>Willkommen auf msn.ldkf.de</h1>
      	<p class="lead">Hier kannst du ganz bequem dein Essen bestellen.</p>
       	<p class="lead">Welche Vorteile du hast, über uns und nicht direkt beim Menü-Service-Neuburg zu bestellen, siehst du <a href="info.php">hier</a>.</p><a name="row"></a>
      </div>       
		<div style="width:800px; padding:20px; padding-top:0">      
      	<div class="date_index"> 
      		
 			</div>
			<marquee scrollamount=2 scrolldelay=10><b>
				Plan bis 
				
				aktuell.</b>
			</marquee> 
   	</div>   
	</div>
<!-- Jumbotron -->
<form method="post" enctype="multipart/form-data" action="?#row"> 
	<table>
		<tr>
			<td style="padding-right:30px;"><input  class="btn btn-default" style="" value="Zu Datum gehen:" type="submit"></td> 
  			<td>
  				<input class="form-control" style="width:42px;" name="tag" type="text" value="<?php  echo  $datum_anzeige[2] ;  ?>" onfocus="resettag(tag)" onblur="resettagback(tag)">
  			</td>
  			<td><h2>.</h2></td>
  			<td>
  				<input class="form-control" style="width:42px;" name="monat" type="text" value="<?php echo $datum_anzeige[1]; ?>" onfocus="resetmonat(monat)" onblur="resetmonatback(monat)">
  			</td>
  			<td><h2>.</h2></td>
  			<td>
  				<input class="form-control" style="width:60px;" name="jahr" type="text" value="<?php echo $datum_anzeige[0]; ?>" onfocus="resetjahr(jahr)" onblur="resetjahrback(jahr)"  >
  			</td>
  			<td style="padding-left:60px;">
  				<a class="btn btn-primary btn-lg" href="?prev=<?php echo $datum; ?>#row"><<</a>
  			</td>
  			<td style="padding:10px;" >
  				<a class="btn btn-default btn-lg" href="?#row">Heute / N&auml;chster Schultag</a>
  			</td>
  			<td>
  				<a class="btn btn-primary btn-lg" href="?next=<?php echo $datum; ?>#row">>></a>
  			</td>
  		</tr>
	</table>
</form> 
<div class="row" style="color:black; margin-bottom:35px;">
	<div class="col-xs-10 content">
		<div class="show">
     		<table width="100%" style="color:white"><tr><td width="90px;">Men&uuml; A</td><td width="140px;">
        </td></tr></table>			
         </div> 
            <div class="picture">
            
            
 
        
        
        
        </div>
                
        <div class="col-xs-10 content">
         <div class="show">
          <table width="100%" style="color:white"><tr><td width="90px;"> Men&uuml; C</td><td width="140px;">
       
        
                   
          
        </div>
        
        
        </div>
        </div>
            <!-- Site footer -->
     <footer class="footer">
       <p style="color:white;"> Version  <?php include 'includes/version.php';?>  - erstellt mit Bluefish und Bootstrap - umgesetzt von Dominik Eichler und Alwin Ebermann</p>
       <p class="text-muted"> <a  href="https://ldkf.de//de/impressum.html" target="_blank">Impressum</a> - <a target="_blank" href="https://ldkf.de//de/datenschutzerklaerung.html" >Datenschutz</a> - <a href="Information.php" target="_blank">&Uuml;ber diese Seite</a>      </p>  
		</footer>
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="js/lightbox.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript">
    		window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"https://ldkf.de//en/privacy.html","theme":"dark-bottom"};
		</script>
      <script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
     <!-- /container -->
    
  </body>
</html>
