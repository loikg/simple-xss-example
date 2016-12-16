<?php

    session_start();

    require_once("db.php");
    $db = connect_db();

    $posts = $db->query('SELECT * FROM posts')->fetchAll();

    include("index.tpl.php");
?>