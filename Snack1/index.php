<?php
    $array_match = [
        [
            'scorehome' => 150 . ' -',
            'teamhome' => 'golden state -',
            'scoreguest' => 135,
            'teamguest' => 'cleveland |',
        ],
        [
            'scorehome' => 130 . ' -',
            'teamhome' => 'sacramento -',
            'scoreguest' => 105,
            'teamguest' => 'toronto |',
        ],
        [
            'scorehome' => 75 . ' -',
            'teamhome' => 'memphis -',
            'scoreguest' => 89,
            'teamguest' => 'minnesota |',
            
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
<h1>Matches</h1>
    <ul>
        <?php
            $array_match_lenght = count($array_match);
            for ($i = 0; $i < $array_match_lenght ; $i++) { ?>
                <li>
                    <?php
                        echo sprintf('%s - %s | %d-%d', 
                                        $array_match[$i]['teamhome'], 
                                        $array_match[$i]['teamguest'], 
                                        $array_match[$i]['scorehome'], 
                                        $array_match[$i]['scoreguest']
                                    );
                    ?>
                </li>
        <?php } ?>    
    </ul>
</body>
</html>