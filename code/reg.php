<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'functions.php';
        include_once'connect.php';
    if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $fname=$_POST["fname"];
    $sex=$_POST["sex"];
    $dob=$_POST["dob"];
    $addr1=$_POST["addr1"];
    $addr2=$_POST["addr2"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $pincode=$_POST["pin"];
    $photo=$_FILES['upload']['name'];
    
    $a=  rand(0,1000);
    
    $con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $target= path.basename($photo);
    move_uploaded_file($_FILES['upload']['tmp_name'], $target);
    
$search  = array('a', 'e', 'i', 'o', 'u','A','E','I','O','U');
$replace = array('', '', '', '', '','', '', '', '', '');
$subject = $name;
$sub=$fname;
str_replace($search, $replace, $subject);
str_replace($search, $replace, $sub);
    $query="INSERT INTO ben VALUES ('$a','$name','$subject', '$fname','$sub', '$sex', '$dob', '$addr1', '$addr2', '$city', '$state', '$pincode', '$photo')";
    $data=mysqli_query($con,$query) or die ("query failed".  mysqli_error($con));
   
    
    
    
    
    
    
    
    }
   
    
    ?>
       
    </body>
</html>
