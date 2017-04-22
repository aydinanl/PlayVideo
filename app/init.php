<?php
//URL ve VIEW_PATH yollarını belirtmek için gerekli kodlar.
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
define("VIEW_PATH","../app/views/");

require 'core/App.php';
require 'core/Controller.php';


