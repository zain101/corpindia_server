<?php
  function get_beneficiary($id)
  {
    return array('id' => $id,
                 'first_name' => 'ABC',
                 'last_name'  => 'XYZ',
                 'address1'   => 'address1',
                 'address2'   => 'address2',
                 'city'       => 'Mumbai',
                 'state'      => 'Maharashtra',
                 'zip'        => '400093',
                 'mother_name' => 'HIG XYZ',
                 'father_name' => 'PQR XYZ'
                 );
  }

  function update_beneficiary()
  {
    return 1;
  }

  function register_beneficiary()
  {
    return 1;
  }

  function get_similar_beneficiary($first_name, $last_name, $zip_code)
  {
    return array( 1 => array('first_name' => $first_name, 
                             'last_name' => $last_name,
                             'photo'     => 'abc.jpg'));
  }

  function get_centre_info($id)
  {
    return array('id' => $id, 'name' => 'Mahim centre');
  }

  function get_centres()
  {
    return array(array('id' => 1, 'name' => 'Mahim centre'),
                 array('id' => 2, 'name' => 'Dharavi centre'));
  }

  function get_programmes_for_centre($id)
  {
    return array(array('id' => 1, 'name' => 'Primary schooling'),
                 array('id' => 2, 'name' => 'Creche'));
  }

  function get_programme($id)
  {
    return array('id' => $id, 'name' => 'Creche');
  }
?>
