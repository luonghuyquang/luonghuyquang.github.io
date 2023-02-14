<?php
$title = 'update the information';
include '../quang22000layout/header.php';
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn, "Select * from studentinfo where id = '$a' ");
$row = mysqli_fetch_array($result);
?>

<h2>Update your information below</h2>

<form method="post" action = "">
  <input type="text" name="fname" placeholder="First Name" required value = "<?php echo $row['fname']; ?>"><br><br>
  <input type="text" name="lname" placeholder="Last Name" required value = "<?php echo $row['lname']; ?>"><br><br>
  <input type="text" name="city" placeholder="City" required value = "<?php echo $row['city']; ?>"><br><br>
  <select name="groupid" value = "<?php echo $row['groupid']; ?>"><br><br>
    <option value="BBCAP22">BBCAP22</option>
    <option value="BBCAP21">BBCAP21</option>
    <option value="Others">Others</option>
  </select>
  <br><br>
  <input type="submit" value="Update your info" name="update"><br><br>
  <input type="submit" value="Delete your info" name="delete"><br><br>
</form>

<?php
  if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname', lname='$lname', city='$city', groupid ='$groupid' where id='$a' ");
  if($query){
    echo "<h4>Record updated</h4>";
  }
  else {echo "Record not modified";}}
?>

<?php
  if(isset($_POST['delete'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    $query = mysqli_query($conn, "DELETE from studentinfo where id='$a' ");
  if($query){
    echo "<h4>Record deleted</h4>";
  }
  else {echo "Record not modified";}}
?>

<?php
include '../quang22000Layout/footer.php';
?>