<?php

require 'curl_post.php';

$url = "http://whereatcloud.com/bletracker/api/v1/user/login";
$fields = $_POST;

$response = wa_curl_post($url, $fields);

header('Content-Type: application/json');
$user = json_decode($response);
if(isset($user->User_ID)) {
    session_start();
    $_SESSION['user'] = $user;
}
echo $response;