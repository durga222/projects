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
$res=mysqli_query($sql);
$n=mysqli_num_rows($res);
if($n)
{
$row=mysqli_fetch_row($res);
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