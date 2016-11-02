<?php
  if(is_null($title))
    $title = "Accueil";

echo <<< EOT
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <!-- Theme CSS -->
    <link href="../../assets/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="../../assets/img/favicon.ico">
    <title>$title</title>
  </head>
EOT;
?>
