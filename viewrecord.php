<?php
Include_Once('dbConnection.php');

$query = "SELECT s.* FROM  customer s
		order by s.CustomerId desc 
		limit 500";

		
		$resource =	mysql_query($query);
		while($array = mysql_fetch_assoc($resource)) 
		{
			$viewarray[] = $array;
		}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Al-Qaswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="css/styletable.css" />	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	
	
<!--===============================================================================================-->

 <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  

</head>
<body>
	<br />
	<div class="limiter">
	<div class="form-group input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
  <input name="query" id="txt_query" placeholder="Search" type="text" class="form-control">
</div>
	
	
	
	
								<table id="tblcomplain" class="responstable">


  <thead>
  <tr>
  
    <th>Customer No</th>
	<th>Customer Name</th>
    <th>Address</th>
    <th data-th="Driver details"><span>Phone</span></th>
    <th>CNIC</th>
    <th>Date</th>
	<th>Edit</th>
	
    <th>Insert Bill</th>
	<th>View Bill</th>
  </tr>
  </thead>
  
  <tbody>
  <?php
  $complainstaus =1;
  if(!empty($viewarray)) {
  foreach($viewarray as $arr){ ?>
  
  <tr id = "complainstatus<?=  $complainstaus;?>">
	<td> <input id="stausid" type = "hidden"  value= "<?= $arr['CustomerId'] ?>" name= "support" /> <?= $arr['CustomerId'] ?></td>
    <td> <?= $arr['CName'] ?></td>
    <td><?= $arr['CAddress'] ?></td>
    <td><?= $arr['CPhone'] ?></td>
    <td><?= $arr['CNIC'] ?>  </td>
    <td><?= $arr['Date'] ?> </td>
	
	<td><a href="EditCustomerRecord.php?id=<?= $arr['CustomerId'] ?>">Edit</a></td>
<td><a href="insertbill.php?id=<?= $arr['CustomerId'] ?>">Insert</a></td>
<td><a href="viewbill.php?id=<?= $arr['CustomerId'] ?>">View</a></td>	
	<!-- <td> //$arr['ProblemStatus']   </td> -->
	
	
 	

    <!-- 	<td style = "text-align: center;"><input  class = "viewform" type="checkbox" name="checked"  <php //echo ($arr['ProblemStatus'] ==1 ? 'checked' : ''); ?>  ></td>     -->	
    
    <!-- <td> <a id= "print" class="info_link" href="#"> Print </a> </td> -->	
	
  </tr>
  
  <?php  
		$complainstaus++;
	}
	$complainstaus =1;
  }
  ?>
  
  </tbody>
</table>
  
		
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
		  <script src="vendor/jquery.quicksearch.js"></script>
	
<script type= "text/javascript">
  $('input#txt_query').quicksearch('table#tblcomplain tbody tr');
</script>
</body>
</html>