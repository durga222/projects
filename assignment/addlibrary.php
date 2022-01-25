
<html>
<body>
<form method="POST" action="#">
<table border="2" rows="3" cols="2" align="center" cellspacing="3" cellpading="3">

<tr><td>Library_name</td><td><input type="text" name="lib_name"></td></tr>
<tr><td>Address</td><td><textarea name="txtaddress"></textarea></td></tr>
<tr><td>City </td><td><input type="text" name="place"></td></tr>
<tr><td>Phone </td><td><input type="text" name="txtphone"></td></tr>

<tr>

<td><input type="submit" name="add"value="submit"></td><td>
<input type="reset" value="clear"></td>
</tr></table>
</form>
<?php
if($_POST['add'])
echo "aaa";
?>
</body>
</html>
