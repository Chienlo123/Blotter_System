<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!-- Sidebar of every user of the system-->

<?php

	echo '
	<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <div class="pull-left info" style= margin-top:80px;>
                            <h4>Blotter System '.$_SESSION['role'].'</h4>

                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    ';
					
					
						
						
						
					if($_SESSION['role'] == "Administrator"){
                        echo '
                    <ul class="sidebar-menu">
					
					
                         
					
					         <li>
                                <a href="../admindashboard/dashboard.php">
                                    <i  class="fa-solid fa-table-columns"></i> <span>Dashboard</span>
									
                                </a>
                            </li>
								 
           
                             <li>
                                <a href="../blotterofficer/blotterofficer.php">
                                    <i class="fa fa-user"></i> <span>Manage Blotter Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="../vawcofficer/vawcofficer.php">
                                    <i class="fa fa-user"></i> <span>Manage VAWC Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="../userregistration/user.php">
                                    <i class="fa fa-users"></i> <span>Manage User</span>
                                </a>
                            </li>
							  
							  
							    <li>
                                <a href="../admingraph/report.php">
                                    <i class="fa-solid fa-chart-pie"></i> <span>Info Graphics</span>
									
									
                                </a>
                            </li>	
                          						
                            <li>
                                <a href="../logs/logs.php">
                                    <i class="fa fa-history"></i> <span>Logs</span>
                                </a>
                            </li>               
                            

                           						
                            
                    </ul>';
                    } elseif($_SESSION['role'] == "Administrators"){
                        echo '
                        <ul class="sidebar-menu">
						
						     <li>
                                <a href="../blotterdashboard/dashboard.php">
                                    <i  class="fa-solid fa-table-columns"></i> <span>Dashboard</span>
									
                                </a>
                            </li>
							
							
						   <li>
                                <a href="../officials/officials.php">
                                    <i class="fa fa-user"></i> <span>Barangay Officials</span>
                                </a>
                            </li>
						
                          	<li>
                               <a href="../blotter/blotter.php">
                                    <i class="fa-solid fa-arrow-right"></i> <span>Blotter Records</span>
									
                                </a>
                            </li>

                             <li>
                                <a href="../blotter/blotterapproval.php">
                                <i class="fa-solid fa-thumbs-up" ></i> <span>Blotter Approval</span>
                                </a>
								
						    </li>
								
							<li>
                                <a href="../summonblotter/summonblotter.php">
                                 <i class="fa-solid fa-book"></i> <span>Summon Records</span>
                                </a>
						  <li>
								  
					      	<li>
                                <a href="../blotterofficergraph/report.php">
                                 <i class="fa-solid fa-chart-pie"></i> <span>Info Graphics</span>
                                </a>
                           </li>
						   	<li>
                                <a href="../blotterofficergraph(1)/report.php">
                                 <i class="fa-solid fa-chart-pie"></i> <span>Info Graphics</span>
                                </a>
                           </li>
						  
							  <li>
                                <a href="../filterblotterrecord/index.php">
                                    <i class="fa fa-history"></i> <span>Filter Blotter Records</span>
                                </a>
                            </li>     
							
                           						
                        </ul>';
                    }elseif($_SESSION['role'] == "Administratorss"){
                        echo '
                        <ul class="sidebar-menu">
						   <li>
                                <a href="../vawcdashboard/dashboard.php">
                                    <i  class="fa-solid fa-table-columns"></i> <span>Dashboard</span>
									
                                </a>
                            </li>
						
                          	<li>
                               <a href="../vawc/vawc.php">
                                    <i class="fa-solid fa-arrow-right"></i> <span>VAWC Records</span>
									
                                </a>
                            </li>
							<li>
                                <a href="../vawc/vawcapproval.php">
                                    <i class="fa-solid fa-thumbs-up" ></i> <span>VAWC Approval</span>
                                </a>
                            </li>  
							
							
							  <li>
                                <a href="../vawcofficergraph/report.php">
                                    <i class="fa-solid fa-chart-pie"></i> <span>Info Graphics</span>
									
									
                                </a>
                            </li>
                             

                             						
                        </ul>';
                    }elseif($_SESSION['role']){
                        echo '
                        <ul class="sidebar-menu">
						
								<li>
                               <a href="../blotter/blotter.php">
                                    <i class="fa-solid fa-arrow-right"></i> <span>File Blotter</span>
									
                                </a>
                            </li>       
                           <li>
                                
								<a href="../vawc/vawc.php">
                                    <i class="fa-solid fa-arrow-right"></i> <span>File VAWC</span>
									
                                </a>
                            </li>  
                            
                        </ul>';
                    }
					
                echo '
                </section>
                <!-- /.sidebar -->
            </aside>
	';
?>