<?php 
session_start();
if(isset($_POST['submit'])){
	include("common/connection.php");
	$conn = connect();
	print_r($_POST);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$pno = $_POST['pno'];
	$email= $_POST['email']
	$regno = $_POST['regno'];
	$password = $_POST['pass'];
	$query = "INSERT INTO newuser(fname,lname,gender,pno,email,regno,password) VALUES('$fname','$lname','$gender','$pno','email','regno','password')";
	if(mysqli_query($conn,$query)){
		$_SESSION['successMsg'] = "User Added Successfully";
		header("location:signin.php");
	}else{
		$_SESSION['errorMsg'] = "Operation failed";
		header("location:register.php");
	}
}
include("common/header.php");?>

<body>
    <div class="topnav">
      <a class="active" href="index.html" >Home</a>
      <a href="register.html">Register</a>
      <a href="login.html">Login</a>

    </div>

    <div style="padding-left:16px">

    </div>

    <br>
    <br>
    <h1><center> Register Yourself !</center></h1>
    <br>
    <br>
    <form name="myForm" action="" method="post">
      
        <br>
		<div class="row">
			<div class="label"> First name </div>
		<br/>
			<div class ="input">
			<input type="text" name="fname" required placeholder="Enter here" > <br/>
		<br/>
			</div>	
		</div>
        <br/>
		<div class="row">
			<div class="label"> Last name </div>
		<br/>
			<div class ="input">
			<input type="text" name="lname" required placeholder="Enter here"> <br/>
			</div>
		</div>	
		<br/>	
        
		<div class="row">
			<div class="label"> Gender </div>
        <br/>
			<div class="input">
        <input type="radio" name="gender" value="male" required> Male<br/>
        <input type="radio" name="gender" value="female" required> Female<br/>
        <input type="radio" name="gender" value="other" required> Other<br/>
			</div>
		</div>	
        <br/>
        <br/>
       <div class="row">
			<div class="label"> Contact </div>
		<br/>
			<div class="input">
        <input type="text" name="pno" required placeholder="Enter here">
			</div>
		</div>	
		
		<br/>
        <br/>
		
		<div class="row">
			<div class="label"> E-mail </div>
		<br/>
			<div class="input">
        <input type="text" name="email" required  placeholder="Enter here">
			</div>
		</div>	
		<br/>
		<br/>

		<div class="row"
			<div class="label">Vehicle Registration Number </div>
		<br/>
			<div class="input">
        <input type="text" name="regno" id="reg"  required>
			</div>
		</div>	
        <br/>
        <br/>
		
		<div class="row"
			<div class="label"> Password </div>
		<br/>
			<div class="input">
        <input type="password" value="pass"  maxlength="20" required>
      <br/>
      <br/>
			</div>
		</div>
		<div class="row">
			<div class="label">&nbsp; </div>
			<div class="input">
		<input type="submit" name="submit" value="Register"><br/>
			</div>
		</div>	
			
   </form>
  
  
  
  <?php include("common/footer.php");?> 