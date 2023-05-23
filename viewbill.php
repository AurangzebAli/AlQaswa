<?php
Include_Once('dbConnection.php');








if(isset($_POST['go']))
{
	

	//$currentdate =date('Y-m-d');
	
	
	$customerid = $_POST['hiddencustomerid'];


$query1 = "SELECT CName FROM customer WHERE CustomerId =".$customerid ;
$resource1 =	mysql_query($query1);
		while($array1 = mysql_fetch_assoc($resource1)) 
		{
			$viewarray1[] = $array1;
		}
	
	 $DateFrom = GetCurrentDate($_POST['DateFrom']);
	 $DateTo = GetCurrentDate($_POST['DateTo']);
		
		
	$query = "SELECT * FROM `voucher` WHERE  CustomerId=".$_POST['hiddencustomerid'].  " AND DelieveryDate >= '".$DateFrom . "' and DelieveryDate <= '".$DateTo."'";
	//echo $query;
	
		$resource =	mysql_query($query);
		while($array = mysql_fetch_assoc($resource)) 
		{
			$viewarray[] = $array;
		}
		@session_start();
		$_SESSION["customerid"] = $_POST['hiddencustomerid'];
	
}
else
{		

		$customerid  =0;
		@session_start();
		if(!empty($_SESSION["customerid"])){
			$customerid =$_SESSION["customerid"] ;
			unset($_SESSION['customerid']);
			header('location:viewbill.php?id='.$customerid);
		}
	else{
		$customerid = $_GET['id'];
	}
		



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
}

		function GetCurrentDate($date)
{
	$arr = (explode("/",$date));
	$currentdate = $arr[2]."-".$arr[0]."-".$arr[1];
	
	return $currentdate;
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
	<link rel="stylesheet" type="text/css" href="css/viewbill.css">
<!--===============================================================================================-->

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	

</head>
<body>
			<form method="post" action = "viewbill.php" >						
							
	<div class="">
	
	
	
	
								

								<span class="login100-form-title p-b-70">
						 <h1><?= $viewarray1[0]['CName'] ?></h1>
						
					</span>
					<div>
					
						<?php 
						$Amount =0; 
						$Receivedamount = 0;
						$TotalBottles =0;
						if(!empty($viewarray))
						{
						foreach($viewarray as $arr){ 
						
						
						
						$Amount = $Amount + $arr['AmountBalance'];
						$Receivedamount = $Receivedamount  + $arr['ReceivedAmount'];
						$TotalBottles = $TotalBottles + $arr['NoBottlesDelieverd'];
						
						
						 }

						echo "Total Amount Balance = ".$Amount."<br/>";
						echo "Total Received Balance = ".$Receivedamount."<br/>";
						$remianig =  $Amount-$Receivedamount;
						echo "Remaining Balance = ".$remianig."<br/>";
						echo "Total Bottles = ".$TotalBottles;
						}
						 ?>
						
						
					
					</div>
					
						
						
					</div>
					<div  style="margin-left: 378px;" class ="container" >
					<div   class="" >
						<p class="" data-placeholder="Date From">Date From</p>
						<input id = "DateFrom" class="input100" type="text" name="DateFrom">
					
						<input id="hiddcustomerid" type = "hidden" value = "<?= $customerid?>" name ="hiddencustomerid">
					</div>
									
						
									<div  class="" data-validate="">
						<p class="" data-placeholder="Date To">Date To</p>
						<input id = "DateTo" class="" type="text" name="DateTo">
						
						<input type = "hidden" value = "<?= $customerid?>" name ="hiddencustomerid">
					</div>
  
					</div>
					<input id= "btnsubmit"  type="submit"   value="Go" name = "go" /> 	
	
				</form>
<table id="tblcomplain" class="responstable">
  
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
	<script type= "text/javascript" src="jquery.js" ></script>
	<script type="text/javascript" src="js/datepicker/jquery-ui.js"></script> 
	<link rel="stylesheet" type="text/css" href="js/datepicker/jquery-ui.css" />
	<script type="text/javascript">
				$(function(){
					$('#DateFrom').datepicker();
					$('#DateTo').datepicker();
					
					
				});
		
		</script>
	
</body>
</html>