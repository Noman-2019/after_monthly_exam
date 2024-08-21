<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>email validation</legend>
            <input type="text" name="user" id=""><br>
            <input type="submit" value="checkemail" name="submit">
        </fieldset>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $usr=$_POST['user'];
        $pattern='/^[a-z0-9]+@[A-z]{4,8}$/';

        if (preg_match($pattern,$usr)) {
            echo "ok";
        }else{
            echo " not ok";
        }
    }
    
    ?>
</body>
</html>