<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>Accueil</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img alt="Brand" src="...">
              </a>
            </div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active">
                <li><a href="#">Accueil <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Cartographie <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Partenaires <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Nous contacter <span class="sr-only">(current)</span></a></li>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Se connecter <span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!--
        Accueil
        Cartographie
        Nous contacter
        Partenaires
        Connexion/deconnexion
    -->
		<header>
			<figure>
				<img src="Img/logo.png" alt="Logo de l'entreprise" />
			</figure>

			<div id="menu" >
				<?php include("View/menus.php"); ?>
			</div>

			<div id="connexion">
				<?php include("View/connexion.php"); ?>
			</div>


		</header>

		<article id="présentation">
			<p> L'agence EmploiTech est une agence créée en 2016 par d'anciens élèves de l'école d'ingénieur Polytech Montpellier. Elle a
			pour mission d'aider les intérimaires (et les personnes ayant ratées Polytech) à trouver un travail malgré des difficultés importantes en cette période.
			Pour cela, l'agence EmploiTech a misé sur la mise en place de recherches d'offres d'emplois en ligne et laissant la possibilité aux inscrits d'EmploiTech de
			pouvoir postuler sur certaines missions. Et nous l'espérons signer votre contrat de demain ! </p>
			</article>

			<footer>
		<div id="cookie" class="alert alert-warning" role="alert">
				<p> En utilisant EmploiTech, vous acceptez que nous appliquions des cookies afin de vous offrir une expérience optimale. </p>
				</div>
				<p> Ce site web a été réalisé dans le cadre d'un projet d'architecture Web par Godefroi Roussel, le contenu de la page "Pourquoi nous choisir" a
				été pris du site www.randstad.fr/pourquoi-choisir-randstad/ .</p>
				<p>Tous droits réservés.</p>

		</footer>
	</body>

</html>
