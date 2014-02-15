<?php
  include('mock_services.php');

  $is_post = false;
  if ($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    echo 'post set!';
    $is_post = true;
  }

  $request_params = array_merge($_GET, $_POST);

  $response = '';
?>
