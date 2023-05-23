<?php
require_once('dbConnection.php');
if(isset($_POST['Login']))
{

	
	$query = "SELECT * from user WHERE Username = '".$_POST['username']."' and Password = MD5('".$_POST['password']."')";	
	$resource = mysql_query($query);	
	while($array = mysql_fetch_assoc($resource))
	{
		$userarray[] = $array;
	}
	
	
	
	if(!empty($userarray))
	{
		if($userarray[0]['UserId'] == 1)
		{
			
				@session_start();
				$_SESSION["PCadmin"] = "PCadmin";
				
				header('location:view.php');
			
		}
	
	}
	else
	{
		
		header('location:index.php');
		
	}
	
	
}
if(isset($_POST['logout']))
{
	@session_start();
	if($_SESSION['PCadmin'])
	{
			
		
		unset($_SESSION['PCadmin']);
		header('location:index.php');
		
	}
}


if(isset($_POST['Save']))
{
	$currentdate =date('Y-m-d');
	
	$query = "INSERT INTO `customer`(`CName`, `CAddress`, `CPhone`, `CNIC`,`Date`) VALUES ('".$_POST['name']."','".$_POST['Address']."','".$_POST['Phone']."','".$_POST['NIC']."', '".$currentdate."')";

	mysql_query($query);
	header('location:viewrecord.php');
	
	
	
	
}

if(isset($_POST['SaveBill']))
{
	

	$currentdate =date('Y-m-d');
	$BalanceAmount = $_POST['NBDelieverd'] * $_POST['TAmount'];
	 $DeliveryDate = GetCurrentDate($_POST['DeliDate']);
		
		
	$query = "INSERT INTO `voucher`(`Date`, `NoBottlesDelieverd`, `ReturnBttlesReceived`, `DelieveryDate`, `TotalAmount`, `ReceivedAmount`, `AmountBalance`,`Remarks`,`CustomerId`,`AdvanceAmount`) VALUES ('".$currentdate ."','".$_POST['NBDelieverd']."','".$_POST['rbReceived'] ."','".$DeliveryDate."','".$_POST['TAmount']."','".$_POST['RAmount']."','".$BalanceAmount ."','".$_POST['Remarks']."','".$_POST['hiddencustomerid']."','".$_POST['AdvanceAmount']."')";

	mysql_query($query);
	header('location:viewrecord.php');
	
	
	
	
}






/********* Get Current Date According to mysql *************/
function GetCurrentDate($date)
{
	$arr = (explode("/",$date));
	$currentdate = $arr[2]."-".$arr[0]."-".$arr[1];
	
	return $currentdate;
}


?>