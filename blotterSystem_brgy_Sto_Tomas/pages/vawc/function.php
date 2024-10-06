<!-- Bridge of the php to database -->

<?php
if(isset($_POST['btn_add'])){
    
 
	
	$ddl_resident = $_POST['ddl_resident'];
	$txt_cname = $_POST['txt_cname'];
    $txt_cage = $_POST['txt_cage'];
    $txt_cadd = $_POST['txt_cadd'];
    $txt_ccontact = $_POST['txt_ccontact'];
    $txt_pname = $_POST['txt_pname'];
    $txt_compgen = $_POST['txt_compgen'];
    $txt_padd = $_POST['txt_padd'];
    $txt_headchief = $_POST['txt_headchief'];
    $txt_complaint = $_POST['txt_complaint'];
    $txt_respgen = $_POST['respgen'];
    $ddl_stat = $_POST['ddl_stat'];
    $txt_location = $_POST['txt_location'];
    $year = date('Y');
    $date = date('Y-m-d');

   
	 if(isset($_SESSION['role'])){
        $action = 'Added File VAWC Request by '.$txt_headchief;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($_SESSION['role'] == "Administrator")
    {
    $query = mysqli_query($con,"INSERT INTO tblvawc (id,yearRecorded,dateRecorded,complainant,cage,caddress,ccontact,personToComplain,compgen,paddress,headchief,complaint,respgen,sStatus,locationOfIncidence,recordedby,status) 
        values ('$ddl_resident','$year', '$date', '$txt_cname', '$txt_cage', '$txt_cadd', '$txt_ccontact', '$txt_pname', '$txt_compgen', '$txt_padd', '$txt_headchief', '$txt_complaint', '$txt_respgen', '$ddl_stat', '$txt_location', '".$_SESSION['username']."','Approved')") or die('Error: ' . mysqli_error($con));
    }
    else
    {
      $query = mysqli_query($con,"INSERT INTO tblvawc (id,yearRecorded,dateRecorded,complainant,cage,caddress,ccontact,personToComplain,compgen,paddress,headchief,complaint,respgen,sStatus,locationOfIncidence,recordedby,status) 
        values ('$ddl_resident','$year', '$date', '$txt_cname', '$txt_cage', '$txt_cadd', '$txt_ccontact', '$txt_pname', '$txt_compgen', '$txt_padd', '$txt_headchief', '$txt_complaint', '$txt_respgen', '$ddl_stat', '$txt_location', '".$_SESSION['username']."','New')") or die('Error: ' . mysqli_error($con));
    }
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
}

if(isset($_POST['btn_req'])){
   $txt_cname = $_POST['txt_cname'];
    $txt_cage = $_POST['txt_cage'];
    $txt_cadd = $_POST['txt_cadd'];
    $txt_ccontact = $_POST['txt_ccontact'];
    $txt_pname = $_POST['txt_pname'];
    $txt_compgen = $_POST['txt_compgen'];
    $txt_padd = $_POST['txt_padd'];
    $txt_headchief = $_POST['txt_headchief'];
    $txt_complaint = $_POST['txt_complaint'];
    $txt_respgen = $_POST['respgen'];
    $ddl_stat = $_POST['ddl_stat'];
    $txt_location = $_POST['txt_location'];
    $year = date('Y');
    $date = date('Y-m-d');

    $reqquery = mysqli_query($con,"INSERT INTO tblvawc (id,yearRecorded,dateRecorded,complainant,cage,caddress,ccontact,personToComplain,compgen,paddress,headchief,complaint,respgen,sStatus,locationOfIncidence,recordedby,status) 
        values ('".$_SESSION['userid']."', '$year', '$date', '$txt_cname', '$txt_cage', '$txt_cadd', '$txt_ccontact', '$txt_pname', '$txt_compgen', '$txt_padd', '$txt_headchief', '$txt_complaint', '$txt_respgen', '$ddl_stat', '$txt_location', '".$_SESSION['username']."','New')") or die('Error: ' . mysqli_error($con));

    if($reqquery == true)
    {
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
}

if(isset($_POST['btn_approve']))
{
    $txt_id = $_POST['hidden_id'];

    $disapprove_query = mysqli_query($con,"UPDATE tblvawc set status = 'Approved'  where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));
 
 
 if(isset($_SESSION['role'])){
        $action = 'Approved File VAWC Request by user';
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
          }	
    if($disapprove_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}
if(isset($_POST['btn_disapprove']))
{
    $txt_id = $_POST['hidden_id'];

    $disapprove_query = mysqli_query($con,"UPDATE tblvawc set status = 'Disapproved'  where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));
 
 
 if(isset($_SESSION['role'])){
        $action = 'Disapproved File VAWC Request by user';
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
          }	
    if($disapprove_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_save']))
{
    
   $txt_id = $_POST['hidden_id'];
    $txt_edit_cname = $_POST['txt_edit_cname'];
    $txt_edit_cage = $_POST['txt_edit_cage'];
    $txt_edit_cadd = $_POST['txt_edit_cadd'];
    $txt_edit_ccontact = $_POST['txt_edit_ccontact'];

    $txt_edit_pname = $_POST['txt_edit_pname'];
    $txt_edit_compgen = $_POST['txt_edit_compgen'];
    $txt_edit_padd = $_POST['txt_edit_padd'];
    $txt_edit_headchief = $_POST['txt_edit_headchief'];

    $txt_edit_complaint = $_POST['txt_edit_complaint'];
    $txt_edit_respgen = $_POST['txt_edit_respgen'];
    $ddl_edit_stat = $_POST['ddl_edit_stat'];
    $txt_edit_location = $_POST['txt_edit_location'];

    $update_query = mysqli_query($con,"UPDATE tblvawc set complainant = '".$txt_edit_cname."', cage = '".$txt_edit_cage."', caddress= '".$txt_edit_cadd."', ccontact= '".$txt_edit_ccontact."', personToComplain = '".$txt_edit_pname."', compgen = '".$txt_edit_compgen."', paddress= '".$txt_edit_padd."', headchief = '".$txt_edit_headchief."', complaint = '".$txt_edit_complaint."', respgen= '".$txt_edit_respgen."', sStatus = '".$ddl_edit_stat."', locationOfIncidence= '".$txt_edit_location."'  where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update File VAWC Request by '.$txt_edit_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}



?>