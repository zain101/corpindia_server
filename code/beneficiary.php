<?php
  include('api.php');

  if (isset($request_params['id']))
  {
    // The beneficiary already exists and is known. This is an update/get request.

    if ($is_post)
    {
      // Update request
      $response = update_beneficiary();
    }
    else
    {
      $response = get_beneficiary($request_params['id']);
    }
  }
  else
  {
    // Beneficiary is being registered (probably new).
    if ($is_post)
    {
      $response = register_beneficiary(); // TODO :  Use parameters as required
    }
    else
    {
      $first_name = $request_params['first_name'];
      $last_name  = $request_params['last_name'];
      $zip_code   = $request_params['zip'];
      $response = get_similar_beneficiary($first_name, $last_name, $zip_code);  // TODO : Use parameters for searching. 
    }
  }
  
  echo json_encode($response);
?>
