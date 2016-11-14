<?php
  require_once('../model/utilisateur.model.php');

  $email = htmlentities($_POST["email"],ENT_QUOTES);
  $mdp = htmlentities($_POST["password"],ENT_QUOTES);

  if(isset($email) && isset($mdp)){
    $newMdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');
    $utilisateur = new ModelUtilisateur();
    $user= array(
      'password' => $newMdp,
      'email' => $email
    );
    $data = $utilisateur->createUtilisateur($user);
    }else{
      echo "Les informations saisies sont incorrectes !";
    }
?>
