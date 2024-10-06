<!-- blotter approval request of user of staff -->

<!DOCTYPE html>
<html>
   
   
   <!-- admin approve permit-->
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
        <?php include('../headerblotter.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Blotter Approval
                    </h1>
                    
                </section>

                                <form method="post">
                                
                              
<!--zone leader
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
                                                 <th>Date Recorded</th>
												<th>Time Recorded</th>
                                                <th>Complainant</th>
												<th>Respondent by Complain</th>
                                                <th>Accusation</th>
                                                <th>Head Chief</th>
                                                <th style="width: 25% !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "select * from tblblotter where status = 'New'");
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
                                                    <td>
                                                        <button class="btn btn-success btn-sm" data-target="#approveModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approve</button>
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
                   
</form>

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