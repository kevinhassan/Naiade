<?php
  require_once('../model/utilisateur.model.php');

  $email = htmlentities($_POST["email"],ENT_QUOTES);
  $mdp = htmlentities($_POST["password"],ENT_QUOTES);

  if(isset($email) && isset($mdp)){
    $newMdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');
    $utilisateur = new ModelUtilisateur();
    $user= array(
      'name' => $_POST["name"],
      'nickname' => $_POST["nickname"],
      'phone' => $_POST["phone"],
      'date' => $_POST["date"],
      'job' => $_POST["job"],
      'country' => $_POST["country"],
      'email' => $email,
      'password' => $newMdp
    );
    $utilisateur->createUtilisateur($user);
    echo "<script>alert('Le compte vient d\'être créé !);</script>";
    header('Location: /');
    }else{
      echo "<script>alert('Les informations saisies sont incorrectes !);</script>";
    }
?>
