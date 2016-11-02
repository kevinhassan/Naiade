<?php
  if(is_null($view)){
    $view="accueil";
  }
    include "partials/header.php";
    echo "<body>";
    include "partials/navbar.php";
    include VIEW_PATH. $view . '.view.php';
    include "partials/footer.php";
    echo "</body></html>";
?>
