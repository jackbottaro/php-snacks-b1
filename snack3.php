<!-- 
    Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->

<?php
$min = 1;
$max = 50;
$quantity = 15;


$rndNums = [];
while (count($rndNums) < $quantity) {
    do {
        $rndNum = mt_rand($min, $max);
    } while (in_array($rndNum, $rndNums));
    $rndNums[] = $rndNum;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>


<body>
    <h3>I numeri sono:</h3>
    <ul>
        <?php for ($i = 0; $i < count($rndNums); $i++) { ?>
            <li> <?php echo $rndNums[$i] ?></li>
        <?php } ?>
    </ul>

</body>

</html>