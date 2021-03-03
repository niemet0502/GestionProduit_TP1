<?php

class Produit {
   
    private $_reference;
    private $_nom;
    private $_stock;
    private $_prix;


    public function getReference(){
        return $this->_reference;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getStock(){
        return $this->_stock;
    }

    public function getPrix(){
        return $this->_prix;
    }

    public function setReference($reference){
        $this->_reference = $reference;
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function setStock($stock){
        $this->_stock = $stock;
    }

    public function setPrix($prix){
        $this->_prix = $prix;
    }

    
}