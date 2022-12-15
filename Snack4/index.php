<?php
    $number = [];
    while (count($number) < 15) {
        $numrandom= rand(50,100);
        if (!in_array($numrandom,$number)) {
            $number[] = $numrandom;
        };
    };
    var_dump($number);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>

</body>
</html>