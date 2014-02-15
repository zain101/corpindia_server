<?php
  if ($is_post)
  {
    die("POST NOT SUPPORTED");
  }
  else
  {
    if ($request_params['id'])
    {
      $response = get_centre_info($request_params['id']);
    }
    else
    {
      $response = get_centres();
    }
  }
  echo json_encode ($response);
?>
