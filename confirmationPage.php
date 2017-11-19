<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="mainCS.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="jquery/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top"  class="navbar navbar-light" style="background-color:#292f38;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/akofena.jpg" id="logoImg" style="display:inline" >Akofena International Hotel</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html" >Home</a></li>
                <li><a href="index.html">Services</a></li>
              <li><a href="bookRoom.html" class="active">Make a Booking</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
        </div>
       </nav>


	<?php

	$link = mysqli_connect("localhost", "root", "", "bookHotel");

	if (!$link) {
		 echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	    
	}else{

	echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
	echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

	}
			// Create database
		$queryDb = "CREATE DATABASE IF NOT EXISTS bookHotel";
		if ($link->query($queryDb) === TRUE) {
		} else {
		}

		mysqli_select_db($link,"bookHotel");

		// sql to create table
		$queryTable = "CREATE TABLE if not exists bookings (
		guestName varchar(50) not null,
		email varchar(5) not null, 
		phone VARCHAR(30) NOT NULL,
		arrivalDate VARCHAR(30) NOT NULL,
		departureDate VARCHAR(30) NOT NULL,
		roomType VARCHAR(30) NOT NULL,
		numberofPple VARCHAR(30) NOT NULL,
		paymentType VARCHAR(30) NOT NULL,
		cardNumber VARCHAR(30) NOT NULL,
		cvv VARCHAR(50) NOT NULL,
		nameOnCard varchar(50) not null,
		country varchar(50) not null
		)";

		if ($link->query($queryTable) === TRUE) {
		} else {
		}


			$guestName = filter_input(INPUT_POST, 'name');
			$email = filter_input(INPUT_POST, 'email');
			$phone = filter_input(INPUT_POST, 'phone');
			$arrivalDate = filter_input(INPUT_POST, 'arrivalDate');
			$departureDate = filter_input(INPUT_POST, 'departureDate');
			$roomType = filter_input(INPUT_POST, 'roomType');
			$numberofPple = filter_input(INPUT_POST, 'numberofPple');
			$paymentType = filter_input(INPUT_POST, 'paymentType');
			$cardNumber = filter_input(INPUT_POST, 'cardNumber');
			$cvv = filter_input(INPUT_POST, 'cvv');
			$nameOnCard = filter_input(INPUT_POST, 'nameOnCard');
			$country = filter_input(INPUT_POST, 'country');

			$sql = "INSERT INTO bookings(guestName, email, phone,arrivalDate,departureDate,roomType,numberofPple,paymentType,cardNumber,cvv,nameOnCard,country) VALUES ('$guestName', '$email', '$phone', '$arrivalDate', '$departureDate', '$roomType', '$numberofPple', '$paymentType', '$cardNumber', '$cvv', '$nameOnCard', '$country')";

			if ($link->query($sql) === TRUE) {
				echo "<br>";
				echo "<br>";
			    echo "<h1>Successful Completion of Booking and Payment</h1>";
			} else {
				echo "invalid insertion";
				echo "Error: " . $sql . "<br>" . $link->error;
			}


			mysqli_close($link);


	?>

	<p style="color:#2f4f4f">
		<i class="fa fa-thumbs-up fa_custom"></i>  
		<i class="fa fa-thumbs-up fa_custom fa-2x"></i>  
		<i class="fa fa-thumbs-up fa_custom fa-3x"></i>  
		<i class="fa fa-thumbs-up fa_custom fa-4x"></i> "
	</p>
	<center>
		<p style="color:#000000; font-size:30px;font-family:'pacifico'; "><?php   
			 echo "Thanks for booking with us";
		 ?>
		  <p style="color:#2f4f4f; font-size:30px;font-family:'pacifico';font-style:italic; "><?php   
			echo "Akofena;Comfort & Glamour!";
			echo "<br>";
			$link_address = 'contact.html';
			echo "<a href='".$link_address."'>Rate Akofena</a>";
		 ?>
		 </p>
	</center>
	 <p style="color:#2f4f4f">
			<i class="fa fa-thumbs-up fa_custom"></i>  
			<i class="fa fa-thumbs-up fa_custom fa-2x"></i>  
			<i class="fa fa-thumbs-up fa_custom fa-3x"></i>  
			<i class="fa fa-thumbs-up fa_custom fa-4x"></i> "
	</p>
		
	


<hr>

	<footer >
	    <div class="row text-center" class="foota">
	        <div class="col-sm-4">
	         
	          <h4>Follow us on Social media</h4>
	          <a href="#" class="fa fa-facebook"></a>
	          <a href="#" class="fa fa-twitter"></a>
	          <a href="#" class="fa fa-youtube"></a>
	          <a href="#" class="fa fa-instagram"></a>
	          <p>Copyright 2017.Akofena International.</p>
	          <p>Website & Photography By: <a href="faithkilonzi.wordpress.com">
	           Kilonzi Group Ltd</a></p>
	          
	        </div>
	        <div class="col-sm-4">
	          
	        <p style="color:#fff"><span class="glyphicon glyphicon-map-marker"></span><strong>OUR LOCATION</strong></p>
	        <p>Tamale, Ghana</p>
	        <p>Akofena Int. Hotel,</p>
	        <p>Off Jubilee Park,</p>
	  
	        </div>
	        <div class="col-sm-4">
	      
	            <p style="color:#fff"><span class="glyphicon glyphicon-phone"></span><strong>CONTACT US</i></strong></p>
	            <p>
	              <span class="glyphicon glyphicon-phone"></span>
	              Resort (0727 880 488, 0736 880 488)</p>
	            <p>Head Office (0780 880 488, 0736 535 422)</p>
	            <p><span class="glyphicon glyphicon-envelope"></span>reservations@akofenaIntHotel.com</p>
	            <p>info@akofenaIntHotel.com</p>
	            
	       
	        </div>
	      </div>
	      <center><p> All Rights Reserved 2017 </p></center>
	</div>
	</footer> 

</body>
</html>