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
mysqli_connect("localhost","root","metric");
mysqli_select_db("metric");
$sql="select * from guest where username='$user' and pswrd='$pass'";
$res=mysqli_query($sql);
$n=mysqli_num_rows($res);
if($n)
{
$row=mysqli_fetch_row($res);
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