<html>
<body>
<form method="POST" action="#">
<table border="2" rows="3" cols="2" align="center" cellspacing="3" cellpading="3">

<tr><td>Name</td><td><input type="text" name="name"></td></tr>
<tr><td>Address</td><td><textarea name="txtaddress"></textarea></td></tr>
<tr><td>Place </td><td><input type="text" name="place"></td></tr>
<tr><td>State</td><td><input type="text" name="state"></td></tr>

<tr><td>Email </td><td><input type="text" name="txtemail"></td></tr>

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
