<!-- ========================= MODAL ======================= -->
<!-- This File is searching for case no# -->
            <div id="addModal" class="modal fade">
            <form class="form-horizontal" method="post">
              <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                    <div class="modal-header">
						
		
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Summon</h4>
						
						
                    </div>
                    
                                                
                                               
                        <div class="row">
                           

                                  <div class="form-group">
								
								
								  <div class="col-md-2"  style="width:110px; margin-left:30px;">
                                        <label class="control-label" style="margin-top:20px;">Case No# :</label>
                                    </div>  
                                    <div class="col-sm-4" >
									<label class="control-label"></label>
									  <input type="number" class="form-control" id="brgycaseno" autocomplete="off" required="" placeholder="Search...">
                                    <label id="search" style="color:#CC0000;" ></label>
								  </div> 
								  
							
								  

                                   
                                </div>





<div id="searchresult"><div>

<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


<script type="text/javascript">

   $(document).ready(function(){
   
   
   $("#brgycaseno").keyup(function(){
   
      var input = $(this).val();
	  //alert(input);
	  
	  if(input !="")
	  {
		  
		  $.ajax({
			  
			 url:"livesearch.php",
			 method:"POST",
			 data:{input:input},
			 
			 success:function(data)
			 {
				 
				 $("#searchresult").html(data);
				 $("#searchresult").css("display","block");
				 
			 }
			 
			  
		  });
		  
	  }else
		  
		  {
			  
			  $("#searchresult").css("display","none");
			  
		  }
	  
	  
   });
   });



</script>

								
								</div>
								
								
                            </div>
                        </div>
						
				
                    <div class="modal-footer">
					
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="btn_add1" name="btn_add1"value="Set Summon"/>
						
						
                    </div>
                </div>
              </div>
              </form>
            </div>
		
<script type="text/javascript">
    $(document).ready(function() {
 
        var timeOut = null; // this used for hold few seconds to made ajax request
 
        
 
        //when button is clicked
        $('#brgycaseno').keyup(function(e){
 
            // when press the following key we need not to make any ajax request, you can customize it with your own way
            switch(e.keyCode)
            {
                //case 8:   //backspace
                case 9:     //tab
                case 13:    //enter
                case 16:    //shift
                case 17:    //ctrl
                case 18:    //alt
                case 19:    //pause/break
                case 20:    //caps lock
                case 27:    //escape
                case 33:    //page up
                case 34:    //page down
                case 35:    //end
                case 36:    //home
                case 37:    //left arrow
                case 38:    //up arrow
                case 39:    //right arrow
                case 40:    //down arrow
                case 45:    //insert
                //case 46:  //delete
                    return;
            }
            if (timeOut != null)
                clearTimeout(timeOut);
            timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
            $('#search').html(loading_html); // adding the loading text or image
        });
  });
function is_available(){
    //get the brgycaseno
    var brgycaseno = $('#brgycaseno').val();
 
    //make the ajax request to check is brgycaseno available or not
    $.post("check_username.php", { brgycaseno: brgycaseno },
    function(result)
    {
        console.log(result);
        if(result != 0)
        {
            $('#search').html('Not Available');
            document.getElementById("btn_add1").disabled = true;
        }
        else
        {
            $('#search').html('<span style="color:#006600;">Available</span>');
            document.getElementById("btn_add1").disabled = false;
        }
    });
 
}
</script>