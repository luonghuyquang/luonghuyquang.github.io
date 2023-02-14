<?php $title = "31.01.2023 in class task"; include "quang22000Layout/header.php" ?>
<h1>31.01.2023 (ex1.php)</h1>
<h3>3.1. Write a simple PHP script to print your information (Name and your groupid).</h3>
<?php
echo "Quang Luong <br>";
echo "BBCAP22A aka BBCA22A<br>";
?>
<h3>3.2 Write PHP code to display the following message.</h3>
<?php
echo "3.2.1 Hello world! My name is \"Quang\"";
?>

<h3>3.3. Current Date</h3>
<?php
echo date("d.m.Y")
?>

<h3>3.4. Variable in php</h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>".$title1 . "</h1>";
?>

<h3>3.5. Table & Variables</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 3;
echo "
<table>
<tr>
<th> S.N </th> <th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </td> <td> Pekka </td> <td> $g1 </td>
</tr>
<tr>
<td> 2 </td> <td> Johanna </td> <td> $g2 </td>
</tr>
<tr>
<td> 3 </td> <td> John </td> <td> $g3 </td>
</tr>
</table>
";
?>

<h3> 4. Screenshot of the development environment .</h3>
<img src="images/20230201.Docker.screenshot.png" alt="20230201.Docker.screenshot" style="max-width: 100%;">

<?php include "quang22000Layout/footer.php" ?>