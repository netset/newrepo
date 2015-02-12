<html>
<form method="post" enctype="multipart/form-data">
<table  class="register">
</tr>
<tr>
 <td valign="top">
  <label for="username">User Name *</label>
 </td>
 
 
 
 <td valign="top">
  <input  type="text" name="username" maxlength="50" size="30" required>
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="password">Password (4 Character Needed)*</label>
 </td>
  
 <td valign="top">
  <input  type="password" id="password" name="password"  pattern=".{4,4}" required title="4 characters" >
 </td>
</tr>


 <tr>
 <td valign="top">
  <label for="age">Age *</label>
 </td>
 <td valign="top">
  <input  type="text" name="age" maxlength="80" size="30" required>
 </td>
 
<tr>
 <td valign="top">
  <label for="gender">Gender *</label>
 </td>
 <td valign="top">
  <input  type="radio" value="Male" name="gender" required>Male</input>
<input  type="radio" value="Female" name="gender" required>Female</input>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="address">Address *</label>
 </td>
 <td valign="top">
  <textarea  name="address" maxlength="1000" cols="25" rows="6" required></textarea>
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="security">Type *('security')</label>
 </td>
 <td valign="top">
  <select><option name="security" id="security">Security
  </option>
   </select>
 </td>
<tr>
 <td valign="top">
  <label for="image">Image</label>
 </td>
 <td valign="top">
 <input type="file" name="image" required>
 </td>

<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit" name="add"><a href="<?php echo base_url()?>index.php/admin/login/adduser"></a>
 </td>
</tr>
</table>
</form></body></html>

