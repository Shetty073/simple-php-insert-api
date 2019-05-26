<?php

// This file can be used for testing the POST method API
// This cannot be used for GET method API testing (GET is relatively simple to test)

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "contact_no: 9856321245",
        "gender: male",
        "name: Herlock Sholmes",
        "occupation: Detective"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}

?>
