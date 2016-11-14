<?php
$title = 'Connexion';
include "partials/header.php";
echo '<body id="page-top" class="index">';
include "partials/navbar.php";

echo <<< EOT
<header style="background-color: white;color:black;">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
              <h2>S'enregistrer à la plateforme</h2>
              <hr class="star-primary">
          </div>
      </div>
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <form name="sentMessage" id="contactForm" method="post" action="../../controller/contact.controller.php" onsubmit="return confirm('Voulez vous envoyer ce message ?');">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="name" required data-validation-required-message="Veuillez entrer votre nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Prénom</label>
                        <input type="text" class="form-control" placeholder="Prénom" name="nickname" required data-validation-required-message="Veuillez entrer votre nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Numéro Téléphone</label>
                        <input type="tel" class="form-control" placeholder="Numéro de téléphone"  name="phone" id="phone" required data-validation-required-message="Veuillez entrer votre numéro de téléphone.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Date de naissance</label>
                        <input type="date" class="form-control" placeholder="Date" name="date" required data-validation-required-message="Veuillez entrer votre nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Métier</label>
                        <select class="form-control" name="job">
                                <option>Agriculteur</option>
                                <option>Eleveur</option>
                                <option>Autre</option>
                        </select>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required data-validation-required-message="Veuillez entrer votre nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password" required data-validation-required-message="Veuillez entrer votre adresse mail.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>
                </div>
                <a href="#contact" class="pull-right need-help">Un problème ? </a><span class="clearfix"></span>
              </form>
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
include "partials/footer.php";
?>
