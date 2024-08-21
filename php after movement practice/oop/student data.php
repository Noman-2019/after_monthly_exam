<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <select name="stid">
        <option value="">choose one</option>
        <option value="1">noman</option>
        <option value="2">rashed</option>
        <option value="3">a.kader</option>
        <option value="4">roksana</option>
    </select>
    <input type="submit" name="submit" value="show result">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $stid=$_POST['stid'];
            $obj=new file("data.txt");
            $obj->mthod($stid);
        }
        class file{
            public $data;
            public $dat;
            public function __construct($x){
                $this->data=$x;
                $this->dat=file($this->data);
            }
            public function mthod($stid){
                foreach ($this->dat as $dataa) {
                    $line=explode("|",$dataa);
                    list($id,$name,$score,$result)=$line;
                    if($id==$stid){
                        $output= $id.$name.$score.$result;
                    }
                }
                echo $output;}
        }
    ?>
</body>
</html>