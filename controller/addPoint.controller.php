<?php

  //API Url
  $url = 'https://plateforme.api-agro.fr/api/push/1.0/paturage/realtime/push/?pushkey=13b536bd4d5e4d30d110b51a3ae8683d8ec90793819c7276d42b03ed';

  //Initiate cURL.
  $ch = curl_init($url);

  //Encode the array into JSON.
  $jsonDataEncoded = json_encode($_POST);

  //Attach our encoded JSON string to the POST fields.
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

  //Execute the request
  $result = curl_exec($ch);
  curl_close($ch);

  header('Location: /');





 ?>
