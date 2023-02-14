<?php include "header.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$color = $_POST['color'];

echo "<h1>Hello</h1>";
echo "<h3>Hello $fname $lname. /. You are welcome to my site.</h3>";
echo "<h3> Your name is $fname $lname /. Your favorite color is $color and your date of birth is $bdate </h3>";

?>

<?php include "footer.php" ?>