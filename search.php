<?php
  include("include/db_connect.php");

		
				$laden_name_request = $db->query("SELECT `name` FROM `dv_laden` WHERE `name` LIKE '%" . $_GET['search'] . "%' order by `id` ASC LIMIT 5"); 
			
			if(isset($laden_name_request->num_rows) and  $laden_name_request->num_rows!= 0) {
			while($laden_name = $laden_name_request->fetch_assoc()){
				$all_laden_name[]=$laden_name['name'];
				
				
				
      
			}
			foreach($all_laden_name as $laden_name_each){
					
					echo '<a class="dropdown-item" href="#">'. $laden_name_each .'</a>';
				
				}
			}
			else {
			
			echo 'Leider keine Ergebnisse gefunden';
			
			}
		?> 
