<!-- headbar of the it admin-->
  <?php

   echo  '<header class="header">
            <a href="#" class="logo">
                Brgy Sto Tomas 
                <img src="../../img/brgypic.png" style="height:100px; width:100px;"/>
                
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-left:100px;">
                                <i class="glyphicon glyphicon-user"></i><span>'.$_SESSION['role'].'<i class="caret"></i></span>
                            </a>
							
     	<body onload="initClock()" >
		<div class="datetime" class="dropdown-toggle" data-toggle="dropdown" style="margin-left:72px; margin-top:10px;" >
						
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
	</body>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    
                                    <p>
                                        '.$_SESSION['role'].'
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#editProfileModal">Change Account</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>'; ?>


         <div id="editProfileModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Account </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                        <?php
                        if($_SESSION['role'] == "Administrator"){
                            $user = mysqli_query($con,"SELECT * from tbluser where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            } 
                        }
                       
                       
                        else{
                            $user = mysqli_query($con,"SELECT * from tblresident where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            } 
                        }
                        ?>
                         
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="btn_saveeditProfile" name="btn_saveeditProfile" value="Save"/>
                    </div>
                </div>
              </div>
              </form>
            </div>


            <?php
            if(isset($_POST['btn_saveeditProfile'])){
                $username = $_POST['txt_username'];
                $password = $_POST['txt_password'];

                if($_SESSION['role'] == "Administrator"){
                    $updadmin = mysqli_query($con,"UPDATE tbluser set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updadmin == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
                
             
				else 
					{
                    $updstaff = mysqli_query($con,"UPDATE tblresident set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updstaff == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
				
            }

            ?>
			
			<script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";
		  
          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>