<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 $country=[
    "srilanka"=>"colombo",
    "China"=>"beijing",
    "Bangladesh"=>"Dhaka"
 ];
 foreach($country as $key=>$value) {
    echo "$key=>$value <br>";
 }  
 ksort($country);
 echo "<hr>";
 foreach($country as $key=>$value) {
    echo "$key=>$value <br>";
 }

?>
</body>
</html>