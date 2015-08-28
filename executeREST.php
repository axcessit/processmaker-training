<?php
  function executeREST($url, $method = 'GET', $data = array(), $accessToken = ''){
 
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
    if($accessToken != ''){
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $accessToken));
    }
 
    if($method == 'POST'){
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    }
 
    if($method == 'PUT'){
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    }
 
    if($method == 'DELETE'){
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    }
 
    $curl_response = curl_exec($curl);
    $decoded = json_decode($curl_response, true);
    curl_close($curl);
 
    if( isset($decoded['error']) ) {
      echo 'Error during CURL request: ' . $decoded['error_description'];
      die;
    } else {
      return $decoded;
    }
     
  }
?>
