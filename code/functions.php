<?php
include_once 'connect.php';
function insert($ben_id,$ben_name,$family_name,$sex,$dob,$address,$loc,$city,$state,$zip,$photo)
{
    $con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $target= 'images/'.basename($photo);
    move_uploaded_file($_FILES['upload']['tmp_name'], $target);
    
    $query="INSERT INTO ben VALUES ('$ben_id','$ben_name','null','$family_name','null','$sex','$dob','$address','$loc','$city','$state',$zip,'$photo')";
    $data=mysqli_query($con,$query) or die ("query failed");
   
    
}

    
function display()
{
    $con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query="SELECT Photo from ben where ben_id=432";
    $data=  mysqli_query($con, $query);
    $row=  mysqli_fetch_array($data);
    echo'<img src="'. $row[0] .'" />';
}
function search($name,$fname,$location)
{
  $con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $query="SELECT * FROM ben where ben_Fname='$name' and Family_name='$fname' and loc='$location'";
   $data=  mysqli_query($con,$query);
  while($row= mysqli_fetch_array($data))
  {
      echo "<html>";
      echo "<body>";
      echo "<table><tr><td>Name:</td>";
      echo "<td>{$row['ben_Fname']}</td></tr>";
      echo "<tr><td>Family Name:</td>";
      echo "<td>{$row['Family_name']}</td></tr>";
      echo "<table><tr><td>DOB:</td>";
      echo "<td>{$row['Dob']}</td></tr>";
      echo "<td>Image: </td><td><img src='".path.$row['Photo']."' width=50 height=50></td></tr></table></body></html>";
      }
          
}
?>
