<?php

	include 'bd.php';

	$name = $_POST["name"];
	$email = $_POST["email"];
	$organization = "";
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	
	$totalMessage = "Name: " . $name . " email: " . $email . " subject: " . $subject . " message: " . $message;
	
	$totalMessage = wordwrap($totalMessage,70); 

	include 'getQuantity.php';

	$quantity++;
	
	if ($name != "") {

    	$sql = "INSERT INTO contact ( id , username , email , organization , subject , message ) VALUES ('" . $quantity . "','" . $name . "','" . $email . "','" . $organization . "','" . $subject . "','" . $message . "')";

		mysql_query($sql) or die(mysql_error());
		
		mail("info@imathresearch.com","Message",$totalMessage);
		
	}

	mysql_close($link);


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>imath Research S.L.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li><a href="http://app.imathresearch.com/iMathConnect">Login iMathCloud</a></li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.html"><img src="img/logos/logo.png" alt="iMath Research S.L."></a></li>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="imathcloud.html">iMath Cloud</a>
						</li>
						<li>
							<a href="services.html">Consultancy</a></li>
						</li>
						<li>
							<a href="team.html">Team</a>
						</li>
						<li class="active">
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
        
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	        	<div class="row">
	        		<div class="col-sm-7">
	        			<!-- Map -->
	        			<div id="contact-us-map">
							<iframe width='100%' height='310px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/ipinyol.k15076lb/attribution,zoompan,zoomwheel,geocoder.html?access_token=pk.eyJ1IjoiaXBpbnlvbCIsImEiOiJNME1nNXNvIn0.Xl0LMBccMvl47VLyrZmuuQ'></iframe>
	        			</div>
	        			<!-- End Map -->
	        			<!-- Contact Info -->
	        			<p class="contact-us-details">
	        				<b>Address:</b> Edifici Eureka, Campus UAB, 08193 - Bellaterra (Barcelona), SPAIN<br/>
	        				<b>Phone:</b>(+34)935868743<br/>
	        				<b>Email:</b> <a href="mailto:info@imathresearch.com">info@imathresearch.com</a>
	        			</p>
	        			<!-- End Contact Info -->
	        		</div>
	        		<div class="col-sm-5">
	        			<!-- Contact Form -->
	        			<h3>Send Us a Message</h3>
	        			<div class="contact-form-wrapper">
		        			<form method="post" class="form-horizontal" role="form">
		        				 <div class="form-group">
		        				 	<label for="Name" class="col-sm-3 control-label"><b>Your name</b></label>
		        				 	<div class="col-sm-9">
										<input class="form-control" id="Name" name="name" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-email" class="col-sm-3 control-label"><b>Your Email</b></label>
									<div class="col-sm-9">
										<input class="form-control" id="contact-email" name="email" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="col-sm-3 control-label"><b>Select Topic</b></label>
									<div class="col-sm-9">
										<select class="form-control" id="prependedInput" name="subject">
											<option>Please select topic...</option>
											<option>iMath Cloud</option>
											<option>Services</option>
											<option>General</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="col-sm-3 control-label"><b>Message</b></label>
									<div class="col-sm-9">
										<textarea class="form-control" name="message" rows="5" id="contact-message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn pull-right">Send</button>
									</div>
								</div>
		        			</form>
		        		</div>
		        		<!-- End Contact Info -->
	        		</div>
	        	</div>
	    	</div>
	    </div>
        
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> Edifici Eureka, Campus UAB, 08193 - Bellaterra (Barcelona), SPAIN<br/>
	        				<b>Phone:</b>(+34)935868743<br/>
	        				<b>Email:</b> <a href="mailto:info@imathresearch.com">info@imathresearch.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="https://twitter.com/IMATHRESEARCH" class="twitter"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2014 iMath Research S.L. All rights reserved.
		    			<a href="terms-of-use.html"> Privacy Policy & Terms Of Use </a>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>
