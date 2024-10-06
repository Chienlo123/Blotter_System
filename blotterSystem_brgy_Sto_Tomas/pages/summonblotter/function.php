<!-- Bridge of the php to database -->
<?php
if(isset($_POST['btn_add1'])){
    
 
	
	$ddl_resident = $_POST['ddl_resident'];
	$txt_cname = $_POST['txt_cname'];
    $txt_brgycaseno = $_POST['txt_brgycaseno'];
    $txt_caddress = $_POST['txt_caddress'];
	$txt_paddress = $_POST['txt_paddress'];
    $txt_setdate = $_POST['txt_setdate'];
    $txt_pname = $_POST['txt_pname'];
	$txt_settlement = $_POST['txt_settlement'];
    
    
    $txt_headchief = $_POST['txt_headchief'];
    $txt_complaint = $_POST['txt_complaint'];
    $txt_summonlevel = $_POST['txt_summonlevel'];
	$txt_resolutioncase1 = $_POST['txt_resolutioncase1'];
	$txt_resolutioncase2 = $_POST['txt_resolutioncase2'];
	$txt_resolutioncase3 = $_POST['txt_resolutioncase3'];
	
    $txt_headchiefold = $_POST['txt_headchiefold'];
    $txt_settime = $_POST['txt_settime'];
    $year = date('Y');
    $date = date('Y-m-d');

   
	 if(isset($_SESSION['role'])){
        $action = 'Added Summon File Blotter Request by '.$txt_headchief;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($_SESSION['role'] == "Administrator")
    {
    $query = mysqli_query($con,"INSERT INTO tblsummon (residentid,yearRecorded,dateRecorded,complainant,brgycaseno,caddress,setdate,personToComplain,paddress,headchief,complaint,summonlevel,settlement,resolutioncase1,resolutioncase2,resolutioncase3,headchiefold,settime,recordedby,status) 
        values ('$ddl_resident','$year', '$date', '$txt_cname', '$txt_brgycaseno', '$txt_caddress', '$txt_setdate', '$txt_pname', '$txt_paddress', '$txt_headchief', '$txt_complaint', '$txt_summonlevel', '$txt_settlement', '$txt_resolutioncase1', '$txt_resolutioncase2', '$txt_resolutioncase3', '$txt_headchiefold', '$txt_settime', '".$_SESSION['username']."','Approved')") or die('Error: ' . mysqli_error($con));
    }
    else
    {
      $query = mysqli_query($con,"INSERT INTO tblsummon (residentid,yearRecorded,dateRecorded,complainant,brgycaseno,caddress,setdate,personToComplain,paddress,headchief,complaint,summonlevel,settlement,resolutioncase1,resolutioncase2,resolutioncase3,headchiefold,settime,recordedby,status) 
        values ('$ddl_resident','$year', '$date', '$txt_cname', '$txt_brgycaseno', '$txt_caddress', '$txt_setdate', '$txt_pname', '$txt_paddress', '$txt_headchief', '$txt_complaint', '$txt_summonlevel', '$txt_settlement', '$txt_resolutioncase1', '$txt_resolutioncase2', '$txt_resolutioncase3', '$txt_headchiefold', '$txt_settime', '".$_SESSION['username']."','summonnew')") or die('Error: ' . mysqli_error($con));
    }
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
}

if(isset($_POST['btn_req'])){
   $txt_cname = $_POST['txt_cname'];
    $txt_brgycaseno = $_POST['txt_brgycaseno'];
    $txt_caddress = $_POST['txt_caddress'];
    $txt_setdate = $_POST['txt_setdate'];
    $txt_pname = $_POST['txt_pname'];
	$txt_settlement = $_POST['txt_settlement'];
    
    $txt_paddress = $_POST['txt_paddress'];
    $txt_headchief = $_POST['txt_headchief'];
    $txt_complaint = $_POST['txt_complaint'];
    $txt_summonlevel = $_POST['txt_summonlevel'];
	$txt_resolutioncase1 = $_POST['txt_resolutioncase1'];
	$txt_resolutioncase2 = $_POST['txt_resolutioncase2'];
	
    $txt_headchiefold = $_POST['txt_headchiefold'];
    $txt_settime = $_POST['txt_settime'];
    $year = date('Y');
    $date = date('Y-m-d');

    $reqquery = mysqli_query($con,"INSERT INTO tblsummon (residentid,yearRecorded,dateRecorded,complainant,brgycaseno,caddress,setdate,personToComplain,paddress,headchief,complaint,summonlevel,settlement,resolutioncase1,resolutioncase2,resolutioncase3,headchiefold,settime,recordedby,status) 
        values ('".$_SESSION['userid']."', '$year', '$date', '$txt_cname', '$txt_brgycaseno', '$txt_caddress', '$txt_setdate', '$txt_pname', '$txt_paddress', '$txt_headchief', '$txt_complaint', '$txt_summonlevel', '$txt_settlement', '$txt_resolutioncase1', '$txt_resolutioncase2', '$txt_resolutioncase3', '$txt_headchiefold', '$txt_settime', '".$_SESSION['username']."','summonnew')") or die('Error: ' . mysqli_error($con));

    if($reqquery == true)
    {
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
}





if(isset($_POST['btn_save']))
{
    
   $txt_id = $_POST['hidden_id'];
    $txt_edit_cname = $_POST['txt_edit_cname'];
    $txt_edit_brgycaseno = $_POST['txt_edit_brgycaseno'];
    $txt_edit_caddress = $_POST['txt_edit_caddress'];
    $txt_edit_setdate = $_POST['txt_edit_setdate'];
	$txt_edit_settlement = $_POST['txt_edit_settlement'];

    $txt_edit_pname = $_POST['txt_edit_pname'];
    
    $txt_edit_paddress = $_POST['txt_edit_paddress'];
    $txt_edit_headchief = $_POST['txt_edit_headchief'];

    $txt_edit_complaint = $_POST['txt_edit_complaint'];
    $txt_edit_summonlevel = $_POST['txt_edit_summonlevel'];
	$txt_edit_resolutioncase1 = $_POST['txt_edit_resolutioncase1'];
	$txt_edit_resolutioncase2 = $_POST['txt_edit_resolutioncase2'];
	$txt_edit_resolutioncase3 = $_POST['txt_edit_resolutioncase3'];
	
    $txt_edit_headchiefold = $_POST['txt_edit_headchiefold'];
    $txt_edit_settime = $_POST['txt_edit_settime'];

    $update_query = mysqli_query($con,"UPDATE tblsummon set complainant = '".$txt_edit_cname."', brgycaseno = '".$txt_edit_brgycaseno."', caddress= '".$txt_edit_caddress."', setdate = '".$txt_edit_setdate."', personToComplain = '".$txt_edit_pname."', paddress= '".$txt_edit_paddress."', headchief = '".$txt_edit_headchief."', complaint = '".$txt_edit_complaint."', summonlevel= '".$txt_edit_summonlevel."', settlement= '".$txt_edit_settlement."', resolutioncase1= '".$txt_edit_resolutioncase1."', resolutioncase2= '".$txt_edit_resolutioncase2."', resolutioncase3= '".$txt_edit_resolutioncase3."', headchiefold = '".$txt_edit_headchiefold."', settime = '".$txt_edit_settime."'  where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Edit and Update summon Blotter Request by '.$txt_edit_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}



?>

