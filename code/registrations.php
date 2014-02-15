<?php
include("home.html");
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
<form name="info" method="post" action="">
<center>
<table border="0" width="600px">
<tr>
<th colspan="3">
<h1>Enter Beneficiary Details</h1>
</th>
</tr>
<tr>
<td colspan="2">First Name: </td>
<td><input type="text" name="name" id="name"></td>
</tr>
<tr>
<td colspan="2">Family Name:</td>
<td><input type="text" name="fname" id="fname"></td>
</tr>
<tr>
<td rowspan="2" colspan="2">Sex</td>
<td><input type="radio" name="sex" value="male" id="sex">Male</td>
</tr>
<td><input type="radio" name="sex" value="female" id="sex">Female</td>
</tr>
<tr>
<td colspan="2">D.O.B</td>
<td><input type="date" name="dob" id="dob"></td>
</tr>
<tr>
<td colspan="2">Address:</td>
<td><input type="text" name="addr" id="addr"></td>
</tr>
<tr>
<td colspan="2">City:</td>
<td><input type="text" name="city" id="city"></td>
</tr>
<tr>
<td colspan="2">State:</td>
<td><input type="text" name="state" id="state"></td>
</tr>
<tr>
<td colspan="2">Pincode:</td>
<td><input type="text" name="pin" id="pin"></td>
</tr>
<tr>
<td colspan="2">Photo:</td>
<td><input type="file" name="upload"></td>
</tr>
<tr>
</tr>

<tr>
<td rowspan="2">Family Member:</td>
<td>Mothers Name:</td>
<td><input type="text" name="moname" id="moname"></td>

<tr>
<td>Fathers Name:</td>
<td><input type="text" name="faname" id="faname"></td>
</tr>
<tr>
<td colspan="3" align="center"><input class="myButton" type="submit" name="submit" value="submit"></td>
</tr></table>
</center>
</form>
</body>
</html>