<?php
include('config.php');

mysql_connect($host,$user,$pass);
@mysql_select_db($db) or die( "Unable to select database");

$query1 = "SELECT * FROM messages";
$result1 = mysql_query($query1);
$num1 = mysql_numrows($result1);


?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
<script src="https://code.highcharts.com"></script>

<script type="text/javascript">

$(function () {
    $('#buysell').highcharts({
        title: {
            text: 'Buy & Sell',
            x: -20 //center
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: 'Amount'
            },
        },
        tooltip: {   
           
        },
        series: [{
            name: 'Amount to Sell',
            data: [
            
            <?php
            
                $i=0;
                while ($i < $num1) {
                        $amountSell=mysql_result($result1,$i,"amountSell");
                        $timePlaced=mysql_result($result1,$i,"timePlaced");
                        
                        echo $amountSell.',';
                        $i++;
                    }
            ?>
            
            ]
        }, {
            name: 'Amount to Buy',
            data: [
            
                $j=0;
                while ($j < $num1) {
                        $amountBuy=mysql_result($result1,$j,"amountBuy");
                        $timePlaced=mysql_result($result1,$j,"timePlaced");
                        
                        echo $amountBuy.',';
                        $j++;
                    }            
            
            ]
        }, ]
    });
});

</script>

</head>
<body>

<div id="buysell"></div>

</body>
</html>
