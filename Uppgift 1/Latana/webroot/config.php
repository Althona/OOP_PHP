<?php

error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Latana paths.
 *
 */
define('LATANA_INSTALL_PATH', __DIR__ . '/..');
define('LATANA_THEME_PATH', LATANA_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(LATANA_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Latana variable.
 *
 */
$Latana = array();
 
 
/**
 * Site wide settings.
 *
 */
$Latana['lang'] = 'sv';
$Latana['title_append'] = ' | Latana en webbtemplate';

$Latana['header'] = <<<EOD
<link rel='shortcut icon' href='favicon.ico'/>
<img class='sitelogo' src='img/Latana.JPG' alt='Latana Logo'/>
<span class='sitetitle'>Latana webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$Latana['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Måns Schütz | </span></footer>
EOD;
/**
 * Theme related settings.
 *
 */
$Latana['stylesheets'] = array('css/style.css');
$Latana['favicon']    = 'favicon.ico';


$Latana['navbar'] = array(
  'class' => 'nav-div',
  'items' => array(
    'hem'         => array('text'=>'Hem',       'url'=>'hello.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se min källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);

?>