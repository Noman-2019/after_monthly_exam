<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $result=["noman"=>90,"asif"=>80,"rakibul_islam"=>99,"abdullah"=>91,"mohiuddin"=>89];
    ?>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th><b>student name</b></th>
            <th><b>score</b></th>
    </tr>
    <?php
    foreach ($result as $name => $score) {?>
        <tr>
            <td><?php echo $name?></td>
            <td><?php echo $score?></td>
        </tr>
   <?php }?>
<tr><td>maximum score</td></tr>
<td colspan="2"><?php $maxscore=max($result);
    $student=array_search($maxscore,$result);
    echo "maximum score $maxscore is obtained by  $student"; 

?></td>
    </table>
</body>
</html>