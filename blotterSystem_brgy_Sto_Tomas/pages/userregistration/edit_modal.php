<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Blotter Officer information</h4>
        </div>
        <div class="modal-body">';

        $edit_query = mysqli_query($con,"SELECT * from tblstaff where id = '".$row['id']."' ");
        $erow = mysqli_fetch_array($edit_query);

        echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" required=""  value="'.$erow['lname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" required="" value="'.$erow['fname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" required="" value="'.$erow['mname'].'"/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" style="margin-top:10px;">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm" type="date" required=""  value="'.$erow['bdate'].'"/> 
                        </div>


                       



                        <div class="form-group">
                            <label class="control-label">Email:</label>
                            <input name="txt_edit_uname" class="form-control input-sm" type="email" required=""  value="'.$erow['username'].'"/>
                        </div>

                    </div>


                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label" >Gender:</label>
                            <select required=""  name="ddl_edit_gender" required=""  class="form-control input-sm">
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                      
                        <div class="form-group">
                            <label class="control-label">Password:</label>
                            <input name="txt_edit_upass" class="form-control input-sm" type="password" value="'.$erow['password'].'"/>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
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