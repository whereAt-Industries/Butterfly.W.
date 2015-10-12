<?php
function wa_curl_post($url, $fields) {
    $fields['apiKey'] = urlencode("]wv2Np:c@e8V9@>r37g){18u.32lY");
    $fields_array = array();
    foreach($fields as $key=>$value) {
        $fields_array[] = $key.'='.$value;
    }
    $fields_string = implode('&', $fields_array);

    $ch = curl_init();

    $opts = array(
        CURLOPT_URL=>$url,
        CURLOPT_POST=>count($fields),
        CURLOPT_POSTFIELDS=>$fields_string,
        CURLOPT_RETURNTRANSFER=> true
    );

    curl_setopt_array($ch, $opts);

    $response = curl_exec($ch);

    curl_close($ch);
    return $response;
}