<?php 
  echo '<pre>';
 print_r($_POST);



$firstnumber=$_POST['firstNumber'];
$lastnumber=$_POST['lastNumber'];
 $btn=$_POST['btn'];  
if($btn=="+"){
    $result=$firstnumber+$lastnumber;
}
if($btn=="-"){
    $result=$firstnumber-$lastnumber;
}
if($btn=="*"){
    $result=$firstnumber*$lastnumber;  
}
if($btn=="/"){
    $result=$firstnumber/$lastnumber;

}



?>



<form action="" method="POST">
<table>
<tr>
 <td>First Number</td>
 <td><input type="text" name="firstNumber"></td>
</tr>
<tr>
 <td>Last Number</td>
 <td><input type="text" name="lastNumber"></td>
</tr>
<tr>
 <td>Result</td>
 <td><input type="text" value="<?php echo $result;?>"></td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="btn" value="+">
<input type="submit" name="btn" value="-">
 <input type="submit" name="btn" value="*">
<input type="submit" name="btn" value="/">
</td>

</tr>

</table>
</form>