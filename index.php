<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://paypaldimasv1.p.rapidapi.com/authorizeOrder",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "orderId=%3CREQUIRED%3E&amount=%3CREQUIRED%3E&accessToken=%3CREQUIRED%3E",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: PayPaldimasV1.p.rapidapi.com",
		"X-RapidAPI-Key: 9dfd5a4858mshdab0668358024ebp1fc90bjsn7b19c9cbf2e1",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
