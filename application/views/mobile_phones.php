<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ajax Fetch Data</title>
	<!-- load bootstrap CSS stored in assests/css folder -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<style type="text/css">
		#phone-img {
			width: 200px;
			height: 200px;
			margin: auto;
			padding: 20px;
		}
	</style>
</head>
<body>
	<main role="main">
	    <div class="container">            
	    	<div class="col-lg-12 col-md-12 col-sm-12">
	        	<div class="row">
	            	<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 40px">
	            		<div id="product_cards">		
            			<div class="row">  
            			<!-- start printing the data of allphones using a foreach loop -->
							<?php foreach ($allphones as $row) : ?>
								<!-- This part within the for loop will be printed again and again with the data rows in the database -->
								<div class="col-lg-3 col-md-12 col-sm-12" id="phone-card">
									<div class="card" style="margin-bottom: 20px;">
										<img class="card-img-top" id="phone-img" src="<?php echo base_url();?>assets/images/phones/<?php echo $row->image1; ?>" alt="Card image cap">
								 		<div class="card-body">
								 			<!-- ID of each phone should be passed via the anchor link to get the relevant phone data from the model function called get_a_phone() -->
								    		<a style="font-size: 16px;" href="<?php echo base_url();?>fetch/phone/<?php echo $row->phone_id;?>"><p class="card-title text-center"><?php echo $row->name; ?></p></a>
								    		<center>
								    			<span class="badge badge-info"><h6 class="text-center phone-price">Rs : <?php echo $row->price; ?></h6></span>
								    		</center>
								    		<br>
								    	</div>
								    </div>						
								</div>
							<?php endforeach; ?>
							<!-- end foreach loop -->
							</div>
						</div>																					
	            	</div>
	    		</div>
			</div>
		</div>	
	</main>
<!-- load jQuery stored in assests/js folder -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<!-- load bootstrap JS stored in assests/js folder -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</body>
</html>