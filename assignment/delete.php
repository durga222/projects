<?php
	include "connection.php";

    	$id=$_GET['id'];  
    	$type=$_GET['type'];  
    	if($type=='review'){

	    $sql="DELETE from `review` WHERE review_id ='$id'"; 
    	}
    	else if($type=='library'){

	    $sql="DELETE from `library` WHERE id ='$id'"; 
    	}
		if(mysqli_query($conn,$sql))
		{ 
			if($type=='review'){

			header('location: view_reviews.php?status=dsuccess'); 
		}
		else if($type=='library'){
			header('location: library_view.php?status=dsuccess');
		}
		} 
	else
	{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);

?>  
