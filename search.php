<?php
  include("include/db_connect.php");

		
			$laden_request = $db->query("SELECT `id`, `name`, `ort`, `plz`  FROM `dv_laden` WHERE `name` LIKE '%" . $_GET['search'] . "%' or `plz` LIKE '%" . $_GET['search'] . "%' or `ort` LIKE '%" . $_GET['search'] . "%' order by `id` ASC LIMIT 5"); 
		
			if(isset($laden_request->num_rows) and  $laden_request->num_rows!= 0) {
			while($laden = $laden_request->fetch_assoc()){
				$all_laden[]=array("plz" => $laden['plz'] , "ort" => $laden['ort'] , "name" => $laden['name'], "id" => $laden['id']);
					
			
      
			}
			foreach($all_laden as $all_laden_each){
					
					echo '<a class="dropdown-item" id="'.$all_laden_each['id'].'" href="#'.$all_laden_each['id'].'">'. $all_laden_each['plz'] .' '. $all_laden_each['ort'] .' - '. $all_laden_each['name'] .'</a>';
				
				}
			}
			else {
			
			echo 'Leider keine Ergebnisse gefunden';
			
			}
		?> 
