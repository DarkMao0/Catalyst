<?php

require("includes/wtframework/includes.php");
require("globals.php");

$router = new Router();

/*
*   Main Page
*/
$router->add("/", "routes/index/index.ctrl.php");


/*
*   Authorization Pages
*/
$router->add("/auth", "routes/auth/auth.ctrl.php");
$router->add("/register", "routes/register/register.ctrl.php");