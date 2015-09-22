<?php
session_start();
if(isset($_SESSION['user'])) {
    $response = $_SESSION['user'];
} else {
    $response = array('error'=>'Authentication failed');
}
header('Content-Type: application/json');
echo json_encode($response);