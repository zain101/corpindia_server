<?php
  if (isset($request_params['centre_id']))
  {
    $response = get_programmes_for_centre($request_params['centre_id']);
  }
  else if(isset($request_params['id']))
  {
    $response = get_programme($request_params['id']);
  }
  echo json_encode($response);
?>
