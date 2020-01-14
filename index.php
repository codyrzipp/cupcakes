<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

    include ("cupcake.php");

$nameIsValid = true;
$cupIsValid = true;
if ($_SERVER["REQUEST_METHOD"] === "post") {

    if(empty($_POST["name"]) || empty(trim($_POST["name"]))) {
        $nameIsValid = false;
    } else {
        $name = $_POST["name"];
    }

    if(empty($_POST["cupcakes"])) {
        $cupIsValid = false;
    } else {
        foreach ($_POST["cupcakes"] as $value) {
            if (!array_key_exists($value, $cupcake)) {
                $cupIsValid = false;
            } else {
                $cupcake = $_POST["cupcakes"];
            }
        }
    }

//    $total = 0;
//    if ($cupIsValid && $nameIsValid) {
//        $summary = "<p>Thank you, " . $name . ", for your purchase</p>";
//    }
}
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
        <p class="err" <?php if ($cupIsValid) echo "d-none"; ?> id="cup-err">Must select at least one cupcake</p>
        <p class="err1" <?php if ($nameIsValid) echo "d-none"; ?> id="cup-err">Must enter a name</p>
    </form>


<?php
//    echo $summary;
?>
</body>
</html>
