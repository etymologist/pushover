<?php
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.pushover.net/1/messages.json",
  CURLOPT_POSTFIELDS => array(
  "token" => "",
  "user" => "",
  "title" => "system boot!",
  "url" => "https://example.com",
  "message" => "example has rebooted.",
  "sound" => "siren",
)));
curl_exec($ch);
curl_close($ch);
?>
