<?php
  //API Url
  $url = 'https://plateforme.api-agro.fr/api/push/1.0/puits/realtime1/push/?pushkey=b4a05c6e96bc4133311393e6233736e03fbabfd2e06456663f9e4a27';
  //Initiate cURL.
  $ch = curl_init($url);
  //Encode the array into JSON.
  $jsonDataEncoded = json_encode($_POST);
  //Attach our encoded JSON string to the POST fields.
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
  //Execute the request
  $result = curl_exec($ch);
  echo $result;
 ?>
