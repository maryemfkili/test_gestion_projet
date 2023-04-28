<?php
$texte = "Ceci est  texte contenant plusieurs différentes  chaînes de caractères .";
$ch = "ch";

if(strpos($texte, $ch) !== false){
    echo "La chaîne '$ch' existe dans le texte.";
} else{
    echo "La chaîne '$ch' n'existepas dans le texte.";
}
?>
