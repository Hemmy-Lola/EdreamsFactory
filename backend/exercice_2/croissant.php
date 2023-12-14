<?php

$random_words = [
    "ape", "apple", "zoo", "pie", "elephant", "banana",
    "picnic", "eye"
];
// On a 8 éléments dans le tableau:
// On commence par compter à partir de 0 donc on va de 0 à 7

function Test($random_words)
{
    // Ici, on va venir compter le nombre de valeurs présentent dans le tableau:
    $arrLen = count($random_words);
    // On va prendre "i" pour parler du premier élément dans le tableau et étant donné qu'on ne sait pas encore commment il doit être classé, on va partir du principe qu'il s'agit de 0.
    for ($i = 0; $i < $arrLen; $i++) {
        // On part du principe que le minimum est "i" donc 0 qui est le premier élément de notre tableau
        $min = $i;
        // On va venir créer une boucle de sorte à comparer tous les éléments dans le tableau
        for ($j = $i + 1; $j < $arrLen; $j++) {
            // "j" est la valeur se situant après "i" donc 1
            // Si on précise que "j" doit toujours être plus petit que le nombre d'éléments comptés étant donné qu'on commence à 0 et non à 1
            // Dans notre cas : on a 8 éléments qu'on compte de la manière suivante: 0, 1, 2, 3, 4, 5, 6, 7
            // Ici, on cherche à compter le nombre de caractères pour chaques élements de la liste, et de comparer de sorte à ce que si le deuxième élément a moins de caractères que le premier, il va prendre sa place et ne plus être comparé
            // Sinon on va faire "j+1" pour pouvoir aller comparer avec les autres éléments de notre tableau
            // On pourra également prendre le cas de figure où les éléments ont le même nombre de caractères: On va aller les classer par ordre alphabétique

            if (strlen($random_words[$j]) < strlen($random_words[$min])) {
                $min = $j;
                // Dans un cas de figure où le nombre de caractères est identique: on va trier dans l'ordre alphabéthique
            } elseif (strlen($random_words[$j]) === strlen($random_words[$min])) {
                if ($random_words[$j] < $random_words[$min]) {
                    $min = $j;
                }
            }
        }
        $tmp = $random_words[$min];
        $random_words[$min] = $random_words[$i];
        $random_words[$i] = $tmp;
    }
    return $random_words;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri de ma liste</title>
</head>

<body>
    <?php
    // avec "var_dump", on va afficher chaque élément de la liste, leurs nature et le nombre de caractères que chacuns possèdent
    var_dump(test($random_words));
    ?>
</body>

</html>