<?php 
include("config.php");

// get POST data 
$userID=$_POST['userID']; 
//currencyFrom
//currencyTo
//amountSell
//amountBuy
//rate
//origCountry

// connect to database
mysql_connect($server,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

// insert POST data in table
$query = "INSERT INTO company VALUES ('','$res_company','$res_add1','$res_add2','$res_add3','$county','$tel','$fax','$email','$web','$indsec','$status','$source')";
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


