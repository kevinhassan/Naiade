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
                    <h4>Vous voulez accéder à plus de fonctionnalités ?</h4>
                </div>
                <h1 class="text-center login-title">Pour cela connectez vous !</h1>
                <div class="account-wall">
                  <img class="profile-img" src="/assets/img/userLogo.png" alt="logo Compte">
                  <form class="form-signin" action="../controller/login.controller.php" method='post'>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>Email</label>
                          <input type="email" class="form-control" placeholder="Email" name="email" required data-validation-required-message="Veuillez entrer votre Email.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>Mot de passe</label>
                          <input type="password" class="form-control" placeholder="Mot de passe" name="password" required data-validation-required-message="Veuillez entrer votre mot de passe.">
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                          <button class="btn btn-success btn-lg" type="submit">
                              Se connecter</button>
                        </div>
                    </div>
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
      margin-left: 5px;
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
  .account-wall
  {
      margin-top: 20px;
      padding: 40px 0px 0px 0px;
      background-color: #f7f7f7;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      border-bottom-left-radius: 2em;
      border-bottom-right-radius: 2em;

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
      background-color: grey;
      margin-top: 10px;
      margin-bottom:0;
      shadow-box: 1px 2px;
      color: white;
      border-bottom-left-radius: 2em;
      border-bottom-right-radius: 2em;
  }
</style>
EOT;
include "partials/footer.php";
?>
