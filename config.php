<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PORT', 3306);
define('PASS', '1234');
define('BASE', 'abrigo');

$conn = new MySQLi(HOST, USER, PASS, BASE);