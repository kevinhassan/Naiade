<?php
  require_once('../vendor/autoload.php');
  use Lcobucci\JWT\Builder;
  use Lcobucci\JWT\Signer\Hmac\Sha256;

  function connexion(){
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
  $email = htmlentities($_POST["email"],ENT_QUOTES);
  $mdp = htmlentities($_POST["password"],ENT_QUOTES);

  if(!isset($email) && !isset($mdp)){
    $sql = 'SELECT * FROM users WHERE email= :email';
    $res = $this->query($sql,array(":libelle"=>$id));
    if(crypt($mdp, $data["password"]) == $data["password"]){
      echo "vous êtes connecté";
      $data = array(
        "email" => $email
      );
      $token = generate_jwt($data);
      setcookie("token", $token,$time_expiration, "/");
      /* get token from cookie
        $token = $_COOKIE["token"];
      echo "</br>".$token->getClaim("email");
              */
    }else{
      echo "<script>alert('Erreur dans les informations entrées')</script>";
      header("Location: /login");
    }
  }else{
    header("Location: /login");
  }
?>
