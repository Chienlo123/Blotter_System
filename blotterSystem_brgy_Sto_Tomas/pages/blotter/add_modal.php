<!-- ========================= MODAL ======================= -->
<!-- filling blotter -->

            <div id="addModal" class="modal fade">
            <form class="form-horizontal" method="post">
              <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Blotter</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="col-md-2"  style="width:110px;">
                                        <label class="control-label">Complainant:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                        <input name="txt_cname" class="form-control input-sm" type="text" required="" placeholder="Complainant Fullname"/>
                                    </div> 

                                    <div class="col-sm-2"  style="width:110px;">
                                        <label class="control-label">CompAge:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="txt_cage" class="form-control input-sm" required="" type="number" placeholder="Complainant Age" />
                                    </div> 
                                </div>
                           
                                <div class="form-group">
                                    <div class="col-md-2"  style="width:110px;">
                                        <label class="control-label">CompAddress:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                        <input name="txt_cadd" class="form-control input-sm" required="" type="text" placeholder="Complainant Address"/>
                                    </div> 

                                    <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">CompContact:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                        <input name="txt_ccontact" class="form-control input-sm" required="" type="number" placeholder="Complainant Contact:"/>
                                    </div> 

                                </div> 

                                <div class="form-group">
                                    <div class="col-md-2"  style="width:110px;">
                                        <label class="control-label">Respondent:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                        <input name="txt_pname" class="form-control input-sm" required="" type="text" placeholder="Respondent Fullname"/>
                                    </div> 

                                    <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">Complainant Gender:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="txt_compgen"required=""  class="form-control input-sm">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
											
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">RespAddress:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                        <input name="txt_padd" class="form-control input-sm" required="" type="text" placeholder="Respondent Address:"/>
                                    </div> 

                                    <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">Headchief:</label>
                                    </div>  
                                    <div class="col-sm-4" >
                                        <input name="txt_headchief" class="form-control input-sm" required="" type="text" placeholder="HeadChief:"/>
                                    </div> 

                                </div> 

                                <div class="form-group">
                                    <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">Accusation:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <textarea name="txt_complaint" class="form-control input-sm" required="" type="text" placeholder="Accusation:"></textarea>
                                    </div>

                                   
									
									<div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">Respondent Gender:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="respgen" required="" class="form-control input-sm">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
											
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">Case Type:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="ddl_stat" required="" class="form-control input-sm">
                                            <option >Civil</option>
                                            <option >Criminal</option>
											<option >Others</option>
                                        </select>
                                    </div>
									
									

                                    <div class="col-sm-2" style="width:110px;">
                                        <label class="control-label">Incidence:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="txt_location" required="" class="form-control input-sm" type="text" placeholder="Location of Incidence"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Blotter"/>
						
						
                    </div>
                </div>
              </div>
              </form>
            </div>
			
			