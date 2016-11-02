<?php
  if(is_null($view)){
    $view="accueil";
  }
    include "partials/header.php";
    echo '<body id="page-top" class="index">';
    include "partials/navbar.php";
    include VIEW_PATH. $view . '.view.php';
    include "partials/footer.php";
    echo "</body></html>";
?>
