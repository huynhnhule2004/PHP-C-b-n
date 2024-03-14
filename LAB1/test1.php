<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test1.php" method="post">
        <label for="">Enter a number to count down from:</label>
        <input type="text" name="country">
        <input type="submit" >
    </form>
</body>
</html>
<?php 

$capitals = array("USA"=>"washington d.c",
                    "japan"=>"kyoto",
                    "south korean"=>"Seoul",
                    "India" => "New Delhi");

$capital = $capitals[$_POST["country"]];
echo "The captital is $capital";


?>
