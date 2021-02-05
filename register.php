<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Comp207-Register here for practical slot</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="myscripts.js"></script>
</head>
<body>
	<div class="header">
		<h2>Comp207-Register here for practical slot</h2>
	</div>
	
	<form method="post" action="register.php" id="myForm">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>SID</label>
			<input type="number" name="password_1">
		</div>
		
	     <div>Select a Time slot</div>
	
		 <div class="menu" >
			  <select class="form01" name="menu"  id="menu"  onchange="getSelectValue()";>
				<option value="" name="" onclick="" id="" disabled selected>---Time Slot----</option>
				<option value="slot1" name="a"  id="slot1">Monday 15:00-17:00</option>
				<option value="slot2" name="b"  id="slot2">Tuesday 14:00-16:00</option>
				<option value="slot3" name="c"  id="slot3">Thursday 11:00-13:00</option>
				<option value="slot4" name="d"  id="slot4">Friday 10:00-12:00</option> 	
			  </select><br><br>


    <script>
	
	
	var acount=8;
	var bcount=8;
	var ccount=8;
	var dcount=8;
	
        function getSelectValue()
        {
            var selectedValue = document.getElementById("menu").value;
           
			
			
			
			
		if(selectedValue=="slot1" && acount>=1) {
		
			
				acount=acount-1;
					
					
				
				
				alert("available seats"+acount);
		
		}
		
		
		
		else if(selectedValue=="slot2")
		{	
		bcount=bcount+1;
		alert(bcount);
		}
		
		
		else if(selectedValue=="slot3")
		{	
		ccount=ccount+1;
		alert(ccount);
		}
	
		
		else if(selectedValue=="slot4")
		{	
		dcount=dcount+1;
		alert(dcount);
		}
	
	    
		
		
		
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
    </script>
	
	</div>  
	
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button> <br>
			<br>
			
			<button type="button" onclick="n()" value="Reset form" class="btn">Clear all</button>
			
		</div>
		
		
			
		
		
	</form>
	

	
	
	
</body>
</html>