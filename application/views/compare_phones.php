<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ajax Fetch Data</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container" style="margin-top: 60px;">
	        <div class="row">
	            <div class="col-lg-12 col-md-12">
	            	<h2 class="text-center">Compare the Two phones</h2><br><br>
	            	<div class="row">
            			<div class="col-lg-6 col-md-12">
            				<!-- dropdown to select the comparing phone -->
            				<select name="phone2" id="phone2" class="form-control">
						        <option selected disabled>Choose the phone you want to compare with this phone</option>
						        <!-- print all the names of the phones stored in DB using get_phones() model function -->
								<?php foreach ($allphones as $row) : ?>
						        	<option><?php echo $row->name; ?></option>
						        <?php endforeach; ?>
						    </select>
						    </div>
						    <!-- button that gets the result from an AJAX request -->
						    <a name="compare"  class="btn btn-primary compare_phn" style="margin-right: 20px;">COMPARE</a>      
            			</div>
            			<div class="col-lg-6 col-md-12"></div>														
	            	</div>
	        	</div>
	        		<!-- print some main features of the selected phone already from firat page.. -->
		        	<div class="col-lg-6 col-md-12" style="margin-top: 40px;float: left;">
		        		<div class="card" style="width: 25rem;border: 1px solid; border-color: black;"><br>						
						  <center><div style="width:60%;height:80%;"><img style="width:40%;height:60%;" src="<?php echo base_url();?>assets/images/phones/<?php echo $phone->image1; ?>"></div></center>
						  <div class="card-body">
						    <h5 class="card-title text-center"><?php echo $phone->name; ?></h5><br>
						    <ul class="list-group">
							  <li class="list-group-item"><b>RAM</b> : <?php echo $phone->ram; ?></li>
							  <li class="list-group-item"><b>Internal Memory</b> : <?php echo $phone->internal; ?></li>
							  <li class="list-group-item"><b>Back Camera</b> : <?php echo $phone->cam_primary; ?></li>
							  <li class="list-group-item"><b>Front Camera</b> : <?php echo $phone->cam_secondary; ?></li>
							  <li class="list-group-item"><b>Display Size</b> : <?php echo $phone->display_size; ?></li>
							</ul>
						  </div>
						</div>
					</div>
					<!-- area to print the comparing features of the selected phone through the drop down via an AJAX request	 -->
	            	<div class="col-lg-6 col-md-12" style="margin-top: 40px;float:right"> 
	  					<div id="com_result"></div>
	            	</div>
	            	<!-- end the comparing area -->
	        	</div>
	    	</div>
		</div>
	</div>
<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script>
	// wait to start jQuery after page is fully loaded
    $(document).ready(function(){
    	// get the name of the phone from dropdown via the jQuery click function
        $(document).on('click', '.compare_phn', function(){  
        	// store the phone name in a variable called $com
       		var com = $('#phone2').val();
       		// start AJAX request
	       	$.ajax({
	       		// URL for the controller function that fetches and prints the data of the selected phone from dropdown list
	       	 	url : "<?php echo base_url() ?>Fetch/get_com_phone",
	       	 	// method of getting data is POST..not GET..
	       	 	method : "POST",
	       	 	// Data got through input are sent to the server
	       	 	data: {phone2: com},
	       	 	// if data is fetched successfully, this function will be executed
	       	 	success:function(data){
	       	 		// print the recieved data from server in the section called com_result in compare_phones view file
	       	 		$('#com_result').html(data);
	       	 	},
	       	 	// type of the data sent and received
	       	 	dataType: "text"  
	       	});
	       	// end of AJAX request
       	});
    });
    // end jQuery
</script>
</body>
</html>