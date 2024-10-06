<!-- Edit information of Vawc -->
<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit VAWC</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                            
							
							<div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Complainant:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_cname" class="form-control input-sm" type="text" value="'.$row['complainant'].'"/>
                            </div> 
							
							

                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Age:</label>
                            </div>
                            <div class="col-sm-4">
                                <input name="txt_edit_cage" class="form-control input-sm" type="number" value="'.$row['cage'].'"/>
                            </div> 
                        </div><br>
                   
                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">CompAddress:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_cadd" class="form-control input-sm" type="text" value="'.$row['caddress'].'"/>
                            </div> 

                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">CompContact:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_ccontact" class="form-control input-sm" type="number" value="'.$row['ccontact'].'"/>
                            </div> 
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Respondent:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_pname" class="form-control input-sm" type="text" value="'.$row['personToComplain'].'"/>
                            </div> 

                            
							
							
							<div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">CompGender:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="txt_edit_compgen" class="form-control input-sm" type="number" value="'.$row['compgen'].'">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
											
                                        </select>
                                    </div>
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">RespAddress:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_padd" class="form-control input-sm" type="text" value="'.$row['paddress'].'"/>
                            </div> 

                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Headchief:</label>
                            </div>  
                            <div class="col-sm-4" >
                                <input name="txt_edit_headchief" class="form-control input-sm" type="text" value="'.$row['headchief'].'"/>
                            </div> 
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Accusation:</label>
                            </div>
                            <div class="col-sm-4">
                                <input name="txt_edit_complaint" class="form-control input-sm" type="text" value="'.$row['complaint'].'"/>
                            </div>

                            
							
							
							
							<div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">RespGender:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="txt_edit_respgen" class="form-control input-sm" type="number" value="'.$row['respgen'].'">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
											
                                        </select>
                                    </div>
							
                        </div><br>

                        <div class="form-group">
                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Case Type:</label>
                            </div>
                            <div class="col-sm-4">
                                <select name="ddl_edit_stat" class="form-control input-sm">
                                    <option value="'.$row['sStatus'].'" selected>'.$row['sStatus'].'</option>
                                    
									<option >child</option>
                                    <option >women</option>
									
                                </select>
                            </div>

                            <div class="col-sm-2" style="width:110px;">
                                <label class="control-label">Incidence:</label>
                            </div>
                            <div class="col-sm-4">
                                <input name="txt_edit_location" class="form-control input-sm" type="text" value="'.$row['locationOfIncidence'].'"/>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>