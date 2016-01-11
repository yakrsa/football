<?php
define('DOMAIN','pubm.vanvei.com');
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', DOMAIN);
define('APP_DEBUG',True);
define('APP_NAME', 'iVanvicms');
define('CONF_PATH','./Data/conf/');
define('RUNTIME_PATH','./Data/logs/');
define('TMPL_PATH','./tpl/');
define('HTML_PATH','./Data/html/');
define('APP_PATH','./iVanvicms/');
define('CORE','./iVanvicms/_Core');
 
require(CORE.'/iVanvicms.php');
