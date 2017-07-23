<?php
session_start();
include("common/header.php");

<body>

<form name="myForm" method="get" action="booking.php">
      <center>
        <h1><p><U>Book Now</U></p></h1> <br>
      <h3> Select availability</h3>
      <select name="slot" required>
        <option value="volvo">1</option>
        <option value="saab">2</option>
        <option value="opel">3</option>
        <option value="audi">4</option>
        <option value="audi">5</option>
        <option value="audi">6</option>
        <option value="audi">7</option>
        <option value="audi">8</option>
        <option value="audi">9</option>
        <option value="audi">10</option>
      </select>
        
        <h3>Enter time duration (hh:min)</h3> <h5>(charges will be applicable on hourly basis)</h5>
        
        
          from :<br>
          <input type="text" name="from_time" required >
          <br>
          to:<br>
          <input type="text" name="to_time" required>
          <br><br>
         <br>
 <input type="submit" value="Submit">
</center> 
</form>


<?php include("common/footer.php");?>