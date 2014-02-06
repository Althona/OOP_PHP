<?php 
/**
 * This is a Latana pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Latana variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Latana container.
$Latana['title'] = "404";
$Latana['header'] = "";
$Latana['main'] = "This is a Latana 404. Document is not here.";
$Latana['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Latana.
include(LATANA_THEME_PATH);