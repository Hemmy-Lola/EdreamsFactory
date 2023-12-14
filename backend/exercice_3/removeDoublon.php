<?php
class Calcul
{
    // déclaration d'une propriété
    public array $list_name;

    public function __construct(array $list_name)
    {
        $this->list_name = $list_name;
    }

    // déclaration des méthodes
    public function removeDoublon()
    {
        $arrLen = count($this->list_name);
        $new_list = [];
        $isDoublon = false;

        for ($i = 0; $i < $arrLen; $i++) {
            // à chaque fois qu'on change de "$i", on réinitilaise "$isDoublon" car si on a "true" une fois, il ne va rien rajouter dans "$new_list"
            $isDoublon = false;

            // on compare "$new_list" à "$this->list_name"
            // l'indice "$j" est associé à "$new_list" et 
            // "$i" est associé à "$this->list_name"
            for ($j = 0; $j < count($new_list); $j++) {
                if ($new_list[$j] === $this->list_name[$i]) {
                    $isDoublon = true;
                }
            }

            // dans le cas où il n'y a pas de doublon, on rajoute dans la nouvelle list
            if ($isDoublon == false) {
                array_push($new_list, $this->list_name[$i]);
            }
        }

        // on retourne la nouvelle liste
        return $new_list;
    }
}

$list_name = ["Chrisline", "Joël", "Chrisline", "Hemmy", "Abraham", "Joël", "Chrisline", "Joël", "Chrisline", "Joël"];

$calcul = new Calcul($list_name);
// "$calcul->removeDoublon();"

echo "Ancienne liste: <br/><br/>";
for ($i = 0; $i < count($list_name); $i++) {
    echo $list_name[$i] . "<br/>";
}
echo "<br/><br/>-----------------------------<br/><br/><br/>";
echo "Nouvelle liste: <br/><br/>";
$calcul = $calcul->removeDoublon();
for ($i = 0; $i < count($calcul); $i++) {
    echo $calcul[$i] . "<br/>";
}
