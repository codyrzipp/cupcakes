<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

    include ("cupcake.php");



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>
    <form action="index.php" method="post">
        <label for="name">Your Name:</label><br>
        <input name="name" id="name" type="text" placeholder="Please input your name."><br>
        <label for="options">Cupcake flavors:</label><br>
        <?php
        foreach ($cupcake as $key => $value) { ?>
        <input type="checkbox" name="cupcakes[]" value="<?php echo $key; ?>">
        <label for="<?php echo $key;?>"><?php echo $value?></label><br>
        <?php }?>

        <button type="submit">Order</button>
    </form>


<?php
    echo $summary;
?>
</body>
</html>
