<?php
session_start();
include("common/header.php");


  <body>
   

    <form action="upload.php" method="get" onsubmit="return validateForm();">
      <center>
        <h2> One step away to be secured</h2>
        <br>
        
		<div class="row">
		<div class="label">Select Location </div>
			<div class="input">
				<input type="radio" name="place" value="sadar"> Sadar<br>
				<input type="radio" name="place" value="SAM">SAM<br>
				<input type="radio" name="place" value="SAM-D"> SAMDARIYA COMPLEX<br>
			</div>
		</div>		
        <br/>
		<br/>
        
        <div class="row">
		<div class="label">Vehicle type  </div>
			<div class="input">
					<input type="radio" name="vehicle_type" value="2-wheeler"> 2-Wheeler<br>
					<input type="radio" name="vehicle_type" value="4-wheeler"> 4-Wheeler<br>
					<input type="radio" name="vehicle_type" value="others"> Others<br>
			</div>		
        <br/>
        <br/>
        
		<div class="row">
		<div class="label">Type of stay </div>
			<div class="input">
			
				<input type="radio" name="type_of_stay" value="stopby"> stopby<br>
				<input type="radio" name="type_of_stay" value="longer"> longer<br>

        <br/>
        <br/>
       

        <div class="row">
			<div class="label">&nbsp;</div>
			<div class="input">
				<input type="submit" name="submit" value="submit"/>
			</div>
			<div class="clear"></div>
		</div>
       

    </form>
 <?php include("common/footer.php");