<?php

require 'curl_post.php';

$url = "http://whereatcloud.com/bletracker/api/v1/settings";
$fields = $_POST;

$response = wa_curl_post($url, $fields);

header('Content-Type: application/json');
$status = json_decode($response);

//TODO: Change property from 'succes' to 'success' when typo is corrected in API
if(isset($status->succes) && $status->succes) {
    session_start();
    if(isset($_SESSION['user'])) {
        $_SESSION['user']->Alert = $_SESSION['user']->Alert?0:1;
    }
}
echo $response;