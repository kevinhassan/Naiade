<?php
$title = 'Connexion';
include "partials/header.php";
echo '<body id="page-top" class="index">';
include "partials/navbar.php";

echo <<< EOT
<header style="background-color: white;color:black;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="intro-text">
                    <h4>Vous voulez accèder à plus de fonctionnalités ?</h4>
                </div>
                <h1 class="text-center login-title">Pour cela connectez vous !</h1>
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                        alt="">
                    <form class="form-signin" action="../controller/login.controller.php" method='post'>
                    <!--<input type="email" class="form-control" placeholder="Email" name="email" required autofocus>-->
                    <input type="text" class="form-control" placeholder="Email" name="email" required autofocus>
                    <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Se connecter</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Se souvenir de moi
                    </label>
                    <a href="#contact" class="pull-right need-help">Besoin d'aide ? </a><span class="clearfix"></span>
                    </form>
                    <a href="register.php" class="text-center new-account"> S'enregistrer </a>
                </div>
          </div>
        </div>
    </div>
</header>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</header>
EOT;
            include('partials/contact.php');
echo <<< EOT
<style>
  .form-signin
  {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
  }
  .form-signin .form-signin-heading, .form-signin .checkbox
  {
      margin-bottom: 10px;
  }
  .form-signin .checkbox
  {
      font-weight: normal;
  }
  .form-signin .form-control
  {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
  }
  .form-signin .form-control:focus
  {
      z-index: 2;
  }
  .form-signin input[type="text"]
  {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
  }
  .form-signin input[type="password"]
  {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
  }
  .account-wall
  {
      margin-top: 20px;
      padding: 40px 0px 20px 0px;
      background-color: #f7f7f7;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .login-title
  {
      color: #555;
      font-size: 18px;
      font-weight: 400;
      display: block;
  }
  .profile-img
  {
      width: 96px;
      height: 96px;
      margin: 0 auto 10px;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
  }
  .need-help
  {
      margin-top: 10px;
  }
  .new-account
  {
      display: block;
      margin-top: 10px;
  }
</style>
EOT;
include "partials/footer.php";
?>
