<!DOCTYPE html>
<html>

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
                        Summon Blotter
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                      

								   <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Summon </button>  
                                      
									 
                             
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <form method="post">
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
                                                  
												<th>Brgy Case#</th>
												<th>Resolution Case#</th>
												
												
												
												<th>Date</th>
                                                <th>Time</th>
                                                <th>Complainant Name</th>
												<th>Status</th>
                                                
                                              
                                                <th style="width: 40px !important;">Action</th>
                                            </tr>
                                        </thead>
										
										<tbody>
										
                                            <?php

                                            if(!isset($_SESSION['staff']))
                                            {

                                                $squery = mysqli_query($con, "select * from tblsummon ORDER BY id DESC ");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                      
                                                        
														<td>'.$row['brgycaseno'].'</td>
														<td>'.$row['id'].'</td>
														
                                                        <td>'.$row['setdate'].'</td>
														<td>'.$row['settime'].'</td>
                                                        <td>'.$row['complainant'].'</td>
														<td>'.$row['settlement'].'</td>
														
                                                             
                                      
										 
										
                                    

                                      
                                                         
                                                   <td>
												   
												
											';
												 if($row['summonlevel'] == '1'){
                                                                echo '<button class="btn btn-primary btn-sm" data-target="#viewModal'.$row['id'].'" data-toggle="modal"><i aria-hidden="true"></i> Summon Level1 </button>';
                                                                }
                                                                else if($row['summonlevel'] == '2')
																{
                                                                echo ' <button class="btn btn-primary btn-sm" data-target="#viewModal1'.$row['id'].'" data-toggle="modal"><i aria-hidden="true"></i> Summon Level2</button>';
                                                                }
																 else if($row['summonlevel'] == '3')
																{
                                                                echo ' <button class="btn btn-primary btn-sm" data-target="#viewModal2'.$row['id'].'" data-toggle="modal"><i aria-hidden="true"></i> Summon Level3</button>';
                                                                }
																 else if($row['summonlevel'] == 'CertificateToFileAction')
																{
                                                                echo ' <button class="btn btn-danger dropdown-toggle" class="btn btn-primary btn-sm" data-target="#viewModal3'.$row['id'].'" data-toggle="modal"><i aria-hidden="true"></i> Certificate To File action</button>';
                                                                }
                                                            echo '
													
												   
                                                    <button class="btn btn-primary btn-sm" data-target="#managesummon'.$row['id'].'" data-toggle="modal"><i aria-hidden="true"></i> View</button>
													 
                                                     
													</td>
                                                                     
													   </tr>
                                                    ';
                                                     
													 include "managesummon.php";
													 include "view_modal.php";
													 include "view_modal1.php";
													 include "view_modal2.php";
													 include "view_modal3.php";
													 include "resolvesummonlevel1.php";
													 include "resolvesummonlevel3.php";
													 include "resolvesummonlevel4.php";
													 include "resolvesummonlevel5.php";
													 include "resolvesummonlevel6.php";
                                                     include "unresolvesummonlevel2.php";
													 include "approve_modal.php";
                                                     include "disapprove_modal.php";
                                                }
                                            }
                                            else{
                                               $squery = mysqli_query($con, "select * from tblsummon ORDER BY id DESC  ");
											   while($row = mysqli_fetch_array($squery))
                                                {
                                                     echo '
                                                    <tr>
                                                        
                                                     <td>'.$row['brgycaseno'].'</td>
														<td>'.$row['id'].'</td>
														<td>'.$row['summonlevel'].'</td>
                                                        <td>'.$row['setdate'].'</td>
														<td>'.$row['time'].'</td>
                                                        <td>'.$row['complainant'].'</td>
                                                        
                                                          
                                                     <td>
                                                  <button class="btn btn-primary btn-sm" data-target="#viewModal'.$row['id'].'" data-toggle="modal"><i aria-hidden="true"></i> Manage Summon </button></td>
                                                                                                             
														</tr>
                                                    ';

                                                  
													
													
                                                }
                                            }
                                            ?>
											
                                        </tbody>
                                       
                                    </table>
                                    <?php include "add_modal.php"; 
									
                                     
									  ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        
                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

           

            <?php include "function.php"; ?>


                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; ?>
		
		
		
<script type="text/javascript">
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],"aaSorting": []
            });
        });
    
</script>
    </body>
</html>