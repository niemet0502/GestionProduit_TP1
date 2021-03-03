<?php
require_once '../model/ProduitManager.php';

$obj = new produitManager();

if(isset($_POST['valider'])) {

    $obj->addProduit($_POST);
    //var_dump($_POST);
    header("location: /gestionproduit/index.php");
}

if(isset($_POST['btnUpdateProduit'])) {
    $obj->updateProduit($_POST);
    header("location: /gestionproduit/index.php");
}

if(isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    $obj->deleteProduit($deleteid);
    header("location:index.php");
}

?>