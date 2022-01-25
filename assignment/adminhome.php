<html>
<head>
<title> </title>
</head>
<body> 
<ul>
<li><a href="Guestlogin.php">GUEST LOGIN</a></li> 
<li><a href="Publiclogin.php">PUBLIC LOGIN</a></li> 
</ul>

<table border="2" rows="3" cols="2" align="center" cellspacing="3" cellpading="3">
 <CENTER>  <br><br>
 <b> Admin Home</b>
<form method="post" action="#">
	<table>
		<tr><td>adminhome</td>
		</tr>
		
	</table>
</form>
<?php
if($_POST['changepwd'])
{
$b=$_POST['opwd'];
$c=$_POST['npwd'];
$d=$_POST['cpwd'];
include "connection.php";
$qry="update admin set password='$cpwd'";
if(mysql_query($qry))
	echo "<center><h1> Successfully Changed Password </h1></center>";

}
?>
</body>
</html>