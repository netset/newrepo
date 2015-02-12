<!DOCTYPE html>
<html>
<head>
  
   <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/scripts/jquery.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
           <h3>Inappropriate Entries</h3>
<?php 
if($this->session->flashdata('success'))
{ ?>
	<span style="color:green"><?php echo $this->session->flashdata('success'); ?></span>
 <?php }
 if($this->session->flashdata('warning'))
{ ?>
	<span style="color:red"><?php echo $this->session->flashdata('warning'); ?></span>
 <?php } ?>
<form method="post" action="<?php echo base_url(); ?>index.php/admin/login/deleteinappvisitors"?> 
<div style="overflow: auto; width: 970px;">
<table id="tabless" class="table table-striped">
      <h3><thead>
      <tr>
       <th><input type="checkbox" name="selectAll" class="checkbox" type="checkbox" >
          Id</th>
     <th>Visitor Id</th>
         <th>Driver Pic</th>
         <th>ID Proof Pic</th>
         <th>Front Car Pic</th>
         <th>Back Car Pic</th>
          <th>Car No Plate Pic</th>
  <th>Flat No</th>
  <th>Name</th>
  <th>No Of People
      (entry/exit)</th>
    <th>Entry Time / Exit Time </th>    
      </tr>
   </thead></h3>
   <tbody>

	   <?php
	           if(count(@$result)>0)
                   {     
		   foreach($result as $r)
		   { 
//echo "<pre>";print_r($r);die;
	
  ?>

      <tr class="inapp">
      <td><input name="IDs[]"  type='checkbox' class='checkbox' value="<?php echo $r['id']; ?>"/></td>

<td><?php echo $r['id']; ?></td>
<td><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['driver_image']; ?>" alt=""> <br/>
<?php
if(!empty($r['drvpic']))
{
?>
<span class="d_pic"> <img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['drvpic']; ?>" alt="">
</span>
  <?php  } ?> </td> 

<td><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['idproof_pic']; ?>" alt=""><br/>
<?php
if(!empty($r['idpic']))
{?>

<span class="d_pic"><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['idpic']; ?>" alt=""/></span>
<?php } ?>
</td>
      <td><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['frontcar_pic']; ?>" alt=""/><br/>
<?php
if(!empty($r['frontpic']))
{
?>
<span class="d_pic"><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['frontpic']; ?>" alt=""> 
<?php } ?>
</td>
     <td><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['backcar_pic']; ?>" alt=""/><br/>
<?php
if(!empty($r['backpic']))
{
?>
<span class="d_pic"><img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['backpic']; ?>" alt=""> 
<?php } ?></td>
      <td><img style="height: 100px;" src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['carplate_pic']; ?>" alt=""/><br/>
<?php
if(!empty($r['carpic']))
{
?>

<img  src="<?php echo base_url() ?>/public/uploads/images/<?php echo $r['carpic']; ?>" alt=""> 
<?php } ?>
</td>
<td><?php echo $r['flat_no']; ?>
</td>
<td>
<?php echo $r['name']; ?>
 </td>

<td>
<?php echo $r['peoples']; 

if(!empty($r['peop']))
{

?>
<?php echo " / ".$r['peop']; ?>

<?php } ?>

<td>
<?php echo $r['created_date']; ?>&nbsp;/&nbsp;<?php echo $r['dated']; ?>
 </td>
      </tr>
 <?php  } 

 echo "</tbody>

</table>";
}else{?>

</tbody>

</table>

    <b>NO User Found</b>
<?php }
?></div>
<button class="del-btn" value="Delete Selected" onclick="return checklen();" class="btn btn-primary" name="delete" type="submit">Delete Selected</button>
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

                            
                            

                            

                            