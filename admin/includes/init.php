<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT',  'C:' . DS . 'wamp64' . DS . 'www' . DS . 'gallery');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT. DS. 'admin' . DS. 'includes');



require_once("functions.php");
require_once("config.php");
require_once("Database.php");
require_once("Db_object.php");
require_once("Photo.php");
require_once("User.php");
require_once("Session.php");
require_once("Comment.php");
require_once("Paginate.php");



?>