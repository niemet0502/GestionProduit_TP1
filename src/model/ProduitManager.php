<?php
class ProduitManager {

    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'dbproduit';
    private $db;

    function __construct() {
        $this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        if($this->db->connect_error) {
            echo 'erreur lors de la connexion';
        }else{
            return $this->db;
        }
    }

    public function addProduit($post) {
        $reference = $post['reference'];
        $nom = $post['nom'];
        $stock = $post['stock'];
        $prix = $post['prix'];

        $req = "INSERT INTO produit(ref,nom,stock,prix) VALUES('$reference','$nom','$stock','$prix')";
        $res = $this->db->query($req);
        if($res) {
            header("location:index.php?msg=ins");
        }else{
            echo "Error ".$req."<br>".$this->db->error;
        }
    }

    public function getProduitAll() {
        $req = "SELECT * FROM produit";
        $res = $this->db->query($req);
        if($res->num_rows>0) {
            while($row = $res->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getProduitById($editid) {
        $req = "SELECT * FROM produit WHERE id = '$editid'";
        $res = $this->db->query($req);
        if($res->num_rows==1) {
           $row = $res->fetch_assoc();
           return $row;
        }  
      }

      public function updateProduit($post) {
        $editid = $post['id'];
        $reference = $post['reference'];
        $nom = $post['nom'];
        $stock = $post['stock'];
        $prix = $post['prix'];

        $req = "UPDATE produit SET ref='$reference',nom='$nom',stock='$stock',prix='$prix' WHERE id = '$editid' ";
        $res = $this->db->query($req);
        if($res) {
            header("location:index.php?msg=upd");
        }else{
            echo "Error ".$req."<br>".$this->db->error;
        }
    }

    public function deleteProduit($deleteid) {
        $req = "DELETE FROM produit WHERE id = $deleteid";
        $res = $this->db->query($req);
        if($res) {
            header("location:index.php?msg=del");
        }else{
            echo 'erreur lors de la suppression';
        }
    }
  


}