

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your booking</title>

    <style>
        body
        {
            display: grid;
	        height: 100%;
        	width: 100%;
	        place-items: center;
	        background: -webkit-linear-gradient(left, #a445b2, #fa4299);
        }

        body h2
        {
            font-weight: 900;
            font-size: 30px;
        }

        .booking_details
        {
            font-size: 20px;
            font-weight: 600;
            text-transform: capitalize;
           
        }
    </style>

</head>
<body>
    
    <h2>Booking Details</h2>

    <div class="booking_details">
        <h5>Full name:  <span><?php echo $_GET['full_name']; ?></span> </h5>
		<h5>Email: <span><?php echo $_GET['email']; ?> </span> </h5>
 
        <h5>Pickup Location:  <span><?php echo $_GET['pick_location']; ?></span></h5>
		<h5>Date: <span><?php echo $_GET['pickup_date']; ?></span></h5>
		<h5>Drop Location:  <span><?php echo $_GET['drop_location']; ?></span></h5>
		<h5>Date: <span><?php echo $_GET['drop_date']; ?></span></h5>
		<h5>Plan: <span><?php echo $_GET['plan']; ?></span></h5>
    </div>


    <div class="return_home">
    <a href="main.php" class="w3-button w3-block w3-grey">Home</a>
    </div>


</body>
</html>