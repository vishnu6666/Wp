<?php
/**
/* Template Name: Cast calculation Page 
*
*
*	@package WordPress
*/
get_header(); ?>

<?php
if (!empty($_POST)) {
	global $wpdb;
	$table = 'cost_calculator';
	$data = array(
		'name'    		 	 => $_POST['Name'],
		'email'    		 	 => $_POST['Email']
	);

	$format = array(
		'%s','%s','%s','%s','%s','%s','%s','%s'
	);
	$success=$wpdb->insert( $table, $data, $format );
	if($success){
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';

		echo '<h3><center>Your request successfully send to Magic Technolabs ! Our Staff will contact you!</center></h3>' ; 
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
	}
}else{ ?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

	<img src="http://localhost/magictechnolabs/wp-content/uploads/2019/04/Android-Development.jpg">
	<div class="container">

		<br><h2><center>Calculate Cost For Developing An App</center></h2></br>
		<h4><p class="heading_calc">Select the items which best describe your app and the features you require in your application</p></h4>

		<form action="" method="POST">
			<hr><div class="ic-devcost-choose-radio">
				<h4><p class="heading_calc">Submit Your Details</p></h4><br>
				<div class="row">
					<div class="col-xs-12 col-sm-6 form-group">
						<input type="text" class="form-control" id="ic-name" name="Name" required="">
						<span class="form-highlight"></span>
						<span class="form-bar"></span>
						<label class="float-label" for="ic-name">Name</label>
					</div>
					<div class="col-xs-12 col-sm-6 form-group">
						<input type="email" id="ic-email" class="form-control" name="Email" required="">
						<span class="form-highlight"></span>
						<span class="form-bar"></span>
						<label class="float-label" for="ic-email">Email</label>
					</div>
				</div>
				<br><center>
					<div class="col-xs-12 col-sm-6 form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div></center><br>
				</div>
			</form>
	<?php }  ?>
<?php get_footer(); ?>

