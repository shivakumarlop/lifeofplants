<?php 
			// $date - A date in any English textual format. If blank   
			// defaults to the current date  
			// $hemisphere - "northern", "southern" or "australia"  
			function get_season($date="", $hemisphere="northern") {  
			      
			    // Set $date to today if no date specified  
			    if ($date=="") { $date = date("d-m-Y"); }  
			      
			    // Specify the season names  
			    $season_names = array('Winter', 'Spring', 'Summer', 'Fall');  
			  
			    // Get year of date specified  
			    $date_year = date("Y", strtotime($date));  
			  
			    // Declare season date ranges  
			    switch (strtolower($hemisphere)) {  
			        case "northern": {  
			            if (  
			                strtotime($date)<strtotime('21-03-'.$date_year) ||   
			                strtotime($date)>=strtotime('21-12-'.$date_year)  
			            ) {   
			                return $season_names[0]; // Must be in Winter  
			            }elseif (strtotime($date)>=strtotime('23-09-'.$date_year)) {  
			                return $season_names[3]; // Must be in Fall  
			            }elseif (strtotime($date)>=strtotime('21-06-'.$date_year)) {  
			                return $season_names[2]; // Must be in Summer  
			            }elseif (strtotime($date)>=strtotime('21-03-'.$date_year)) {  
			                return $season_names[1]; // Must be in Spring  
			            }  
			            break;  
			        }  
			        case "southern": {  
			            if (  
			                strtotime($date)<strtotime('21-03-'.$date_year) ||   
			                strtotime($date)>=strtotime('21-12-'.$date_year)  
			            ) {   
			                return $season_names[2]; // Must be in Summer  
			            }elseif (strtotime($date)>=strtotime('23-09-'.$date_year)) {  
			                return $season_names[1]; // Must be in Spring  
			            }elseif (strtotime($date)>=strtotime('21-06-'.$date_year)) {  
			                return $season_names[0]; // Must be in Winter  
			            }elseif (strtotime($date)>=strtotime('21-03-'.$date_year)) {  
			                return $season_names[3]; // Must be in Fall   
			            }  
			            break;  
			        }  
			        case "australia": {  
			            if (  
			                strtotime($date)<strtotime('01-03-'.$date_year) ||   
			                strtotime($date)>=strtotime('01-12-'.$date_year)  
			            ) {   
			                return $season_names[2]; // Must be in Summer  
			            }elseif (strtotime($date)>=strtotime('01-09-'.$date_year)) {  
			                return $season_names[1]; // Must be in Spring  
			            }elseif (strtotime($date)>=strtotime('01-06-'.$date_year)) {  
			                return $season_names[0]; // Must be in Winter  
			            }elseif (strtotime($date)>=strtotime('01-03-'.$date_year)) {  
			                return $season_names[3]; // Must be in Fall   
			            }  
			            break;  
			        }  
			        default: { echo "Invalid hemisphere set"; }  
			    }  
			  
			}

?>