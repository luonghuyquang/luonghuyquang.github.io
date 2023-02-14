<?php $title = "07.02.2023 variable"; include "quang22000Layout/header.php"?>
<h1>07.02.2023 (variable.php) Excercise 3 In class task </h1>
<br>
<h3>1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag: <br>
Hello …., You are welcome to my site.</h3>
<p>The form is below, and the result is in the action.php file</p>
<br>
<h3>2. Apply bootstrap style to the form.</h3>

<form action="quang22000Layout/action.php" method="post">
<div class="row"> <!--adding Bootstrap style-->
  <div class="col"> <!--adding Bootstrap style-->
    First name: <input type="text" name="fname" required placeholder="Type your First Name here"> <br>
    Last name: <input type="text" name="lname" required placeholder="Type your Last Name here"> <br>
  </div>
  <div class="col"> <!--adding Bootstrap style-->
    Birth date: <input type="date" name="bdate" required placeholder="Birth Date"> <br>
    Select fav color: <input type="color" name="color" required placeholder="Favorite Color"><br>
    <input type="submit" value="Submit">
  </div>
</div>
</form>
<br>
<h3>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h3>

<!--Table from ex1 3.5 comes here. Can we have <php> inside another php?-->
    <!--bootstrap table style comes in-->
<?php
$g1 = 5;
$g2 = 4;
$g3 = 3;
//bootstrap comes inside the table
echo "
<table class=\"table\">
  <thead>
    <tr>
      <th scope = \"col\"> S.N </th>
      <th scope = \"col\"> Name </th>
      <th scope = \"col\"> Grade </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope = \"row\"> 1 </td>
      <td> Pekka </td>
      <td> $g1 </td>
    </tr>
    <tr>
      <th scope = \"row\"> 2 </td>
      <td> Johanna </td>
      <td> $g2 </td>
    </tr>
    <tr>
      <th scope = \"row\"> 3 </td>
      <td> John </td>
      <td> $g3 </td>
    </tr>
  </tbody>
</table>
"
;
?>
<br>
<h3>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h3>
<?php 
$helloString="Hello World";
$intro1="I am Quang";
$toPrint=strlen($helloString.$intro1);
echo "<h2>$toPrint</h2>";
?>
<br>
<h3>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h3>
<?php 
$num1=298;
$num2=234;
$num3=46;
$sum=$num1+$num2+$num3;
echo "<h2>$sum</h2>";
?>
<br>
<h3>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER).</h3>

<?php
echo $_SERVER['HTTP_USER_AGENT'];

?>
<br>
<h3>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. (Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time)</h3>
<p>This is found in "quang22000Layout/footer.php". The code is also copied here for learning purpose.</p>
  <?php
    $filename = basename($_SERVER['PHP_SELF']);
    echo "This site was last modified on: " . date ('l jS \o\f F Y, h:i:s A', filemtime($filename));
  ?>
<br><br>
<h3>8. Commit all changes and push all changes you have done to your GitHub repository. The task is then completed. </h3>

<?php include "quang22000Layout/footer.php" ?>