<?php
session_start();
?>
<html>
<head>
<title>
GUEST LOGIN
</title>
<body>
<?php
$user=$_POST['usrnme'];
$pass=$_POST['pswrd'];
mysql_connect("localhost","root","");
mysql_select_db("metric");
$sql="select * from guest where username='$user' and pswrd='$pass'";
$res=mysql_query($sql);
$n=mysql_num_rows($res);
if($n)
{
$row=mysql_fetch_row($res);
$_SESSION['user']=$row[0];
$_SESSION['login']=$user;
include "guesthome.php";
}
else 
{
include "error.php";
}
?>
</body>
</html>