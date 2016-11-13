<?php
  global $ROOT,$DS, $VIEW_PATH, $MODEL_PATH, $CONTROLLER_PATH, $ASSET_PATH;
  $ROOT = dirname('index.php');
  $DS = dirname(DIRECTORY_SEPARATOR);
  $VIEW_PATH = $ROOT . $DS . 'view' . $DS;
  $MODEL_PATH = $ROOT . $DS . 'model' . $DS;
  $CONTROLLER_PATH = $ROOT . $DS . 'controller' . $DS;
  $ASSET_PATH = $ROOT .$DS . 'assets' . $DS;

  $title="Naiade";
  include $VIEW_PATH.'accueil.php';
?>
