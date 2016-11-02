<?php
  /**
  * Ajout des variables globales pour les emplacements
  **/
  define('ROOT', dirname(__FILE__));
  define('DS', dirname(DIRECTORY_SEPARATOR));
  define('VIEW_PATH', ROOT . DS . 'view' . DS);
  define('MODEL_PATH', ROOT . DS . 'model' . DS);
  define('CONTROLLER_PATH', ROOT . DS . 'controller' . DS);
  define('ASSET_PATH',ROOT . DS . 'assets' . DS);

  include VIEW_PATH . 'layout.php';
?>
