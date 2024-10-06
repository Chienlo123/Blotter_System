<!-- In this part once the add_modal search is found your searching case no the information will display the data  -->
<!-- $query = "SELECT * FROM tblblotter WHERE id LIKE '{$input}%' LIMIT 1"; -->
<?php


include("config.php");
if(isset($_POST['input'])){
	
	
	$input = $_POST['input'];
	
	$query = "SELECT * FROM tblblotter WHERE id LIKE '{$input}%' LIMIT 1";
	$result = mysqli_query($con,$query);
	
	
	if(mysqli_num_rows($result)>0)
	{?>

     <table class="table table-bordered table-striped mt-3">
	      
		
		  
		  
		  <tbody>
		     <?php
			 while($row = mysqli_fetch_assoc($result)){
				 
				 $id = $row['id'];
				 $complaint = $row['complaint'];
				 $headchief = $row['headchief'];
				 $complainant = $row['complainant'];
				 $caddress = $row['caddress'];
				 $personToComplain = $row['personToComplain'];
				 $paddress = $row['paddress'];
				 
				 
				 
				 ?>
				 
				 <tr>
				 
				 
				   <div class="row">
                            <div class="col-sm-12" >
                                <div class="form-group" >
								
								
								  <div class="col-md-2"  style="width:110px; margin-left:28px;">
                                        <label class="control-label">Case No# :</label>
                                    </div>  
                                    <div class="col-sm-4" >
									   <input name="txt_brgycaseno" id="brgycaseno" value="<?php echo $id; ?>" class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                     
								  </div> 
								  
								  <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">Summon Level:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="txt_summonlevel" required="" class="form-control input-sm" style="background-color:gray; color:white; text-align:center;"readonly>
                                            <option >1</option>
                                        
                                        </select>
                                    </div>

									 
								
                                   
                                </div>
                           
                                <div class="form-group">
                                    
								   
									
									 <div class="col-sm-2" style="width:110px; margin-left:28px;">
                                        <label class="control-label">Accusation:</label>
                                    </div>
                                    <div class="col-sm-4">
                                     <input name="txt_complaint" value="<?php echo $complaint; ?>"  class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                       </div>
								 

                               
									 
									  <div class="col-md-2"  style="width:90px; margin-left:22px;">
                                        <label class="control-label">File By:</label>
                                    </div>  
                                    <div class="col-sm-4" >
									  <input name="txt_headchiefold" value="<?php echo $headchief; ?>" class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                     
                                    </div> 

                                </div> 

                                <div class="form-group">
                                  
									
									  <div class="col-md-2"  style="width:110px; margin-left:28px;">
                                        <label class="control-label">Complainant:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                       <input name="txt_cname" value="<?php echo $complainant; ?>" class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                     </div> 
									 
									  <div class="col-md-2" style="width:110px; margin-left:4px;">
                                        <label class="control-label">CompAddress:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                       <input name="txt_caddress" value="<?php echo $caddress; ?>" class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                     </div> 

                                  
                                </div>

                               
								
								 <div class="form-group">
                                  
									
									  <div class="col-md-2"  style="width:110px; margin-left:28px;">
                                        <label class="control-label">Respondent:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                       <input name="txt_pname" value="<?php echo $personToComplain; ?>" class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                     </div> 
									 
									  <div class="col-md-2"  style="width:110px; margin-left:4px;">
                                        <label class="control-label">RespAddress:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                       <input name="txt_paddress" value="<?php echo $paddress; ?>" class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                     </div> 

                                  
                                </div>

<div class="modal-footer">

                                <div class="form-group" >
                               
									<div class="col-sm-2" style="width:110px; margin-left:15px;">
                                        <label class="control-label">Set Date:</label>
                                    </div>
                                    <div class="col-sm-4">
                                          <input name="txt_setdate"  required="" type="date" class="form-control" style=" text-align:center;">
                                     
                                    </div>
									
									
									
									
									  <div class="col-md-2"  style="width:110px; margin-left:15px;">
                                        <label class="control-label">File By:</label>
                                    </div>  
                                    <div class="col-sm-4" >
									  <input name="txt_headchief"  required="" class="form-control" style=" text-align:center;">
                                     
                                    </div> 
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2" style="width:110px; margin-left:15px;">
                                        <label class="control-label">Set Time:</label>
                                    </div>
                                    <div class="col-sm-4">
                                         <input name="txt_settime"  type="time"  required=""class="form-control" style=" text-align:center;">
                                     
                                    </div>

                                   
                                </div>
								
								</div>
								
								
                            </div>
                        </div>
				
					
				 </tr>
				 
				 <?php
				 
			 }
			 
			 
			 ?>
		  
		  
		  </tbody>
	 
	 
	 
	 </table>


     <?php
		
		
		
	}else
	{
		
		echo "<h6 class='text-danger text-center mt-3'>No data Found</h6>"; 
	}
	
	
}
	




?>
			
			