<?php
require_once("model.php");

class ModelUtilisateur extends Model{
  private $pk_key = "idUser";
  private $table  = "Utilisateur";

  /**
  * Créér un compte utilisateur
  * TODO: Crypter les mots de passe dans la BD avant l'insertion
  * @param: data tableau associatif résultant d'un formulaire
  **/
  public function createUtilisateur($data){
    try{
      /*$sql = 'INSERT INTO '.$this->table.'(nom,prenom,mail,mdp)
              VALUES(:nom,:prenom,:mail,:mdp)';*/
      $sql = 'INSERT INTO '.$this->table.'(name,nickname,phone,date,job,country,email,password)
              VALUES(:name,:nickname,:phone,:date,:job,:country,:email,:password)';
      $res = $this->query($sql,array(':name'=> $data["name"],
                                     ':nickname'=> $data["nickname"],
                                     ':phone'=> $data["phone"],
                                     ':date'=> $data["date"],
                                     ':job'=> $data["job"],
                                     ':country'=> $data["country"],
                                     ':email'=> $data["email"],
                                     ':password'=> $data["password"]
                                    ));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout de l'utilisateur à la table " . $this->table);
    }
  }
  public function selectUtilisateur($email){
    $sql = 'SELECT * FROM utilisateur WHERE email= :email';
    $res = $this->query($sql,array(':email' => $email));
    return $res->fetch();
  }
}
?>
