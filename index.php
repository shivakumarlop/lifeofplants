
<?php
	 require('config/dbconfig.php');
	 require_once('geoplugin.class.php');
	 require_once('season.php');
	 require_once('weather.php');


	 $geoplugin = new geoPlugin();
	 $geoplugin->locate();
	 date_default_timezone_set("Australia/Brisbane");
 ?>
<!DOCTYPE html> 
<html>
<head>
	<title>Life Of Plants</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="shortcut icon" href="https://www.gardeningknowhow.com/gkh-16.png">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">
		.clear{

			clear: both;
		}
		/*zoom effect on image grid*/
		.zoom {
 
		  background-color: green;
		  transition: transform .2s; /* Animation */
		  
		  margin: 0 auto;
		}

		.zoom:hover {
			position: inherit;
			z-index: 1;
			width:500px;
			height: 500px; 
			transform: translate(-50%,-50%);
		  transform: scale(1.5); 
		}
		.info {
		  background-color: #e7f3fe;
		  border-left: 6px solid #56CC9D;
		}
		/*where plant image or description not found that message display in this .info class format*/

		/* width scroll bar design change code for google chrome */
		::-webkit-scrollbar {
		  width: 20px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		  /*box-shadow: inset 0 0 5px grey; */
		  border-radius: 10px;
		  background-color: transparent;
		  
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #56CC9D; 
		  border-radius: 10px;
		  border:1px solid white;
		}
 
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: #20c997; 
		  
     
		}
		
		.btn1 {
		  padding: 0.5rem 1rem;
		  font-size: 1.25rem;
		  line-height: 1.5;
		  
		}
		/*.btn class is use for title of side green boxes*/
		.btn1:hover {
		  padding: 0.5rem 1rem;
		  font-size: 1.25rem;
		  line-height: 1.5;;
		  transition: 1s;  
		  
		}
		.list-group-item{
			color: #000!important;

		}
	</style>
	 <script type="text/javascript">
$(document).ready(function(){
    $('#genera').on('change',function(){
    	document.getElementById("default").style.display = "none";/*this java sript for removing default value of description*/
    	document.getElementById("defaultimage").style.display = "none";/*this java sript for removing default value of imagegrid*/


        var countryID = $(this).val();
        	/*this code is use for getting species name in dropdown on change genera dropdown value*/
              if(countryID){ 
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#Species').html(html);                    
                }
            }); 
        }else{
            $('#Species').html('<option value="">Select Genera first</option>');
             
        }
    });
     $('#genera').on('change',function(){
        	/*this code is used for getting care description  on change genera dropdown value*/

        var countryID1 = $(this).val();
        
              if(countryID1){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id1='+countryID1,
                success:function(html){
                    
			        $('.description').html(html);
                    $('#imagegrid').html('<h1 class="text-center">Select Species First</h1>');


                }
            }); 
        }else{
                    $('.description').html('<h1 class="text-center">Select Genera First</h1>'); 
            
            }
    });
    
    
     $('#Species').on('change',function(){
        	/*this code is used for getting images   on change species dropdown value*/

        var generaId = $(this).val();
        if(generaId){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'plant_id='+generaId,
                success:function(html){
                    $('#imagegrid').html(html);
                }
            }); 
        }else{
            $('#imagegrid').html('<h1 class"text-center">First Select Species</h1>'); 
        }
    });
});
</script>
	</head> 
	<body>
	
	<div class="bg-primary p-3 container-fluid col-sm-12">
  		<h1 class="text-center"> <a href="index.php"> <img src="image/logo.png"></a></h1>
		
	</div>


	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 border-right mt-3"><!-- This is a First green column used for showing weather location and season -->
			<div class="card ml-0 mr-0 p-0 text-white bg-primary mb-3">
				  	<div class="btn1 text-center">TODAY'S <span style="background:white;padding:5px; color:black;border-radius:15px;text-transform: uppercase;"><?php echo $data->name."'S"; ?></span> WEATHER STATUS</div>
				  	<div class="card-body">
				  		<!-- this is a green column of weather here we can show output of weather api which is we got in weather.php -->
					    <ul class="list-group font-weight-bold">
				  			 <li class="list-group-item d-flex justify-content-between align-items-center">
							    Time 
							    <span class="badge badge-primary badge-pill"><?php echo date("H:i:s A") ?></span>
							 </li>
							 <li class="list-group-item d-flex justify-content-between align-items-center">
							    Day 
							    <span class="badge badge-primary badge-pill"><?php echo date("  l  "); ?></span>
							 </li>
							 <li class="list-group-item d-flex justify-content-between align-items-center">
							    Date 
							    <span class="badge badge-primary badge-pill"><?php echo date(' d-F-Y '); ?></span>
							 </li>
				  			 <li class="list-group-item d-flex justify-content-between align-items-center">
							   Weather  
							    <span class="badge badge-primary badge-pill"><?php echo ucwords($data->weather[0]->description); ?></span>
							    <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" />
							 </li>
							 <li class="list-group-item d-flex justify-content-between align-items-center">
							    Max-Temp 
							    <span class="badge badge-primary badge-pill"><?php echo $data->main->temp_max; ?>&deg;C</span>
							 </li>
							 <li class="list-group-item d-flex justify-content-between align-items-center">
							    Min-Temp 
							    <span class="badge badge-primary badge-pill"><?php echo $data->main->temp_min; ?>&deg;C</span>
							 </li>
							 <li class="list-group-item d-flex justify-content-between align-items-center">
							   Humidity 
							    <span class="badge badge-primary badge-pill"><?php echo $data->main->humidity; ?> %</span>
							 </li>
							 <li class="list-group-item d-flex justify-content-between align-items-center">
							    Wind 
							    <span class="badge badge-primary badge-pill"><?php echo $data->wind->speed; ?> km/h</span>
							 </li>
							 <li class="list-group-item d-flex justify-content-between align-items-center">
							    Clouds
							    <span class="badge badge-primary badge-pill"><?php echo $data->clouds->all; ?>%</span>
							 </li>	
							 <?php 
										$apiKey = "34a3780ac7a2726fee5e1ae1311646d2";
										$cityId = $geoplugin->city; 
						 	?>
 						<a href="http://api.openweathermap.org/data/2.5/weather?q=<?php echo  $cityId;?>&lang=en&mode=html&units=metric&APPID=<?php echo $apiKey; ?>" target="_blank" class="badge badge-pill mt-3 badge-dark p-3"	>Get Weather</a>	
 						<!-- this is a get weather button it is use weather api key for getting weather -->				 
						</ul>
					</div>
				</div>
				<div class="card ml-0 mr-0 p-0 text-white bg-primary mb-3"><!-- here second column is start for showing season -->
			 	<div class="btn1 text-center">SEASON</div>
			  	<div class="card-body">			    
				  	<li class="list-group-item text-primary d-flex justify-content-between align-items-center text-center">				   
				    <span style="display:block;width:100%;padding:15px; color: black;  margin: 0px auto;"  class=" text-center badge badge-primary badge-pill">
				    	<?php
				  		$date = date('d-m-Y'); /*this date is today's date if you want to change season than change this date and this changes is for 1 row green column of season only this changes affected for that column*/
				  		
				    	$season = get_season($date , "australia"); /*this is a get season method of season.php we pass parameter date and location in to season.php file for getting the result of the season*/
				    	echo $season;  /*this is a current season of current date */
				    	?>				    
				    </span>
				    </li>				
			    </div> 
			</div>
				<div class="card text-white bg-primary mb-3" ><!-- here third green column is start for showing location -->
			    <div class="btn1 text-center">LOCATION DETAILS</div>
			 	<div class="card-body">			
			 		<ul class="list-group font-weight-bold">
						<li class="list-group-item text-primary d-flex justify-content-between align-items-center">		
				    	<span style="display:block;width:100%;padding:15px;color:black;  margin: 0px auto;" class="badge badge-primary badge-pill"><?php echo " ".$geoplugin->city.", ".$geoplugin->region  ?></span><!-- this location is dyanamic and this output is comes from geoplugin.class.php in that file we mention our ip for fetching location first include it in top of this page check it -->
				    	<!-- <span>Hill End Terrace, Brisbane West End, Queensland, 4101
West End Brisbane Australia</span> -->
				  		</li>				   				 
					</ul>
			    </div>
			</div>
			</div><!-- first column end -->
			<div class="col-sm-9"><!-- here second column which is display dropdowns and description -->
					<h1 class="text-center">Select Your Plant</h1>			
				<div class="row border-radius border-top">
					<div class="col-sm-3 border-bottom border-right" style="border-radius: 15px;"><!-- this column is used for  dropdowns -->
			  				
			  				<div class="form-group"><!-- this is a dropdown of genera -->
			     				<label for="exampleSelect1">Genera</label>
							         <select class="form-control" name="genera" id="genera"  >	
							        <?php
							        	 
							        $query = mysqli_query($db_handle,"select * from genera");
										if(mysqli_num_rows($query)>=1){
                                            echo '<option value="1" selected>Lithops</option>';
											
											while($val = mysqli_fetch_array($query)){
												?>
			 				        	<!-- <option value="<?php echo $val['id'] ?>"><?php echo $val['generaname'] ?></option> -->
							        	<?php		
                                         echo '<option  value="'.$val['id'].'">'.$val['generaname'].'</option>';

							        		}
							        	}else{	 						        ?>		       
										<option value="">No data Found</option>
										<?php
											}
										?>			 
							        </select>    
			    			</div>
			      			
					      	<div class="form-group"><!-- this is a species dropdown here when user select genera  than species value is show here  -->
					      		<label for="exampleSelect1">Species</label>				     
					      			 <select class="form-control" name="Species" id="Species">
								        <option value="">Select Genera first</option>
								    </select>					    
					    	</div>
			      			<div class="form-group"><!-- this is a dropdown of age -->
							    <label for="exampleSelect1">Age </label>
							        <select class="form-control" name="age" id="age">
								        
								        <option value="1" selected>Adult</option>
								        <option value="2">Seedling</option>

								    </select>     
						    </div>
					      	
						    <!-- <div class="form-group">
						    <div id="sdf"></div>
						    </div> -->

						</div><!-- second column end -->
		<div class="col-sm-9" ><!-- this column is used for display description -->
			<h3 class="text-center">
				How To Take Care Of Lithops.?
			</h3>
			<div class="mr-3 container " style="height: 500px; overflow-y: scroll; border-radius: 15px;">
				<p class="text-justify description">
					<div id="default"><!-- this id is  used for defalt care description of lithops when user change genera this id is remove using javascript -->
					<?php 
						$date = date('d-m-Y');                        
                        $s = get_season($date , "australia"); 
                        $season =  ucfirst(trim($s));
				 		
				 		$query = mysqli_query($db_handle,"SELECT * FROM `care` WHERE `generaid`= '1' AND season ='".$season."'");
                        
                                
                                            while($val = mysqli_fetch_array($query)){
                                                ?>
                        
                                            

  				<div class="card mb-3" style=" background-color: #fff;color:black!important;box-shadow: 0 12px 10px -7px rgba(0,0,0,0.1);">
                
                                    <h3 class="card-header text-center"><h1 class="text-center border-bottom">Your Selected Genera Details</h1></h3>
                                  <h3 class="card-header text-center" >
                                    <?php 

                                        $name = mysqli_query($db_handle,"Select * from genera where id =".$val['generaid']."");
                                            $generaname = mysqli_fetch_array($name);
                                            echo "Genera Name : ".$generaname['generaname'];


                                     ?></h3>
                                  <div class="card-body">
                                    <h5 class="card-title text-center" >Season Name : <?php echo $val['season']; ?></h5>
                                    
                                  </div>
                                  <img style="height: 250px; background: white; width: 250px; margin: 0px auto; box-shadow: 0 12px 10px -7px rgba(0,0,0,0.5);border: 1px solid black;" src="image/<?php echo $val['image']; ?>" alt="Card image">
                                  <div class="card-body">
                                    <p class="card-text p-3 text-justify" style="background-color: #fff;color: black;" ><?php echo $val['description']; ?></p>
                                  </div>
                                 
                                  
                                </div>
                                <?php 

                            }

                            ?>
                            </div>

					
				
				</p>
			</div>					 
		</div><!-- third column end -->
	</div><!-- second  and third column row end here -->
	<div class="clear"></div>
	<hr class="my-4" >
			<div class="container  mt-3 mt-3" style="border-radius: 15px;"><!-- this container is for images of genera  -->
				<h2 class="text-center">Current Health Status Of Lithops.</h2>
				<div class="row" id="imagegrid"><!-- this id is used for images when select species -->
	<!-- <img class="col-sm-4  mt-3 border" style="height: 200px; width: 100%; display: block;" src="image/p1.jpg" alt="Lithops image"> -->
				</div>
				<div class="row" id="defaultimage"><!-- this id is used for default images when select genera this id is removed using javascript -->
					 <?php 
					 $date = date('d-m-Y');
                        
                        $s = get_season($date , "australia"); 
                        $season =  ucfirst(trim($s));
                        
                             
    $query = mysqli_query($db_handle,"SELECT * FROM `image` WHERE `generaid`= '1' AND season ='".$season."' ");


                                        if(mysqli_num_rows($query)>=1){
                                            ?>
                                            <h1 class="text-center col-sm-12 clear"> Genera Species Images In <?php echo $season; ?></h1>
                                            
                                            <?php 
                                            while($val = mysqli_fetch_array($query)){
                                                
                                                ?>


                                                <a class="col-sm-4  mt-3 " href="image/<?php echo trim($val['image']); ?>"   download><img class="zoom" src="image/<?php echo trim($val['image']); ?>"  style="height: 200px; width: 100%; display: block;"   alt="Lithops image">
                                                </a>

                                            <?php
                                            }
                                        }else{                                  ?>             
                                        <h1 class="text-center info"> No plant Image Found For This Season </h1>
                                        <?php
                                            }
?>
				</div>
			<!-- </div>
		<a href="index.php" class="badge badge-dark p-3 mt-3 mb-3" style="float: right;">Next</a>
	</div>
 -->
		</div><!-- main row -->
	</div><!-- container end -->
</body>
</html> 