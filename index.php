<?php
//
// PHASE: BOOTSTRAP
//
define('TUBE_INSTALL_PATH', dirname(__FILE__));
define('TUBE_SITE_PATH', TUBE_INSTALL_PATH . '/site');

require(TUBE_INSTALL_PATH.'/src/CTube/bootstrap.php');

$tube = CTube::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$tube->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$tube->ThemeEngineRender();