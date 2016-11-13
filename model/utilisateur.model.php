<?php
require_once("model.php");

class ModelUtilisateur extends Model{
  private $pk_key = "user_id";
  private $table  = "Utilisateur";

  /**
  * Créér un compte utilisateur
  * TODO: Crypter les mots de passe dans la BD avant l'insertion
  * @param: data tableau associatif résultant d'un formulaire
  **/
  public function createUtilisateur($data){
    try{
      $sql = 'INSERT INTO '.$this->table.'(nom,prenom,mail,mdp)
              VALUES(:nom,:prenom,:mail,:mdp)';
      $res = $this->query($sql,$data);

    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout de l'utilisateur à la table " . $this->table);
    }
  }
}
?>
