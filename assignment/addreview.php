<html>
<body>
<form method="POST" action="#">
<table border="2" rows="3" cols="2" align="center" cellspacing="3" cellpading="3">

<tr><td>fname</td><td><input type="text" name="fname"></td></tr>
<tr><td>lname</td><td><input type="text" name="lname"></td></tr>
<tr><td>review</td><td><input type="textarea" name="review"></textarea></td></tr>
<tr><td>address</td><td><input type="textarea" name="address"></textarea></td></tr>
<tr><td>email</td><td><input type="text" name="email"></td></tr> 
<tr><td>phone</td><td><input type="text" name="phone"></td></tr>
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