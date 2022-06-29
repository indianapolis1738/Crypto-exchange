<?php

$url = "https://www.bitstamp.net/api/ticker/";
$fgc = file_get_contents($url);
$json = json_decode($fgc,true);

$price = $json["last"];
$high = $json["high"];
$low = $json["low"];
$date = date("m-d-y -h:i:sa");
$open = $json["open"];

if($open < $price){
//price went up
    $indicator = "+";
    $change = $price - $open;
    $percent = $change / $open;
    $percent = $percent * 100;
    $percentChange = $indicator.number_format($percent, 2);
    $color = "green";
}
if($open > $price){
    //price went down
        $indicator = "-";
        $change = $price - $open;
        $percent = $change / $open;
        $percent = $percent * 100;
        $percentChange = $indicator.number_format($percent, 2);
        $color = "red";
    }
?>
<!DOCTYPE html>
<html>
<style>
#container {
    width: 270px;
    height: 90spx;
    border: 1px solid #56667F;
    background-color: #FFFFFF;
    overflow: hidden;
    border-radius: 9px;
    color: #111310;
}

#lastprice {
    font-size: 30px;
}

#timeDate {
    font-size: 9px;
    color: #999;
}
</style>

<body>
    <div id="container">
        <table width="100%">
            <tr>
                <td rowspan="3" width="60%" id="lastprice">
                    <?php echo $price; ?>
                </td>
                <td align="right" style="color: <?php echo $color; ;?>">
                    <?php echo $percentChange; ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <?php echo $high; ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <?php echo $low; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right" id="timeDate">
                    <?php echo $date; ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>