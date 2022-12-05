<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");

ini_set('display_errors', 'on');

require(__DIR__ . "/settings.php");
require(__DIR__ . "/Methode.php");
require(__DIR__ . "/rest.php");

$M = new Methode;

if (!isset($_GET['action'])) {
    $M->apiError("No method specified");
}

if (!in_array($_GET['type'], $allowed_methods)) {
    $M->apiError("This method is not allowed");
}

if (!isset($_GET['type'])) {
    $M->apiError("This action is missing or not allowed");
}

$action = $_GET['action'];
$type = $_GET['type'];

try {
    call_user_func($M->caseString($action) . '::' . $M->caseString($type));
} catch (Exception $e) {
    $M->apiError("This Method don't exist" . $e);
}
