<?php 
include("config.php");

// get POST data 
$userID=$_POST['userID']; 
$currencyFrom=$_POST[''];
currencyTo=$_POST[''];
amountSell=$_POST[''];
amountBuy=$_POST[''];
rate=$_POST[''];
origCountry=$_POST[''];

// connect to database
mysql_connect($host,$user,$pass);
@mysql_select_db($db) or die( "Unable to select database");

// insert POST data in table
$query = "INSERT INTO messages (userID,currencyFrom,currencyTo,amountSell,amountBuy,rate,originatingCountry) VALUES ('$userID','$currencyFrom','$currencyTo','$amountSell','$amountBuy','$rate','$origCountry')";
mysql_query($query);



?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='refresh' content='10;url=index.php'>
</head>
<body>

<p>Data sent successfully. You will be redirected shortly.</p>
</body>
</html>


