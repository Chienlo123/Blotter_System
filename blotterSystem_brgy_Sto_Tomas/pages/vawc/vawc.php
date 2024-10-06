<!-- all records of vawc is here -->

<!DOCTYPE html>
<html>
   
   
   <!-- admin approve vawc-->
    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../login.php"); 
    }
    else
    {
    ob_start();
    include('../head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
        <?php include('../headervawc.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage VAWC
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                    if(($_SESSION['role'] == "Administratorss") || isset($_SESSION['staff']))
                    {
                    ?>

                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i>File VAWC </button>  
                                        <?php 
                                            if(!isset($_SESSION['staff']))
                                            {
                                        ?>
                                        <?php
                                            }
                                        ?>
                                
                                    </div>                                
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-target="#approved" data-toggle="tab">Approved </a></li>
                                      
                                </ul>
                                <form method="post">
                                
                                <div class="tab-content">
                                    <div id="approved" class="tab-pane active in">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php 
                                                if(!isset($_SESSION['staff']))
                                                {
                                                ?>
                                                
                                                <?php
                                                    }
                                                ?>
                                                
                                                 <th>Date Recorded</th>
												<th>Time Recorded</th>
												<th>Brgy Case No.</th>
                                                <th>Complainant</th>
                                                <th>Respondent by Complain</th>
                                                <th>Accusation</th>
                                                <th>Respondent Gender</th>
                                                <th>Case Class</th>
												<th>Resolution</th>
                                                <th style="width: 40px !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            if(!isset($_SESSION['staff']))
                                            {

                                                $squery = mysqli_query($con, "select * from tblvawc where status = 'Approved' ORDER BY id DESC ");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                      
                                                       <td>'.$row['dateRecorded'].'</td>
														<td>'.$row['time'].'</td>
														<td>'.$row['id'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['personToComplain'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['respgen'].'</td>
                                                        
                                                        <td>'.$row['sStatus'].'</td>
														<td>'.$row['id'].'</td>
                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            else{
                                               $squery = mysqli_query($con, "select * from tblvawc where status = 'Approved' ORDER BY id DESC ");
											   while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        
                                                        <td>'.$row['dateRecorded'].'</td>
														<td>'.$row['time'].'</td>
														<td>'.$row['id'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['personToComplain'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['respgen'].'</td>
                                                        
                                                        <td>'.$row['sStatus'].'</td>
                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
									
									
									
<!-- admin disapprove vawc-->
                                    <div id="disapproved" class="tab-pane">
                                    <table id="table1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php 
                                                if(!isset($_SESSION['staff']))
                                                {
                                                ?>
                                               <?php
                                                    }
                                                ?>
                                                 <th>Date Recorded</th>
												<th>Time Recorded</th>
												<th>Brgy Case No.</th>
                                                <th>Complainant</th>
                                                <th>Respondent by Complain</th>
                                                <th>Accusation</th>
                                                <th>Respondent Gender</th>
												
                                                <th>Civil Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            if(!isset($_SESSION['staff']))
                                            {

                                                $squery = mysqli_query($con, "select * from tblvawc where status = 'Disapproved' ORDER BY id DESC ");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                       
                                                       <td>'.$row['dateRecorded'].'</td>
														<td>'.$row['time'].'</td>
														<td>'.$row['id'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['personToComplain'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['respgen'].'</td>
                                                        
                                                        <td>'.$row['sStatus'].'</td>
                                                        
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            else{
                                               $squery = mysqli_query($con, "select * from tblvawc where status = 'Disapproved' ORDER BY id DESC ");
											   while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        
                                                        <td>'.$row['dateRecorded'].'</td>
														<td>'.$row['time'].'</td>
														<td>'.$row['id'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['personToComplain'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['respgen'].'</td>
                                                        
                                                        <td>'.$row['sStatus'].'</td>
                                                      </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>


                                    </div>

                                    <?php include "../deleteModal.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "add_modal.php"; ?>

                            <?php include "function.php"; ?>


                    </div>   <!-- /.row -->

                    <?php
                    }
                    elseif($_SESSION['role'] == "Zone Leader")
                    {
                    ?>



<!--staff or user record-->
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                                               
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                
                                <form method="post">
                                
                               
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                <th>Resident</th>
                                                <th>Business Name wew</th>
                                                <th>Business Address</th>
                                                <th>Type of Business ss</th>
                                                <th style="width: 25% !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblpermit p left join tblresident r on r.id = p.residentid where status = 'New'") or die('Error: ' . mysqli_error($con));
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                                echo '
                                                <tr>
                                                    <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                    <td>'.$row['residentname'].'</td>
                                                    <td>'.$row['businessName'].'</td>
                                                    <td>'.$row['businessAddress'].'</td>
                                                    <td>'.$row['typeOfBusiness'].'</td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm" data-target="#approveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approve</button>
                                                        <button class="btn btn-danger btn-sm" data-target="#disapproveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Disapprove</button>
                                                    </td>
                                                </tr>
                                                ';
                                                include "approve_modal.php";
                                                include "disapprove_modal.php";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    

                                    <?php include "../deleteModal.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "function.php"; ?>


                    </div>   <!-- /.row -->
                    <?php 
                    }
                    else
                    {
                    ?>


<!-- User or staff display if pending -->
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">  
                                    <div style="padding:10px;">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reqModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Request VAWC</button>  
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">

                                <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-target="#new" data-toggle="tab">Pending VAWC</a></li>
                                     
                                </ul>

                                <form method="post">

                                <div class="tab-content">
                                    <div id="new" class="tab-pane active in">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                               <th>Date Recorded</th>
												<th>Time Recorded</th>
                                                <th>Complainant</th>
												<th>Respondent by Complain</th>
                                                <th>Accusation</th>
                                                <th>Head Chief</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblvawc where status = 'New' ORDER BY id DESC  ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery))
												
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                         <td>'.$row['dateRecorded'].'</td>
														<td>'.$row['time'].'</td>
														
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['personToComplain'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['headchief'].'</td>
                                                        
                                                        
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
<!-- user or staff approve-->
                                    <div id="approved" class="tab-pane">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                 <th>Date Recorded</th>
												<th>Time Recorded</th>
                                                <th>Complainant</th>
												<th>Respondent by Complain</th>
                                                <th>Accusation</th>
                                                <th>Head Chief</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $squery = mysqli_query($con, "SELECT * FROM tblvawc where status = 'Approved' ORDER BY id DESC ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery))
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                         <td>'.$row['dateRecorded'].'</td>
														<td>'.$row['time'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['personToComplain'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['headchief'].'</td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
<!-- user or staff disaprove-->
                                    <div id="disapproved" class="tab-pane">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                               <th>Date Recorded</th>
												<th>Time Recorded</th>
                                                <th>Complainant</th>
												<th>Respondent by Complain</th>
                                                <th>Accusation</th>
                                                <th>Head Chief</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $squery = mysqli_query($con, "SELECT * FROM tblvawc where status = 'Disapproved' ORDER BY id DESC  ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery))
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                       <td>'.$row['dateRecorded'].'</td>
														<td>'.$row['time'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        <td>'.$row['personToComplain'].'</td>
                                                        <td>'.$row['complaint'].'</td>
                                                        <td>'.$row['headchief'].'</td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>


                                    <?php include "req_modal.php";?>
                                    <?php include "function.php";?>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                    </div>   <!-- /.row -->

                    <?php
                    }
                    ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; ?>
<script type="text/javascript">
    <?php 
    if(!isset($_SESSION['staff']))
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,7 ] } ],"aaSorting": []
            });
            $("#table1").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    else
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 6 ] } ],"aaSorting": []
            });
            $("#table1").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 3 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    ?>
</script>
    </body>
</html>