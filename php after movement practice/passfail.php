<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="mcq" id=""><br>
        <input type="number" name="dcs" id=""><br>
        <input type="number" name="evi" id=""><br>
        <input type="submit" value="check" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num=$_POST['mcq'];
        $num1=$_POST['dcs'];
        $num2=$_POST['evi'];
        echo passf($num,$num1,$num2);
    }
    function passf($mcq,$dcs,$evi){
        if($mcq>=80 && $dcs>=60 && $evi>=60){
            echo "passed";
        }else{
            echo "failed";
        }
    }
    
    ?>
</body>
</html>