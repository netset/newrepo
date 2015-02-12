                                                                                                <!DOCTYPE html>
<html>
<head>
  
   <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/scripts/jquery.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
           <h3>Manage Last 12 Hours Visitors</h3>
<?php 
if($this->session->flashdata('success'))
{ ?>
	<span style="color:green"><?php echo $this->session->flashdata('success'); ?></span>
 <?php }
 if($this->session->flashdata('warning'))
{ ?>
	<span style="color:red"><?php echo $this->session->flashdata('warning'); ?></span>
 <?php } ?>
<form method="post" action="<?php echo base_url(); ?>index.php/admin/login/deletelasthours"?> 

<table id="tabless" class="table table-striped">
      <h3><thead>
      <tr>
       <th><input type="checkbox" name="selectAll" class="checkbox" type="checkbox" >
          Id</th>
         <th>Driver Pic</th>
         <th>ID Proof Pic</th>
         <th>Front Car Pic</th>
         <th>Back Car Pic</th>
          <th>Car No Plate Pic</th>
<th>Name</th>
<th>Flatno</th>
<th>Entry Time</th>
         <th>Type</th>
   <th>No Of People</th>
 <th>Entry Time</th>
      </tr>
   </thead></h3>
   <tbody>

	   <?php
	           if(count(@$result)>0)
                   {
//echo "<pre>";print_r($result);die;
		   foreach($result as $r)
		   { 
//echo "<pre>";print_r($r);die;
$entrydate=date('h:i:s a',strtotime($r['created_date']));
		 $cls="";
if($r['status']=='1')
{
   $cls="inapp"; 
}
  ?>

      <tr class="<?php echo $cls ?>">
      <td><input name="IDs[]"  type='checkbox' class='checkbox' value="<?php echo $r['id']; ?>"/></td>
<td><img style="height: 100px;" src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['driver_image']; ?>"/></td>
      

<td><img style="height: 100px;" src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['idproof_pic']; ?>"/></td>
      <td><img style="height: 100px;" src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['frontcar_pic']; ?>"/>
</td>
     <td><img style="height: 100px;" src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['backcar_pic']; ?>"/></td>
      <td><img style="height: 100px;" src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['carplate_pic']; ?>"/></td>
<td><?php echo $r['name']; ?></td>
 <td><?php echo $r['flat_no']; ?></td>
        <td><?php echo $r['entrytime']; ?></td>         
<td><?php echo $r['type']; ?></td>
<td><?php echo $r['peoples']; ?></td>
<td><?php echo $entrydate; ?></td> 
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
<button value="Delete Selected" onclick="return checklen();" class="btn btn-primary" name="delete" type="submit">Delete Selected</button>
			</form>

<script>
function checklen()
{   var len = $(" input[type='checkbox']:checked").length;
 if(len<=0)
  {
alert("Please select atleast one visitor")
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

                            
                            
                            
