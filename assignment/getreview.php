<?php
	include "connection.php";

    	$id=$_GET['id']; 
    	 
    	  $sql="select * from `review` WHERE lib_id =$id and st=1"; 
    
	 	  $res=mysqli_query($conn,$sql);
	 		$data=mysqli_fetch_array($res);
	 		$i=0;
	 		 while($rows=mysqli_fetch_array($res))
                {
                	$data1[$i]=array(
    				'fname' => $rows['fname'],
    				'review' =>$rows['review'] 
					);
                $i++;
                } 
	  		echo json_encode($data1);
		 
 
?> 