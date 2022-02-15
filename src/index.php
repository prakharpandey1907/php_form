<form method="POST">
Enter the length
<input type = "text" name = "l">
<br/>
 
Enter the breadth
<input type = "text" name = "b">
<br/>
 
<input type= "submit" value = "submit" name="btnsubmit">
</form>
<?php
if(isset($_POST['btnsubmit']))
{
$l=$_POST['l'];
$b=$_POST['b'];
 
$area=$l*$b;
echo "The aea of rectangle ".$area."<br/>";
}
?>