<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <form action="" method="post">
        <fieldset>
            <legend>factorial</legend>
            <input type="number" name="numb" id=""> <br>
            <input type="submit" value="show result" name="submit">
        </fieldset>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num=$_POST['numb'];
        echo facto($num);
    }
    function facto($num){
        $fact=1;
        for ($i=$num; $i>1 ; $i--){
            $fact*=$i;
        }
       echo  $fact. " is the factorial of " .$num;
        }
    
    
    
    ?>
</body>
</html>