<?php
session_start();
include("common/header.php");
 <h2>Login Form</h2>

    <form name="myForm" action="fetch.php" onsubmit="return validateForm();" method="get">

      <div class="container">
	  
	  <div class="row">
	  
			<div class="label">User email-id</div>
			<div class="input">
			<input type="text" placeholder="Enter Email-Id" name="email" required>
			</div>
	  </div>

		<div class="row">
		
			<div class="label">Password</div>
        
        <div class="input">
		input type="password" placeholder="Enter Password" name="pass" required>
		</div>
		
		</div>
		
		<div class="row">
			<div class="label">&nbsp;</div>
			<div class="input">
         <input type="submit">
        <input type="checkbox" checked="checked"> Remember me
      </div>

      <div class="container" style="background-color:white">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="pass"> <a href="www.gmail.com"> Forgot Password</a></span>
      </div>
    </form>
	
	<?php include("common/footer.php");?>		