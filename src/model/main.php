<?php
function chargerClasse($classe)
{
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');

//spl_autoload_register('chargerClasse');

$db = new PDO('mysql:host=localhost;dbname=phppoo', 'root', '');

$manager = new produitManager($db);



?>


