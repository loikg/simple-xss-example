<?php

function connect_db() {
    $host = "localhost";
    $dbname = "simple-xss-example";
    $user = "root";
    $pass = "";

    $db = new PDO('sqlite:'.dirname(__FILE__).'/database.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    return $db;
}