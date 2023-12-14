<?php
//Exercice 1
$messyArray = [
    "Marguerite" => "Orange",
    "Kiwi",
    7 => "Pomme",
    [
        "Prune",
        "Cerise" => "Cerise"
    ]
];
// Dans notre cas de figure on peut observer un tableau comprenant 4 éléments, 
// Certains possèdent de clés spécifiques et d'autres non
// Ici peut voir que "Marguerite" est la clé de "Orange", que "7" est celle de "Pomme" et que "Cerise" est celle de "Cerise"
// "Kiwi" et "Prune" n'ont pas de clés spécifique, donc on va s'interesser aux index, commençant à 0
// "Kiwi" est associé à l'index 0


$Kiwi = $messyArray[0];
// on récupère messyArray à l'index 8 car php récupère le dernier index défini, ici 7 + 1
$subMessyArray = $messyArray[8];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes fruits</title>
</head>

<body>

    <?php
    // kiwi 
    echo $Kiwi . "<br/>";
    // prune
    echo $subMessyArray[0] . "<br/>";
    // cerise
    echo $subMessyArray["Cerise"];

    ?>

</body>

</html>