<?php
	
	//Connexion à la bdd 
	require("../Model/ConnexionBDD.php");
	
	if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}
	
	include_once('../Model/Mission.php');

	$offres = getAllOffreDisponible();
	include_once('../Model/Postuler.php');
	$postuler = getPostuler($_COOKIE["user"]);
	include_once('../Model/Interimaire.php');
	$id=getInterimaireId($_COOKIE["user"]);
	$postuler = getPostuler($id[0]);
	
	include_once('../View/offresEmploi.php');

	

	





