<!-- Dans ce fichier, on va utiliser la framework PHPUnit qui a pour but de tester si notre fonction marche correctement -->
<!-- On installe alors "Vendor" à notre fichier -->

<?php
// On appel le fichier où se trouve notre fonction à tester:
require_once "removeDoublon.php";

use PHPUnit\Framework\TestCase;

class removeDoublon_test extends TestCase
{
    public function test_removeDoublon_test()
    {
        // arrange(mise en place): création de mon object; on vient mettre un contexte à notre test
        $list_name = ["Sira", "Félicia", "Sira", "Hemmy", "Jonathan", "Félicia", "Sira", "Félicia", "Sira", "Félicia"];

        $calcul = new Calcul($list_name);

        // act(agir):Ici, on va venir tester notre fonctionnalité
        $calcul = $calcul->removeDoublon();


        // assert(affirmer): Indique ici le résultat attendu. On pourra ainsi voir si le test est réussi ou non 
        $this->assertEquals($calcul, ["Sira", "Félicia", "Hemmy", "Jonathan"]);
    }
}


// On va ensuite entrer la commande suivante dans notre terminale afin de vérifier tout cela: "vendor/bin/phpunit C:\xampp\htdocs\EdreamsFactory\backend\exercice_3\removeDoublon_test.php" qui comprenant le chemin d'accès de mon fichier de test