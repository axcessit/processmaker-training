<?php
 
  if(empty($_POST))
      header('Location: index.php');
 
  require_once('executeREST.php');
 
  function getAccessToken()
  {
    $params = array(
         'grant_type' => 'password',
         'scope' => '*',
         'client_id' => $_POST['client_id'],
         'client_secret' => $_POST['client_secret'],
         'username' => $_POST['user'],
         'password' => $_POST['password']
    );
    $url = $_POST['url'].'/'.$_POST['workspace'].'/oauth2/token';
    $data = executeREST( $url, 'POST', $params );
    return $data['access_token'];
  }
 
  session_start();
  $_SESSION['url'] = $_POST['url'];
  $_SESSION['ws'] = $_POST['workspace'];
  $_SESSION['access_token'] = getAccessToken();
  header("Location: list.php");
 
?>
