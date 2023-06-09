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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form action = "process.php"  method = "post" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/qadri.jpg" alt="AVATAR">
					</span>
					<br />
					

					<div class="wrap-input100 validate-input m-b-50" >
						<input type="button" class="login100-form-btn insert" value="Insert Customer" name = "Insert Record" /> 
					</div>
					

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
										<input type="button" class="login100-form-btn view" value="View Customer" name = "View Record" /> 
					</div>
					
					
					<div class="container-login100-form-btn">
					<input type="submit" class = "login100-form-btn logout" value="logout" name = "logout" /> 
					</div>
					

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="#" class="txt2">
								Sign up
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	
	
		<script type="text/javascript">
				
				function Person(h,w)
				{
					this.height = h;
					this.weight = w;
    
				}
				
				
				function calcAvgHeight(data)
				{
				var sumOfHeights= null;	
					
					 
					if(data == null){
						return null;
					  
					}
					else
					{
						
							for(var person in data){
									 
									 
								
							if(data.hasOwnProperty(person)){
								sumOfHeights += data[person].height;
						  }
						  
						}  
						  
						    return sumOfHeights / Object.keys(data).length;
						
						
					
					
					}
				}

				
				$(function(){
				
					var avgHeight= null;
					var alan = new Person(174, 34),
					tim = new Person(190, 42),
					data = {},
					avgHeight = null;
					data.alan = alan,
					data.tim = tim;
 
					
					avgHeight = calcAvgHeight(data);
					 //alert("average height: " + avgHeight);
						
					
					$('.insert').click(function(){
						
						
					window.location.href = "insertrecord.php";			
							
					});
					
					
					$('.view').click(function(){
						
						
					window.location.href = "viewrecord.php";			
							
					});
					
					
				});
			
			
		
		</script>
		

</body>
</html>