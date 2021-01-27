<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['send'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $domain = isset($_POST['domain']) ? $_POST['domain'] : '';
    $fio = isset($_POST['fio']) ? $_POST['fio'] : '';

    if (!$email || !$domain || !$fio) {
        exit('incorrect form');
    }
    $checkEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($checkEmail === false) {
        exit('Email not valid');
    }
    $checkDomain = filter_input(INPUT_POST, 'domain', FILTER_VALIDATE_DOMAIN);
    if ($checkDomain === false){
        exit('Domain error');
    }
    $checkFIO = filter_var($_POST['fio'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $checkFIO = strlen($fio);
    if ($checkFIO < 5 && $checkFIO > 20) {
        exit('incorrect FIO');
    }
    $message = "Email: " . $email . ', Domain: ' . $domain . ', Name: ' . $fio . "\r";
    file_put_contents('result.txt', $message, FILE_APPEND);

}