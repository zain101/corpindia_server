<?php
if($_POST['submit'])
{
$centre=$_POST['centre'];
$username=$_POST['username'];
$password=$_POST['password']; }
if($username && $password)
{
$connect = mysql_connect("localhost","root","") or die("Couldn't Connect!!!");
mysql_select_db("corp") or die("Couldn't connect db");
$query = mysql_query("SELECT * From staff WHERE username='$username'");
$numrows = mysql_num_rows($query);

 if($numrows!=0)
 {
  while($row = mysql_fetch_assoc($query))
  {
   $dbusername = $row['username'];
   $dbpassword = $row['password'];
  }
   if($username==$dbusername&&$password==$dbpassword)
   {
    echo "Successfull"; 
	}
    else
    echo "Incorrect password!";
 }
else
     {
      die("User don't exist");
     }
}
else
die("Please enter username and password");
?>