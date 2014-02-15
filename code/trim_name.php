<?php
include_once 'connect.php';
function insertBen($ben_id,$ben_name,$family_name,$sex,$dob,$address,$loc,$city,$state,$zip,$photo)      
{
   $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
   
  $fname_c=""; 
  $name_c="";
  for($i=0;i<strlen($ben_name);$i++)
  {
     
      $ch=  substr($ben_name, $i, 1);
      if(!($ch == 'a' || $ch == 'A' || $ch == 'e' || $ch == 'E' || $ch == 'i' || 
			$ch == 'I' || $ch == 'o' || $ch == 'O' || $ch == 'u' || $ch == 'U'))
                  $GLOBALS['fname_c'] += $GLOBALS['ch'];    
  }
  
  for($i=0;i<strlen($family_name);$i++)
  {
     
      $ch=  substr($family_name, $i, 1);
      if(!($ch == 'a' || $ch == 'A' || $ch == 'e' || $ch == 'E' || $ch == 'i' || 
			$ch == 'I' || $ch == 'o' || $ch == 'O' || $ch == 'u' || $ch == 'U'))
                  $GLOBALS['name_c'] += $GLOBALS['ch'];    
  }
  echo "$fname_c";
  echo "$name_c";
  mysqli_query($con,"INSERT INTO ben 
VALUES ($ben_id,$ben_name,$fname_c,$family_name,$name_c,$sex,$dob,$address,$loc,$city,$state,$zip,$photo)");

mysqli_close($con); 


}
?>
