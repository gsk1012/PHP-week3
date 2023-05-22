<?php

// deel 1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
array_push($myArray, 'motor');
//

//deel 2
$aantal = count($myArray);
//

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //deel 1
    var_dump($myArray);
    //

    //deel 2
    echo "Array heeft $aantal elementen";
    //

    //deel 3
    // regel 2 = bar
    // regel 5 = 4
    // regel 8 = toyota
    // regel 9 = 3
    // regel 12 = 5
    // regel 19 = 4
    //

    // deel 4a
    $cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

    $gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);

    echo "Gemmidelde is: " . $gemiddelde;
    //

    //deel 4b
    // Ik denk dat het beter is om de regels samen te voegen, omdat het makkelijker is om de code te begrijpen in plaats van meerdere variables aan te maken
    //

    ?>
</body>
</html>