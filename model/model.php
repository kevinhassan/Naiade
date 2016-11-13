<?php

abstract class Model {

  // Objet PDO d'accès à la BD
  private $bd;

  // Exécute une requête SQL éventuellement paramétrée
  protected function query($sql, $params = null) {
    if ($params == null) {
      $resultat = $this->getBd()->query($sql);    // exécution directe
    }
    else {
      $resultat = $this->getBd()->prepare($sql);  // requête préparée
      $resultat->execute($params);
    }
    return $resultat;
  }

  // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
  private function connexion() {
    if ($this->bd == null) {
      // Création de la connexion
      $dbname='d32beon5hb13l6';
      $host='ec2-54-228-247-206.eu-west-1.compute.amazonaws.com';
      $dbuser='ymnqezzmtxqxel';
      $dbpass='T7CYhHiAr3nP698thKvu77Tr9F';
      try
      {
        $bd = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bd;
      }
      catch (PDOException $e)
      {
        echo $e->getMessage();
        die('<br> Echec lors de la connexion à la BD');
      }
    }
    return $this->bd;
  }
}
?>
