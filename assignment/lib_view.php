<?php
include "connection.php";

if (isset($_POST['save']))
{
  $name=$_POST['name'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $sql="insert into library(name,address,city) values ('$name','$address','$city')";
  mysqli_query($conn,$sql);  
  echo "<script>alert('Add Successfully');</script>";
}
 if($_GET['status']=='dsuccess'){
  echo "<script>alert('Deleted Successfully');</script>"; 
 } 
?>

                <?php
                $query="select * from library";
               
                $res=mysqli_query($conn,$query);
                $i=1;
                while($rows=mysqli_fetch_array($res))
                {
                ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $rows['name']; ?></td> 
                  <td><?php echo $rows['address']; ?></td> 
                  <td><?php echo $rows['city']; ?></td>  
                  <td>
                   </td>
                </tr>
               
              </table>

            
                       <table>
              
              
              <tr>
                <td><span >Name: </span><td>
                <td><input type="text" class="form-control" id="name" name="name" required></td>
              </tr>
              <tr>
                <td><span >Address: </span><td>
                <td><input type="text" class="form-control" id="address" name="address" required></td>
              </tr>
              <tr>
                <td><span >City: </span><td>
                <td><input type="text" class="form-control" id="city" name="city" required></td>
              </tr> 
            
            </table>
                    