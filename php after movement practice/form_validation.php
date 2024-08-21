<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        // $msg="";
        // $msg1="";
        // $msg2="";
        // $msg3="";        
        
        

        if (empty($name)) {
             $msg="please enter name";}
            if (empty($address)) {
             $msg1="please enter address";;
        }
        if (empty($gender)) {
            $msg2="please select gender";
        };
        if (empty($hobbies)) {
            $msg3="please select hobby";
        };
        if (!empty($name)&& !empty($address) && !empty($gender) && !empty($hobbies)) {
            echo "validation successfull";
        }
    }
    
    ?>
    <form method="post" style="width:fit-content">
 <fieldset>
    <legend>form</legend>
   Name: <input type="text" name="name" id=""><br>
   <br><br><br>
        <?php if (isset($_POST['submit'])) {
            echo "$msg";
        }
        ?>
       <br><br><br><br> address:<textarea name="address" id=""></textarea><br>
        <br><br><br><br>
        <?php if (isset($_POST['submit'])) {
            echo "$msg1";
        }
        ?>
        <br><br><br>Gender:<input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female <br>
        <br><br><br><br>
        <?php if (isset($_POST['submit'])) {
            echo "$msg2";
        }
        ?>
        <br><br><br>hobbies:<input type="checkbox" name="hobbies" value="crick">crick
        <input type="checkbox" name="hobbies" value="football">football
        <input type="checkbox" name="hobbies" value="tennis">tennis <br>
        <br><br><br><br>
        <?php if (isset($_POST['submit'])) {
            echo "$msg3";
        }
        ?>
        <input type="submit" value="register" name="submit">
        </fieldset>
    </form>
</body>
</html>