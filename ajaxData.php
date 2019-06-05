<?php
//Include database configuration file
include('config/dbconfig.php');
require_once('season.php'); 

 
if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){ 
    /*here when user change genera generaid is pass here using ajax javascript jquery which is written in index.php file*/
    /*than out put of species name is return*/
    $id= $_POST["country_id"];
    $query = mysqli_query($db_handle,"SELECT * FROM `plants` WHERE `generaid`=".$id."");

                                        if(mysqli_num_rows($query)>=1){
                                            echo '<option value="" selected>Select Species</option>';

                                            while($val = mysqli_fetch_array($query)){
                                                ?>

                                        <!-- <option value="<?php echo $val['id'] ?>"><?php echo $val['lifespan'] ?></option> -->
                                        <?php   
                                         echo '<option selected value="'.$val['generaid'].'">'.$val['plantname'].'</option>';

                                            }
                                        }else{                                  ?>             
                                        <option value="" class="info">No Species Data Found</option>
                                        <?php
                                        
                                            }
                        
                                             
}

if(isset($_POST["country_id1"]) && !empty($_POST["country_id1"])){
     /*here when user change genera generaid is pass here using ajax javascript jquery which is written in index.php file*/
    /*than out put of care details  is return*/
    $id= $_POST["country_id1"];
                        $date = date('d-m-Y');                        
                        $s = get_season($date , "australia"); 
                        $season =  ucfirst(trim($s));

     $query = mysqli_query($db_handle,"SELECT * FROM `care` WHERE `generaid`=".$id." AND season ='".$season."'");
                        
                                if(mysqli_num_rows($query)>=1){
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
                                        }else{                                  ?>             
                                        <h1 class="text-center info"> No plant Data Found For This Season </h1>
                                        <?php
                                            }              
}
?> 




 <?php
 
if(isset($_POST["plant_id"]) && !empty($_POST["plant_id"])){
 /*here when user change species generaid is pass here using ajax javascript jquery which is written in index.php file*/
    /*than output of images of images table is return*/   
    $id= $_POST["plant_id"];

                        $date = date('d-m-Y');
                        
                        $s = get_season($date , "australia"); 
                        $season =  ucfirst(trim($s));
                        
                             
    $query = mysqli_query($db_handle,"SELECT * FROM `image` WHERE `generaid`= '$id' AND season ='".$season."' ");


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
                                        <h1 class="text-center info"> No palnt Image Found For This Season </h1>
                                        <?php
                                            }




}
?>