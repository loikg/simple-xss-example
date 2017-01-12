<?php

    session_start();

    if (!empty($_POST['title']) && !empty($_POST['text'])) {
        $stmt = $db->prepare("INSERT INTO posts (title, text) VALUES (?, ?)");
        $stmt->execute(array(
            $_POST['title'],
            $_POST['text']
        ));
    } else {
        $_SESSION["flash"] = array("Missing title ot text field");
    }
    if (!isset($_SESSION['test'])) {
        $_SESSION['test'] = array();
    }
    array_push($_SESSION['test'], $_POST['title']);
    header('Location: index.php');