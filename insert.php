<!DOCTYPE html>
<html>
<head>
<title>Insert Page page</title>
</head>
<body>
<center>
<?php
$conn = mysqli_connect("localhost", "root", "", "dstudent");
// Check connection
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
// Taking all 5 values from the form data(input)
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$age= $_REQUEST['age'];
$number= $_REQUEST['number'];
$mail= $_REQUEST['mail'];
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO registration(stu_regis_f,stu_regis_l,stu_age,stu_number,stu_mail) VALUES ('$first_name','$last_name',$age,'$number','$mail')";

if(mysqli_query($conn, $sql))
{
echo "<h3>data stored in a database successfully."
. " Please browse your localhost php my admin"
. " to view the updated data</h3>";


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
</center>
</body>
</html>