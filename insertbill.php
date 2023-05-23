<?php


$customerid = $_GET['id'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Al-Qaswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			
			<div >
			
				

			
			<form method="post" action = "process.php" >
			
			<div class="wrap-login100 p-t-40 p-b-20">
			
				
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input id = "DelieveyDate" class="input100" type="text" name="DeliDate">
						<span class="focus-input100" data-placeholder="Date"></span>
						<input type = "hidden" value = "<?= $customerid?>" name ="hiddencustomerid">
					</div>

	
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="NBDelieverd">
						<span class="focus-input100" data-placeholder="No Bottles Deliverd"></span>
					</div>				

				
				
				
			
			
			
				
						<div class="login100-form validate-form">
	
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="rbReceived">
						<span class="focus-input100" data-placeholder="Return Bottles Received"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="TAmount">
						<span class="focus-input100" data-placeholder="Per Bottle Amount"></span>
					</div>
					
					

					
			</div>		
		
			
				
					
	<div class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="RAmount">
						<span class="focus-input100" data-placeholder="Amount Received"></span>
					</div>
					
					
	<div class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="AdvanceAmount">
						<span class="focus-input100" data-placeholder="Advance Amount"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="Remarks">
						<span class="focus-input100" data-placeholder="Remarks"></span>
					</div>
					</div>

							
			</div>
					
					
					
					
				
			
						
			                            <input type="submit" class="login100-form-btn"  value="Save" name = "SaveBill" /> 
						
						
						
			
						                            
					
</form>

		</div>
		</div>
		
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script type= "text/javascript" src="jquery.js" ></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	
	
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	<script type="text/javascript" src="js/datepicker/jquery-ui.js"></script> 
	<link rel="stylesheet" type="text/css" href="js/datepicker/jquery-ui.css" />
	<script type="text/javascript">
				$(function(){
					$('#DelieveyDate').datepicker();
					
				});
		
		</script>
		
		

</body>
</html>