

<?php
require("q1.php");


	$total="";
	$average="";
	$percent="";
	$mar="";
	$hin="";
	$eng="";
	$sci="";
	$his="";

if(isset($_POST['submit']))
 {
 @$name=$_POST['name']; 
 @$mar=$_POST['sub1']; 
 @$hin=$_POST['sub2']; 
 @$eng=$_POST['sub3']; 
 @$sci=$_POST['sub4']; 
 @$his=$_POST['sub5']; 
 @$total=$_POST['total_obtained']; 
  @$average=$_POST['total_marks'];
  @$percent=$_POST['percent'];
 
 @$total=($mar + $hin + $eng+ $sci + $his);
 @$average=($total/5.0);
  @$percent=(($total/500.0)* 100);

 $sql= "INSERT INTO `class1`(`name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percent`) VALUES ('$name','$mar','$hin','$eng','$sci','$his','$total','$average','$percent')";
 
 if (mysqli_query($con, $sql)) 
 {
  echo "New record created successfully";
 }
else
{	
  echo "Error: " . $sql . "<br>" . mysqli_error($con);

}


 
 
 
 
 }

 mysqli_close($con);
 
	
 
 
 
 

?>


<html>
<form action="" method="post">
<label><b>Name of Student:</b></label><br>
<input type="text" name="name" value="Enter your name" max=500 required>
<h3>Marks in each subject</h3>
<label>Marathi:</label>
<input type="text" name="sub1" placeholder="Enter value of sub1" value="<?php  echo $mar;   ?>" max=100 required><br><br>
<label>Hindi:</label>
<input type="text" name="sub2" placeholder="Enter value of sub2"  value="<?php  echo $hin;   ?>" max=100 required><br><br>
<label>English:</label>
<input type="text" name="sub3" placeholder="Enter value of sub3" max=100  value="<?php  echo $eng;   ?>" required><br><br>
<label>Science:</label>
<input type="text" name="sub4" placeholder="Enter value of sub4" max=100  value="<?php  echo $sci;   ?>" required><br><br>
<label>History:</label>
<input type="text" name="sub5" placeholder="Enter value of sub5" max=100  value="<?php  echo $his;   ?>" required><br><br>

<input type="submit" name="submit" value="submit"> <br><br>

<label>Total marks obtained:<br></label>
<input type="text" name="total_obtained"   value="<?php  echo $total;   ?>" max=100 ><br><br>
<label>Average:<br></label>
<input type="text" name="total_marks" value="<?php echo $average;  ?>"  max=100 ><br><br>
<label>Percentage:<br></label>
<input type="text" name="percent" value="<?php echo $percent;  ?>" max=100 ><br><br>

</html>





