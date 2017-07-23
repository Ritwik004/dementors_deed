<?php
session_start();
include("common/header.php");?>


<div class="container">
	<h2>Add New Student</h2>
	<?php if(isset($_SESSION['errorMsg'])):?>
		<div class="error">
			<?php echo $_SESSION['errorMsg'];?>
		</div>
	<?php 
	unset($_SESSION['errorMsg']);
	endif; ?>

  <body>
    
	   <div class="topnav">
		<a class="active" href="login.php" >Home</a>
		<a href="register.php">Register</a>
		<a href="signin.php">Login</a>
	  
	  </div>

		<div style="padding-left:16px">
  
		</div>
  
		<br/>
		<br/>
		
	
		  <div>
			<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
		  </div>

			<div class="w3-content w3-section" style="max-width:500px">
			<img class="mySlides" src="1.jpg" style="width:250%">
			<img class="mySlides" src="8.jpg" style="width:250%">
			<img class="mySlides" src="2.jpg" style="width:250%">
			</div>

		  <script>
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 2000); // Change image every 2 seconds
			}
		  </script>
	
			<br/>
			
			<h2> About :</h2>
			  <p> The Parking management system is a systematic digital recording of all the recipients who visit to any locality and suffer with the most basic issue of availing safe and secure parking spot. Previously, all these details were entered manually and usage of paper receipt were induced which seem less formal and unauthorized.
			There would be free standby provision for stop by vehicle as well who doesn’t have a long term stay in the vicinity. Also It might depend based in whether parking station has to kept paid/non paid.

			Also recorded parking is practiced only in certain malls and shopping complexes but the domain of digital system can be extended in city spots as well so as to establish traffic less roads and well maintained vehicle free zones.
			Once pre booking is made, charges won’t be deducted from digital wallet instead it will start once QR scanning is done.

			 In order to overcome these difficulties a computerized form to record the transactions is necessary. Thus the control system is designed and implemented. The parking management system will interface with the customer’s selection of destination, time slot and vehicle type, Pre booking scheme and the most salient feature would be:

			o	Digital receipt generation containing details of the user.
			  </p>
			   

	
<?php include("common/footer.php");?>