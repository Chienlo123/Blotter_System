<!-- in this part it is the view data of summonlevel3 -->
<?php echo '<div id="viewModal3'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Certificate To File Action</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                            
							
							<div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Case No#:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_brgycaseno" class="form-control input-sm" type="text" value="'.$row['brgycaseno'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
							
							

                            <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">SummonLevel:</label>
                                    </div>
                                   <div class="col-sm-4">
                                            <input name="txt_edit_summonlevel" class="form-control input-sm" type="text" value="'.$row['summonlevel'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                         
                                    </div>
                        </div><br>
                   
                        <div class="form-group">
                              <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Accusation:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_complaint" class="form-control input-sm" type="text" value="'.$row['complaint'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 

                           <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">File by:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_headchiefold" class="form-control input-sm" type="text" value="'.$row['headchiefold'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
							

                        </div><br>

                        <div class="form-group">
                          
                           <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Complainant:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_cname" class="form-control input-sm" type="text" value="'.$row['complainant'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
							

                            
							
							
							
                           <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">CompAddress:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_caddress" class="form-control input-sm" type="text" value="'.$row['caddress'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
                        </div><br>

                        <div class="form-group">
                           
                           <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Respondent:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_pname" class="form-control input-sm" type="text" value="'.$row['personToComplain'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 

                          
                           <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">RespAddress:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_paddress" class="form-control input-sm" type="text" value="'.$row['paddress'].'" style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
                        </div><br><br><br>
           
		   

                         <div class="form-group">
                           <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">ResoNo# :</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input  value="'.$row['id'].'" required="" class="form-control input-sm" type="text" style="background-color:gray; color:white; text-align:center;" readonly >
                            </div> 

                            
							
							
							
						
							
							
						
							
							  <div class="col-sm-2" style="width:110px; margin-left:-1px;">
                                        <label class="control-label">Date:</label>
                                    </div>
                                    <div class="col-sm-4">
                                          <input name="txt_edit_setdate"   value="'.$row['setdate'].'" required=""  class="form-control" style="background-color:gray; color:white; text-align:center;" readonly>
                                     
                                    </div>

							
                        </div><br><br>

                        <div class="form-group">
						    <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">resolution1: </label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_resolutioncase1"  value="'.$row['resolutioncase1'].'" required="" class="form-control input-sm" type="text"  style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
						
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">resolution3: </label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_resolutioncase3"  value="'.$row['resolutioncase3'].'" required="" class="form-control input-sm" type="text"  style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
							<br><br><br>
							
							    <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">resolution2: </label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_resolutioncase2"  value="'.$row['resolutioncase2'].'" required="" class="form-control input-sm" type="text"  style="background-color:gray; color:white; text-align:center;" readonly>
                            </div> 
							
							
							

                            
                        </div>
                    </div>
                </div>

        </div>
		
		   
		
		   
		   
        <div class="modal-footer">
		
		
	   
               <a target="_blank" require="" href="certiFileAction_form.php?admin='.$row['id'].'&gg='.$row['complainant'].'" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Certificate To File Action</a></td>
                  
	                                
        </div>
    </div>
  </div>
</form>
</div>';?>


