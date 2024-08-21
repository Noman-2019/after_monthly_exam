<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" id=""><br>
        <input type="submit" value="checkmail" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $mail=$_POST['email'];
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            echo " ok";
        } else{
            echo " not ok";
        }
    }
    
    
    ?>
</body>
</html>