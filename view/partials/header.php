<?php
  if(is_null($title))
    $title = "Accueil";

echo <<< EOT
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico">
    <title>$title</title>
  </head>
EOT;
?>
