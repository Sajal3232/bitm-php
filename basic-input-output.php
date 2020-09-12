<?php 
 print_r($_POST);
 echo '<pre>';

$firstname=$_POST['firstName'];
$lastname=$_POST['lastName'];
$fullname=$firstname.' '.$lastname;

?>



<form action="" method="POST">
<table>
<tr>
 <td>First Name</td>
 <td><input type="text" name="firstName"></td>
</tr>
<tr>
 <td>Last Name</td>
 <td><input type="text" name="lastName"></td>
</tr>
<tr>
 <td>Full Name</td>
 <td><input type="text" value="<?php echo $fullname;?>" ></td>
</tr>
<tr>
<td></td>
 <td><input type="submit" name="btn" value="Submit"></td>
</tr>

</table>
</form>