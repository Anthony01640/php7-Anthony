<?php
session_start();

if (!isset($_SESSION['email']) AND !empty($_GET['email'])) {
    $_SESSION['email'] = $_GET['email'];
}


if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}


?>
