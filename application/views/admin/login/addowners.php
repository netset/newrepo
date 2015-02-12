<form method="post" enctype="multipart/form-data">
<table class="register">
</tr>
<tr>
 <td valign="top">
  <label for="name">Name *</label>
 </td>
 
 
 
 <td valign="top">
  <input  type="text" name="name" maxlength="50" size="30" required>
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="flatno">Flat No (Numeric Values Only)*</label>
 </td>
  
 <td valign="top">
  <input  type="text" name="flatno" maxlength="50" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="gender">Gender *</label>
 </td>
 <td valign="top">
  <input  type="radio" value="Male" name="gender" required>Male</input>
<input  type="radio" value="Female" name="gender" required>Female</input>
 </td>

 <tr>
 <td valign="top">
  <label for="age">Age *</label>
 </td>
 <td valign="top">
  <input  type="text" name="age" maxlength="80" size="30" required>
 </td>
<tr>
 <td valign="top">
  <label for="floorno">Floor No *</label>
 </td>
 <td valign="top">
  <input  type="text" name="floorno" maxlength="80" size="30" required>
 </td>

 
</tr>
<tr>
 <td valign="top">
  <label for="image">Image</label>
 </td>
 <td valign="top">
 <input type="file" name="image" required>
 </td>

<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" name="add" value="Submit"><a href="<?php echo base_url()?>index.php/admin/login/addowners"></a>
 </td>
</tr>
</table>
</form>

                            
