<?php
echo <<<EOT

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive img-circle" src="../assets/img/logo.png" alt="logo" width="20%">
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
                <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <h2>Ajouter des points d'eau</h2>
                          <hr class="star-primary">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                        <form action="../controller/addPoint.controller.php" method="post">
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Nom</label>
                                  <input type="text" class="form-control" placeholder="Nom" name="nom" required data-validation-required-message="Please enter your name.">
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
                                  <input type="number" step=any class="form-control" placeholder="Latitude" name="latitude" required data-validation-required-message="Please enter your phone number.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Longitude</label>
                                  <input type="number" step=any class="form-control" placeholder="Longitude" name="longitude" required data-validation-required-message="Please enter your phone number.">
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
                                  <textarea rows="2" class="form-control" placeholder="Description" name="description" required data-validation-required-message="Please enter a message."></textarea>
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
                <h2>Partenariats</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Notre mission est d 'offrir une plateforme qui permet la gestion raisonnée et collaborative des ressources d'eau.</p>
                <p>Elle est principalement destinée à être utilisée dans des milieux arides.</p>
            </div>
            <div class="col-lg-4">
                <p>L' eau est un bien commun autant travailler ensemble pour la préserver ! </p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="#" class="btn btn-lg btn-outline">
                    <i class="fa fa-info"></i> En savoir plus
                </a>
            </div>
        </div>
    </div>
</section>
EOT;
?>
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
