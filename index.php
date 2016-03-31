<?php ?>
<!DOCTYPE html>
<head>
<title>Market Trade Processor</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<form name="postMsg" method="post" action="post_data.php" class="form-control">
<input type="text" name="userID" id="userID" value="134256" readonly="readonly"/>
<label>Currency From</label>
<select name="currencyFrom" id="currencyFrom">
<option value="EUR">Euro</option>
<option value="USD">US Dollar</option>
<option value="GBP">UK Pound</option>
</select>
<label>Currency To</label>
<select name="currencyFrom" id="currencyFrom">
<option value="EUR">Euro</option>
<option value="USD">US Dollar</option>
<option value="GBP">UK Pound</option>
</select>
<label>Amount to Sell</label><input type="text" name="amountSell" id="amountSell"/>
<label>Amount to Buy</label><input type="text" name="amountBuy" id="amountBuy"/>
<label>Rate</label><input type="text" name="rate" id="rate" value="0.7471"/>
<input type="text" name="origCountry" id="origCountry" value="IE" readonly="readonly"/>

</form>

<?php echo '&copy;' . date('Y',time()) . ' Peter Heylin'; ?>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>

