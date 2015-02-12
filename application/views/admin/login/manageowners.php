<!DOCTYPE html>
<html>
<head>
  
   <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/scripts/jquery.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
		<h3>Manage Owners</h3>
<?php 
if($this->session->flashdata('success'))
{ ?>
	<span style="color:green"><?php echo $this->session->flashdata('success'); ?></span>
 <?php }
 if($this->session->flashdata('warning'))
{ ?>
	<span style="color:red"><?php echo $this->session->flashdata('warning'); ?></span>
 <?php } ?>
  <form method="post" action="<?php echo base_url(); ?>index.php/admin/login/deleteowners"> 

<table id="tabless" class="table table-striped security">
      <h3><thead>
      <tr>
        <th><input type="checkbox" name="selectAll" class="checkbox" type="checkbox" >
	 <th>Id</th>
         <th>Name Of Owners</th>
         <th>Flat No.</th>
         <th>Gender</th>
         <th>Age</th>
         <th>Floor No</th>
         <th>Image</th>
        <a href="<?php echo base_url(); ?>index.php/admin/login/addowners"?> 
         <input class="del-btn" type="submit" name="add1" value="Add New Owners"></a>

  
          </tr>
   </thead></h3>
   <tbody>
	   <?php
	           if(count(@$result)>0)
                    {
		   foreach($result as $results)
		   { //echo "<pre>";print_r($result);die;
		   ?>
      <tr>
		   <td><input name="IDs[]"  type='checkbox' class='checkbox' value="<?php echo $results['user_id']; ?>" ></td>
         <td><?php echo $results['id']; ?></td>
        <td><?php echo $results['name']; ?></td>
      <td><?php echo $results['flatno']; ?></td>
      <td><?php echo $results['gender']; ?></td>
     <td><?php echo $results['age']; ?></td>
       <td><?php echo $results['floorno']; ?></td> 
    <td><img style="height: 100px;" src="<?php echo base_url() ?>/public/uploads/images/<?php echo $results['image']; ?>"/></td>
      </tr>
      <?php  } }else{?>
      <tr><td>NO Owners Found</td></tr>   
<?php }
?>   </tbody>
</table>
<button class="del-btn" value="Delete Selected" onclick="return checklen();" class="btn btn-primary" name="delete" type="submit">Delete Selected</button>
			</form>


<script>
function checklen()
{   var len = $(" input[type='checkbox']:checked").length;
 if(len<=0)
  {
alert("Please select atleast one item")
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
                          
                            

                            
                            
                            