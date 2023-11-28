<?php 

define('APP',[
    'baseurl'=> 'http://www.gigasa-admin.com',
    'name'=> 'Gigasa Admin',
]);

define('FOLDER_APP', dirname(dirname (__FILE__)));
define('APP_ROOT', str_replace('\\','/',FOLDER_APP).'/');


/** db conf */
//define('DB_HOST', '192.168.1.92');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'admin');
define('DB_NAME','gigasa_db');
