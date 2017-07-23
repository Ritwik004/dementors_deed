<!DOCTYPE html>
	<html>
		<head>
			<title> Online Parking Management System </title>
			
			<link rel="stylesheet" href="style.css">
			<script>
						function validateForm() {
							var x = document.forms["myForm"]["uname"].value;
							var atpos = x.indexOf("@");
							var dotpos = x.lastIndexOf(".");
							if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
								alert("Not a valid e-mail address");
								return false;
							}
						}
			</script>
						<meta charset="utf-8">
						<meta name="viewport" content="width=device-width, initial-scale=1">						
		</head>		
						<div class="header">
									<img src=download.png width="250" align="left">	
									<span> <h1> Park it on ! </h1> </span>
						</div>
				