<?php
  require_once('../vendor/autoload.php');
  require_once('../model/utilisateur.model.php');
  use Lcobucci\JWT\Builder;
  use Lcobucci\JWT\Signer\Hmac\Sha256;

  function generate_jwt($data) {
    $time_expiration = time() + (3600 *25); //24h
    $signer = new Sha256();
    $privateKey = "secretkey";
    $token = (new Builder())->setIssuer('http://example.com') // Configures the issuer (iss claim)
                            ->setAudience('http://example.org') // Configures the audience (aud claim)
                            ->setId('4f1g23a12aa', true) // Configures the id (jti claim), replicating as a header item
                            ->setIssuedAt(time()) // Configures the time that the token was issue (iat claim)
                            ->setNotBefore(time() + 60) // Configures the time that the token can be used (nbf claim)
                            ->setExpiration($time_expiration) // Configures the expiration time of the token (nbf claim)
                            //->set('uid', 1) // Configures a new claim, called "uid"
                            ->set('email', $data["email"]) // Configures a new claim, called "uid"
                            ->sign($signer, $privateKey) // creates a signature using "testing" as key
                            ->getToken(); // Retrieves the generated token


    $token->getHeaders(); // Retrieves the token headers
    $token->getClaims(); // Retrieves the token claims
    return $token;
  }

$time_expiration = time() + (3600 *25); //24h
if(is_null($_COOKIE["token"])){//Se connecter
  $email = htmlentities($_POST["email"],ENT_QUOTES);
  $mdp = htmlentities($_POST["password"],ENT_QUOTES);
  if(isset($email) && isset($mdp)){
    $utilisateur = new ModelUtilisateur();
    $data = $utilisateur->selectUtilisateur($email);
    if(crypt($mdp, $data["password"]) == $data["password"]){
      $data = array(
        "email" => $email
      );
      $token = generate_jwt($data);
      setcookie("token", $token,$time_expiration, "/");
      echo "<script>alert('Vous êtes connecté !');</script>";
      header('Location: /');
      /* get token from cookie
        $token = $_COOKIE["token"];
      echo "</br>".$token->getClaim("email");
              */
    }else{
      echo "<script>alert('L'utilisateur n\'existe pas !');</script>";
    }
  }
}
else{//Se déconnecter
  setcookie("token", "", time()-1000000,'/');
  unset($_COOKIE["token"]);
  header('Location: /');
}
?>
