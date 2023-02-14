<?php
$title = "read.php in the crud directory";
include '../quang22000layout/header.php';
include 'db.php';
$sql = "select * from studentinfo";
$result = $conn->query($sql);

if ($result !== False && $result->num_rows > 0)
{
  echo"
    <table class = table>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Group ID</th>
      </tr>";
  while($row = $result -> fetch_assoc())
  {
  echo"
      <tr>
        <td><a href = 'updatesingle.php?id=$row[id]'>$row[id]</td>
        <td>$row[fname]</td>
        <td>$row[lname]</td>
        <td>$row[city]</td>
        <td>$row[groupid]</td>
      </tr>";
  }
  echo "</table>";
}
else {
  echo "No data recorded";
}
$conn->close();


include '../quang22000Layout/footer.php';
?>