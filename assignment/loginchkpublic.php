<?php
session_start();
?>
<html>
<head>
<title>
PUBLIC LOGIN
</title>
<body>
<?php
$user=$_POST['usrnme'];
$pass=$_POST['pswrd'];
include "connection.php";

$sql="select * from public where username='$user' and password='$pass'";
$res=mysql_query($sql);
$n=mysql_num_rows($res);
if($n)
{
$row=mysql_fetch_row($res);
$_SESSION['uname']=$user;
include "publichome.php";
}
else 
{
include "error.php";
}
?>
</body>
</html>