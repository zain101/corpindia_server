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
        include_once 'connect.php';
        include_once 'functions.php';
        if(isset($_POST['submit'])){
        $name=$_POST["name"];
        $fname=$_POST["fname"];
        $sex=$_POST["sex"];
        $dob=$_POST["dob"];
        $loc=$_POST["loc"];
        search($name,$fname,$loc);
        
        }
        
        
        
        ?>
        
    </body>
</html>
