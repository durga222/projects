<?php
include "connection.php";
if($_GET['status']=='dsuccess'){
  echo "<script>alert('Deleted Successfully');</script>"; 
 }
?>

                  
                <?php
                $query="select * from review join library on review.lib_id=library.id";
               
                $res=mysqli_query($conn,$query);
                $i=1;
                while($rows=mysqli_fetch_array($res))
                {
                ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $rows['fname']; ?></td> 
                  <td><?php echo $rows['lname']; ?></td> 
                  <td><?php echo $rows['review']; ?></td> 
                  <td><?php echo $rows['address']; ?></td> 
                  <td><?php echo $rows['email']; ?></td> 
                  <td><?php echo $rows['phone']; ?></td> 
                  <td>
                    
                  </td>  
                  
                   
              </table>
   
       
              
