
<html>
<body>
    <form action="check.php" method="post">
<table border="1">
<tr>
<td>First Name: </td>
<td><input type="text" name="name" id="name"></td>
</tr>
<tr>
<td >Family Name:</td>
<td><input type="text" name="fname" id="fname"></td>
</tr>
<td rowspan="2">Sex</td>
<td><input type="radio" name="sex" value="male" id="sex">Male</td>
</tr>
<td><input type="radio" name="sex" value="female" id="sex">Female</td>
</tr>
<tr>
<td >D.O.B</td>
<td><input type="date" name="dob" id="dob"></td>
</tr>
<tr>
<td>Location:</td>
<td><input type="text" name="loc"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="Submit" name="submit" value="submit"></td>
</tr>
</table>
    </form>
</body>
</html>