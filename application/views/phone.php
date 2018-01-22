<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ajax Fetch Data</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		#phone-display {
			width: 350px;
			height: 400px;
			margin: auto;
		}
	</style>
</head>
<body>
	<main role="main" class="container" style="margin-bottom: 60px;">
	    <div class="container">            
	        <div class="row">
	            <div class="col-lg-12 col-md-12">
	            	<!-- print the data in left side container -->
	            	<div class="col-lg-4 col-md-12" style="margin-top: 60px;float: left;">
						<div id="spec-brief">
							<img src="<?php echo base_url();?>assets/images/phones/<?php echo $row->image1; ?>" id="phone-display">
							<div><br>
	            				<ul class="list-group">
	            					<li class="list-group-item text-center"><b style="font-size: 24px;color: #0C5997;"> Price : Rs. <?php echo $row->price; ?></b></li>
						  			<li class="list-group-item"><a style="text-decoration: none;font-family: 'Oswald', sans-serif;" href="<?php echo base_url(); ?>fetch/compare_phones/<?php echo $row->phone_id; ?>"><button type="button" class="btn btn-info btn-block">Compare</button></a></li>
						  			<li class="list-group-item"><a style="text-decoration: none;font-family: 'Oswald', sans-serif;" href="<?php echo base_url(); ?>fetch"><button type="button" class="btn btn-outline-danger btn-block">Back</button></a></li>
						  		</ul>
							</div>
						</div>
	            	</div>
	            	<!-- print the data in right side container -->
	            	<div class="col-lg-8 col-md-12 col-sm-12" style="float: right;margin-top: 60px">
	            		<!-- print the main features -->
	            		<h3 id="phone-name"><?php echo $row->name; ?></h3>
	            		<br>
	            		<div class="row">
							<div class="col-lg-3 col-md-12 col-sm-12" id="prod-card">
								<div class="card">									
								 	<div class="card-body">
								 	<center><i class="fa fa-camera fa-3x" aria-hidden="true"></i></center><br>
								    <h5 class="card-title text-center">CAMERA</h5><br>	
								   	<h6 class="card-title text-center"><?php echo $row->cam_primary; ?></h6>				
								  	</div>
								</div>								
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12" id="prod-card">
								<div class="card">									
								 	<div class="card-body">
								 	<center><i class="fa fa-bars fa-3x" aria-hidden="true"></i></center><br>
								    <h5 class="card-title text-center">RAM</h5><br>	
								   	<h6 class="card-title text-center"><?php echo $row->ram; ?></h6>				
								  	</div>
								</div>								
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12" id="prod-card">
								<div class="card">									
								 	<div class="card-body">
								 	<center><i class="fa fa-battery-half fa-3x" aria-hidden="true"></i></center><br>
								    <h5 class="card-title text-center">BATTERY</h5><br>	
								   	<h6 class="card-title text-center"><?php echo $row->battery; ?></h6>				
								  	</div>
								</div>								
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12" id="prod-card">
								<div class="card">									
								 	<div class="card-body">
								 	<center><i class="fa fa-desktop fa-3x" aria-hidden="true"></i></center><br>
								    <h5 class="card-title text-center">DISPLAY</h5><br>	
								   	<h6 class="card-title text-center"><?php echo $row->display_size; ?></h6>				
								  	</div>
								</div>								
							</div>																					
						</div>
						<br>
						<!-- print the other features using a table -->
	            		<table class="table table-bordered">
	            			<tr>
	            				<th>Launch</th>
	            				<td>Announced Time</td>
	            				<td><?php echo $row->released_time; ?></td>
	            			</tr>
	            			<tr>
	            				<th rowspan="2">Body</th>
	            				<td>Dimensions</td>
	            				<td><?php echo $row->dimension; ?></td>
	            			</tr>
	            			<tr>
	            				<td>SIM</td>
	            				<td><?php echo $row->sim; ?></td>
	            			</tr>
	            			<tr>
	            				<th rowspan="3">Display</th>
	            				<td>Type</td>
	            				<td><?php echo $row->display_type; ?></td>
	            			</tr>
	            			<tr>
	            				<td>Size</td>
	            				<td><?php echo $row->display_size; ?></td>
	            			</tr>
	            			<tr>
	            				<td>Resolution</td>
	            				<td><?php echo $row->resolution; ?></td>
	            			</tr>
	            			<tr>
	            				<th rowspan="4">Platform</th>
	            				<td>OS</td>
	            				<td><?php echo $row->os; ?></td>
	            			</tr>
	            			<tr>
	            				<td>Chipset</td>
	            				<td><?php echo $row->chipset; ?></td>
	            			</tr>
	            			<tr>
	            				<td>CPU</td>
	            				<td><?php echo $row->cpu; ?></td>
	            			</tr>	
	            			<tr>
	            				<td>GPU</td>
	            				<td><?php echo $row->gpu; ?></td>
	            			</tr>
	            			<tr>
	            				<th rowspan="2">Memory</th>
	            				<td>Card Slot</td>
	            				<td><?php echo $row->cardslot; ?></td>
	            			</tr>
	            			<tr>
	            				<td>Internal</td>
	            				<td><?php echo $row->internal; ?></td>
	            			</tr>
	            			<tr>
	            				<th rowspan="2">Camera</th>
	            				<td>Primary</td>
	            				<td><?php echo $row->cam_primary; ?></td>
	            			</tr>
	            			<tr>
	            				<td>Secondary</td>
	            				<td><?php echo $row->cam_secondary; ?></td>
	            			</tr>	            				            				            			        
	            			<tr>
	            				<th>Battery</th>
	            				<td>Capacity</td>
	            				<td><?php echo $row->battery; ?></td>
	            			</tr>				
	            		</table>
	            	</div>
	            </div>
	        </div>
	    </div>
	</main>
<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</body>
</html>