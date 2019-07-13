<?php
  include("include/db_connect.php");
	$laden_id=$_GET['laden_id'];
		
				$laden_oeffnung_request = $db->query("SELECT `status`,`tag`, Time_FORMAT(`start`, '%H:%i') `start`, Time_FORMAT(`ende`, '%H:%i') `ende` FROM `dv_oeffnungszeiten` WHERE `laden_id` = '" . $laden_id . "'  order by `tag` ASC"); 
		
			if(isset($laden_oeffnung_request->num_rows) and  $laden_oeffnung_request->num_rows!= 0) {
				while($laden_oeffnung = $laden_oeffnung_request->fetch_assoc()){
					$all_laden_oeffnung[]=array("tag" => $laden_oeffnung['tag'], "status" => $laden_oeffnung['status'] , "start" => $laden_oeffnung['start'] , "ende" => $laden_oeffnung['ende']);
					
			
      
				}
				
			}
			
			
			$laden_info_request = $db->query("SELECT `plz`,`ort`, `strasse`, `nummer`, `bewertung`, `name` FROM `dv_laden` WHERE `id` = '" . $laden_id."'"); 
		
			if(isset($laden_info_request->num_rows) and  $laden_info_request->num_rows!= 0) {
				while($laden_info = $laden_info_request->fetch_assoc()){
					$all_laden_info=array("plz" => $laden_info['plz'], "ort" => $laden_info['ort'] , "strasse" => $laden_info['strasse'] , "nummer" => $laden_info['nummer'], "bewertung" => $laden_info['bewertung'], "name" => $laden_info['name']);
							
				}
				
			}
			else {
					$all_laden_info=array("plz" => "", "ort" => "" , "strasse" => "" , "nummer" => "", "bewertung" => "", "name" => "");			
			}	
			
			$laden=array($all_laden_oeffnung, $all_laden_info);
			echo json_encode($laden);
		?> 
