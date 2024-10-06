<!-- Print form for signature  -->
<?php 
if(isset($_POST['signaturesubmit'])){ 
    $signature = $_POST['signature'];
    $signatureFileName = uniqid().'.png';
    $signature = str_replace('data:image/png;base64,', '', $signature);
    $signature = str_replace(' ', '+', $signature);
    $data = base64_decode($signature);
    $file = 'signatures/'.$signatureFileName;
    file_put_contents($file, $data);
    
} 
?>

<!DOCTYPE html>
<html id="gg">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
	
	#canvasDiv{
            position: relative;
            border: 2px dashed grey;
            height:100px;
			width:150px;
			margin-left:-230px;
			margin-top:-20px;
        }
</style>
    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../login.php"); 
    }
    else
    {
    ob_start();
    $_SESSION['clr'] = $_GET['gg'];
    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
       
        <div class="col-xs-12 col-sm-6 col-md-8" style=" " >
            <div style=" background: black;" >
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:10px; padding-top:150px;padding-bottom:100px; border: 2px solid black;">
                    <center><image src="../../img/brgypic.jpg" style="width:90%;height:164px; margin-top:-50px;"/></center>
                    <div style="margin-top:20px; text-align: center; word-wrap: break-word;">
                        <?php
                            $qry = mysqli_query($con,"SELECT * from tblofficial");
                            while($row=mysqli_fetch_array($qry)){
                                if($row['sPosition'] == "Captain"){
                                    echo '
                                    <p>
                                    <b>'.strtoupper($row['completeName']).'</b><br>
                                    <span style="font-size:12px;">PUNONG BARANGAY</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Ordinance)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Sports / Law / Ordinance</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Public Safety)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Public Safety / Peace and Order</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Tourism)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Culture & Arts / Tourism / Womens Sector</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Budget & Finance)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Budget & Finance / Electrification</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Agriculture)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Agriculture / Livelihood / Farmers Sector / PWD Sector</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Education)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Health & Sanitation / Education</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Infrastracture)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Infrastracture / Labor Sector/ Environment / Beautification</span>
                                    </p>
                                    ';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">
                    <div class="pull-left" style="font-size: 16px; margin-left: 100px;"><b><center>
                        REPUBLIKA NG PILIPINAS<br>
                        LALAWIGAN NG LAGUNA<br>
                        BAYAN NG CALAUAN<br>
                        BARANGAY STO. TOMAS<br>
						TANGGAPAN NG SANGGUNIANG BARANGAY<br>
						Usaping Barangay Blg:Blotter:2141 Paghaharap:<br>
                        reklamo:  <br></b></center><br>
                    </div>
                    
                    <div class="col-xs-12 col-md-12">
                        <p style="text-indent:40px; margin-left:-55px; font-size: 20px; font-size:bold;">Mayreklamo</p>
						 
					
						 
						 

						
						
						<?php
						$qry=mysqli_query($con,"SELECT * from tblblotter where id = '".$_GET['admin']."' and complainant = '".$_GET['gg']."' ");
                            
                        
                        
						   while($row = mysqli_fetch_array($qry)){
                                
                                echo '
                                <p><b>
                                    NAME: <u>'.strtoupper($row['complainant']).'</u><br>
									ADDRESS: <u>'.strtoupper($row['caddress']).'</u><br>
                                    
                                </b></p>
                                ';
                            }
                        ?>
						</div>  
						 <p class="text-center" style="font-size: 18px; font-size:bold; color:red;">NOTE:Kasama Magulang pag Minor ang Inirereklamo/Nagrereklamo<br></p><br>
                         
					<div class="col-xs-12 col-md-12">
                        <p style="text-indent:40px; margin-left:-55px; font-size: 20px; font-size:bold;">Inirereklamo</p>
						 
						 	<?php
						$qry=mysqli_query($con,"SELECT * from tblblotter where id = '".$_GET['admin']."' and complainant = '".$_GET['gg']."' ");
                            
                        
                        
						   while($row = mysqli_fetch_array($qry)){
                                
                                echo '
                                <p><b>
                                    NAME: <u>'.strtoupper($row['personToComplain']).'</u><br>
									ADDRESS: <u>'.strtoupper($row['paddress']).'</u><br>
                                    
                                </b></p>
                                ';
                            }
                        ?>
					</div>  

                        <p style="text-indent:40px;text-align: justify;">Sa pamamagitan nito ikaw/kayo ay tinatawag upang personal na humarap sa amin/akin sa
						

						  sa Pamahalaang Pambarangay ng Sto. Tomas Calauan, Laguna, upang sagutin ang nasabing sumbong na idinulog sa aming tanggapan.</p>

                       <p style=" font-size:bold; color:red;">PAALALA:</p><p>Ang hindi po ninyo pagtugon sa aming patawag, kayo po ay hindi mabibigyan ng anumang dokumentong
					   pangbarangay tulad ng Barangay Clearance.</p>
					   
					   <p style="text-indent:40px;text-align: justify;">Inaasahan po namin na hindi ninyo ipagsasawalang bahala ang aming paanyaya.</p>
                    
					
					
					<div class="col-md-5 col-xs-4" style="float:right;margin-top: 30px; margin-bottom:50px;">
                        <div style="height:100px; width:140px;">
						
						  <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <?php echo isset($msg)?$msg:''; ?>
                
                <hr>
                <div id="canvasDiv">
				
				
				</div>
				<p style=" margin-left:-185px;">Respondent</p>
                <br>
			
			</div>
            <form id="signatureform" action="" style="display:none" method="post">
                <input type="hidden" id="signature" name="signature">
                <input type="hidden" name="signaturesubmit" value="1">
            </form>
        </div>
    </div>
						
                            <center><span style="text-align: center; line-height: 160px;">Signature</span></center>
                        </div>
                        
                    </div>
                    <div class="col-md-5 col-xs-4" style="float:right;margin-top: 30px; margin-bottom:50px;">
                        <div style="height:100px; width:140px; border: 1px solid black; border: 1px solid black; margin-top:40px; margin-left:-70px;">
                            <center><span style="text-align: center; line-height: 160px;">Signature</span></center>
                        </div>
                        <p style=" margin-left:-40px; ">Complainant</p>
                    </div>
                </div>
                
                <div class="col-xs-3 pull-right" style="margin-top:-40px; left:50px;">
               <button class="btn btn-primary noprint" id="printpagebutton"  onclick="PrintElem('#clearance')">Print</button>
                </div>
            </div>
        </div>
    
    </body>
    <?php
    }
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body class="skin-black" >');
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'visible';
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
	
	<script>
    $(document).ready(() => {
        var canvasDiv = document.getElementById('canvasDiv');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        canvasDiv.appendChild(canvas);
        $("#canvas").attr('height', $("#canvasDiv").outerHeight());
        $("#canvas").attr('width', $("#canvasDiv").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        
        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });

        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });

        $('#canvas').mouseup(function(e) {
            paint = false;
        });

        $('#canvas').mouseleave(function(e) {
            paint = false;
        });

        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;

        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);
        }

        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];
        });

        $(document).on('click', '#btn-save', function() {
            var mycanvas = document.getElementById('canvas');
            var img = mycanvas.toDataURL("image/png");
            anchor = $("#signature");
            anchor.val(img);
            $("#signatureform").submit();
        });

        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0
        };
        var lastPos = mousePos;

        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchmove", function(e) {

            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);



        // Get the position of a touch relative to the canvas
        function getTouchPos(canvasDiv, touchEvent) {
            var rect = canvasDiv.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
            };
        }


        var elem = document.getElementById("canvas");

        var defaultPrevent = function(e) {
            e.preventDefault();
        }
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);


        function redraw() {
            //
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {
                    context.moveTo(clickX[i - 1], clickY[i - 1]);
                } else {
                    context.moveTo(clickX[i] - 1, clickY[i]);
                }
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }
    })

</script>
</html>

