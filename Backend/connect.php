<?php
// Headers for Ionic Framework
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Method: POST, GET, PUT, DELETE, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Content-Type: text/plain');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With, Access-Control-Allow-Origin');

// Define named constants
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASSWORD', '');

    DEFINE('DB_NAME', 'itpel2_db');

// Establish connection - String connection
    $con = @mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die('Could not connect to database...');
?>