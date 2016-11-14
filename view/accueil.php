<?php
include "partials/header.php";
echo '<body id="page-top" class="index">';
include "partials/navbar.php";

echo <<<EOT
<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive img-circle" src="/assets/img/logo.png" alt="logo" width="20%">
                <div class="intro-text">
                    <span class="name">Naïade</span>
                    <hr class="star-light">
                    <span class="skills">La plateforme au service du bien commun !</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="cartographie" ng-app="ods-widgets">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Cartographie</h2>
                <hr>
                <h5 class="links" onclick="switchIframe(this)">Toutes les zones d'eau</h5>
                <div class="container" id="allWater">
                  <ods-dataset-context  context="puits" puits-domain="plateforme.api-agro.fr" puits-dataset="puits" puits-apikey="f7a0efd008692d3d8aa6308d5c7c8fc0ff5eed0ab849677ba18aa6e8">
                      <ods-map context="puits" location="4,33.72813,27.03955" basemap="mapbox.satellite"></ods-map>
                  </ods-dataset-context>
EOT;
if(!is_null($_COOKIE["token"])){
echo<<<EOT
                <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <h2>Ajouter des points d'eau</h2>
                          <hr class="star-primary">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                      <form name="addPoint" id="addPointForm" method="post" action="../controller/addPoint.controller.php" onsubmit="return confirm('Voulez vous ajouter cette zone d\'eau ?');">
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Nom</label>
                                  <input type="text" class="form-control" placeholder="Nom" name="nom" required data-validation-required-message="Veuillez entrer un nom.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Type</label>
                                  <select class="form-control" name="type">
                                          <option>Oasis</option>
                                          <option>Puits</option>
                                          <option>Forage</option>
                                  </select>
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Latitude</label>
                                  <input type="number" step=any class="form-control" placeholder="Latitude" name="latitude" required data-validation-required-message="Veuillez entrer une latitude.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Longitude</label>
                                  <input type="number" step=any class="form-control" placeholder="Longitude" name="longitude" required data-validation-required-message="Veuillez entrer une longitude.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Potabilité</label>
                                  <select class="form-control" name="potabilite">
                                          <option>N.C</option>
                                          <option>Oui</option>
                                          <option>Non</option>
                                  </select>
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Description</label>
                                  <textarea rows="2" class="form-control" placeholder="Description" name="description" required data-validation-required-message="Veuillez entrer une description."></textarea>
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
                        </form>
                      </div>
                    </div>
                  </div>
EOT;
}
echo<<<EOT
                </div>
                <h5 class="links" onclick="switchIframe(this)">Les zones d'eau avec relevé</h5>
                <div class="container" id="allReleves">
                  <ods-dataset-context  context="releve" releve-domain="plateforme.api-agro.fr" releve-dataset="releve" releve-apikey="f7a0efd008692d3d8aa6308d5c7c8fc0ff5eed0ab849677ba18aa6e8">
                      <ods-map context="releve" location="9,32.95521,10.00168" basemap="mapbox.satellite"></ods-map>
                  </ods-dataset-context>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- About Section -->
<section class="success" id="partenaire">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Ils nous soutiennent !</h2>
                <hr>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <img class="media-object" src="/assets/img/raddo.png" alt="logo" width="40%">
                <div class="intro-text">
                    <blockquote><p>"Votre projet de recherche me semble très pertinent surtout que dans les zones arides et les oasis, il faut faire face à plusieurs défis autour de la gestion des ressources hydriques."
                        <br><small>RADDO</small></p>
                    </blockquote>
                </div>
            </div>
            <div class="media-right">
                <img class="media-object" src="/assets/img/esf.png" alt="logo" height="20%">
                <blockquote><p>"Une proposition très intéressante qui pourrait être par exemple un super outils d’aide à la décision pour les éleveurs transhumants dans la zone sahélienne pour préciser leurs choix de parcours pour l’abreuvement du bétails."
                    <br><small>Elevages Sans Frontières</small></p>
                </blockquote>
            </div>
        </div>
    </div>
</section>
EOT;
include("partials/contact.php");
echo<<<EOT
<style>
  #allWater, #allReleves{
    display: none;
  }
</style>
<script>
  function switchIframe(h5){
    $(function() {
      if(h5.innerHTML == "Toutes les zones d'eau"){
        if ($("#allWater").css('display') === 'none'){
          $("#allWater").css("display", "initial");
          $("#allReleves").css("display", "none");
        }else{
          $("#allWater").css("display", "none");
        }
      }
      else{
        if ($("#allReleves").css('display') === 'none'){
          $("#allReleves").css("display", "initial");
          $("#allWater").css("display", "none");
        }else{
          $("#allReleves").css("display", "none");
        }
      }
    });
  }
</script>
EOT;
include "partials/footer.php";
?>
