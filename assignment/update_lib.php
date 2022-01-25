<?php
	include "connection.php";
  
    	$lid=$_POST['lid'];  
    	$lname=$_POST['lname'];  
    	$laddress=$_POST['laddress'];  
    	$lcity=$_POST['lcity'];  
    	  
    	$sql="update library set name='$lname',address='$laddress',city='$lcity' where id=$lid";
  		 $res=mysqli_query($conn,$sql);  
	  		echo json_encode($sql);
 

?>  