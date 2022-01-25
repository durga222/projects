<?php
	include "connection.php";

    	$id=$_GET['id']; 
    	 
    	  $sql="select name,address,city from `library` WHERE id =$id"; 
    
	 	  $res=mysqli_query($conn,$sql);
	 		$data=mysqli_fetch_array($res);

	  
		 
 
?>  