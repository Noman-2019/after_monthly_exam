<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <form action="" method="post">
        <fieldset>
                        <legend>max_min</legend>
            <input type="text" name="data" id=""> <br>
            <input type="submit" value="check_maxmin" name="submit">
        </fieldset>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $info=$_POST['data'];
        $num=explode(",",$info);
        $max=$num[0];
        $min=$num[0];
        for ($i=0; $i <count($num) ; $i++) { 
            if ($num[$i]>$max) {
                $max=$num[$i];
            }
            if ($num[$i]<$min) {
                $min=$num[$i];
            }
        }
        echo $max."<br>".$min;
    }
    
    ?>
</body>
</html>