<html>
<head>
<title>
Admin login
</title>
<body>
<?php
$user=$_POST['usrnme'];
$pass=$_POST['pswrd'];
mysql_connect("localhost","root","");
mysql_select_db("metric");
$sql="select * from admin where username='$user' and password='$pass'";
$res=mysql_query($sql);
$n=mysql_num_rows($res);
if($n)
{
$row=mysql_fetch_row($res);
include "adminhome.php";
}
else 
{
include "error.php";
}
?>
</body>
</html>