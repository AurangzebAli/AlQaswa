<?php
Include_Once('dbConnection.php');


$customerid = $_GET['id'];


$query1 = "SELECT CName FROM customer WHERE CustomerId =".$customerid ;



$resource1 =	mysql_query($query1);
		while($array1 = mysql_fetch_assoc($resource1)) 
		{
			$viewarray1[] = $array1;
		}

		

$query = "SELECT s.* FROM  voucher s where s.customerid = ".$customerid ."
		order by s.vno desc 
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
	

</head>
<body>
	
	<div class="limiter">
	
	
	
	
								<table id="tblcomplain" class="responstable">

								<span class="login100-form-title p-b-70">
						 <?= $viewarray1[0]['CName'] ?>
						
					</span>
					<div>
						<?php 
						$Amount =0; 
						$Receivedamount = 0;
						if(!empty($viewarray))
						{
						foreach($viewarray as $arr){ 
						
						
						
						$Amount = $Amount + $arr['AmountBalance'];
						$Receivedamount = $Receivedamount  + $arr['ReceivedAmount'];
						
						
						
						 }

						echo "Total Amount Balance = ".$Amount."<br/>";
						echo "Total Received Balance = ".$Receivedamount."<br/>";
						$remianig =  $Amount-$Receivedamount;
						echo "Remaining Balance = ".$remianig;
						}
						 ?>
						
						
						</div>
					

  
  <tr>
  
    <th>VNo</th>
	<th>Delievery Date</th>
    <th>No Of Bottles Delieverd</th>
    <th data-th="Driver details"><span>Return Bottles Received</span></th>
    <th>TotalAmount</th>
        <th>Received Amount</th>
	<th>Amount Balance</th>
	<th> Advance Amount</th>
	<th>Remarks</th>
  </tr>
  
  <?php
  $complainstaus =1;
  if(!empty($viewarray)) {
  foreach($viewarray as $arr){ ?>
  
  <tr id = "complainstatus<?=  $complainstaus;?>">
	<td> <input id="stausid" type = "hidden"  value= "<?= $arr['VNo'] ?>" name= "support" /> <?= $arr['VNo'] ?></td>
    <td> <?= $arr['DelieveryDate'] ?></td>
    <td><?= $arr['NoBottlesDelieverd'] ?></td>
	<td><?= $arr['ReturnBttlesReceived'] ?></td>
	   <td><?= $arr['TotalAmount'] ?></td>
    <td><?= $arr['ReceivedAmount'] ?>  </td>
    <td><?= $arr['AmountBalance'] ?> </td>
	    <td><?= $arr['AdvanceAmount'] ?> </td>
	<td><?= $arr['Remarks'] ?> </td>
	
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
  
  
</table>
  
		
		</div>
	
	

	<div id="dropDownSelect1"></div>
	
</body>
</html>