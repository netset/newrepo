<!DOCTYPE html>
<html>
<head> 
  
   <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/scripts/jquery.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<h3>Manage Guards</h3>
<?php 
if($this->session->flashdata('success'))
{ ?>
	<span style="color:green"><?php echo $this->session->flashdata('success'); ?></span>
 <?php }
 if($this->session->flashdata('warning'))
{ ?>
	<span style="color:red"><?php echo $this->session->flashdata('warning'); ?></span>
 <?php } ?>
 <form method="post" action="<?php echo base_url(); ?>index.php/admin/login/deleteusers">
<table id="tabless" class="table table-striped security">
      <h3><thead>
      <tr>
         <th><input type="checkbox" name="selectAll" class="checkbox" type="checkbox" >
         <th>Id</th>
         <th>Username Of Security Guard</th>
 <th>Password</th>
 <th>Gender</th>        
 <th>Address</th>
 
         <th>Image</th>
         <a href="<?php echo base_url(); ?>index.php/admin/login/adduser">

         <input class="del-btn" type="submit" name="add1" value="Add New Guards"></a>

  
          </tr>
   </thead></h3>
   <tbody>
	   <?php //echo "<pre>";print_r($result);die;
	           if(count(@$result)>0)
                   { 
		   foreach(@$result as $results)
		   { 
		   ?>
      <tr>
     <td><input name="IDs[]"  type='checkbox' class='checkbox' value="<?php echo $results['id']; ?>" ></td>
      <td><?php echo $results['id']; ?></td>
      <td><?php echo $results['username']; ?></td>
<td><?php echo $results['password']; ?></td>
<td><?php echo $results['gender']; ?></td>
      <td><?php echo $results['address']; ?></td>
      
      <td><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $results['image']; ?>"/></td>
      
      </tr>
      <?php  } 

 echo "</tbody>

</table>";
}else{?>

</tbody>

</table>

    <b>NO User Found</b>
<?php }
?>
  
<button class="del-btn" value="Delete Selected" onclick="return checklen();" class="btn btn-primary" name="delete" type="submit">Delete Selected
</button>         

			</form>


<script>
function checklen()
{   var len = $(" input[type='checkbox']:checked").length;
 if(len<=0)
  {
alert("Please select atleast one user")
      return false;
  }
 return confirm('Do you really want to delete these records ?');
}
</script>


</body>
</html>
<link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function(){

      $("#tabless").dataTable();
   });
   </script>
                            

                            
                            
                            
                            
                            