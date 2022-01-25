<html>
<head>
<title>
Admin login
</title>
<body>
<?php
$user=$_POST['usrnme'];
$pass=$_POST['pswrd'];
$con=mysqli_connect( "localhost", "root","metric" )
echo 'connected';
$sql="select * from admin where username='$user' and password='$pass'";
$res=mysqli_query($conn, $sql);
$n=mysqli_num_rows($res);
if($n)
{
$row=mysqli_fetch_row($res);
include "adminhome.php";
}
else 
{
include "error.php";
}
?>
</body>
</html>
