<?php
require_once 'vendor/autoload.php';

session_start();
session_unset();
session_destroy();
$google_client->revokeToken(); 
header("location: login.php");

?>