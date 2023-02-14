<?php $title = "08.02.2023 control flow"; include "quang22000Layout/header.php" ?>
<h1>08.02.2023 in class exercise</h1>
<h4>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.
</h4>
<?php
$currentmonth = date('F');
echo 'This month is '.$currentmonth;
?>
<br>
<?php
$currentmonth = date('F');
if ($currentmonth == 'August') {echo 'It\'s August, so it\'s still holiday.';}
else {echo 'Not August, this is '.$currentmonth.', so I don\'t have any holidays.';}
?>

<h4>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h4>
<?php
$color = '#FF0000';
if ($color == '#FF0000') {echo 'The color is red.';}
else {echo 'The color is not red.';}
?>

<h4>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
<br>
Excellent: > 80; <br>
Great > 70 & less than 80; <br>
Good > 60 & less than 70; <br>
Pass > 50 & less than 60 <br>
Fail < 50
</h4>
<br>
<p>With If elseif else</p>
<?php
$totalScore = 100;
if ($totalScore >= 80) {echo 'Excellent';}
elseif ($totalScore >= 70) {echo 'Great';}
elseif ($totalScore >= 60) {echo 'Good';}
elseif ($totalScore >= 50) {echo 'Pass';}
else {echo 'Fail';}
?>
<br><br>
<p>Trying the Switch function instead of If else</p>
<?php
$totalScore = 30;
switch ($totalScore)
{
case ($totalScore >= 80): echo "Excellent";
break;
case ($totalScore >= 70 and $totalScore < 80): echo "Great";
break;
case ($totalScore >= 60 and $totalScore < 70): echo "Good";
break;
case ($totalScore >= 50 and $totalScore < 60): echo "Pass";
break;
case ($totalScore < 50): echo "Fail";
break;
}
?>

<h4>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h4>
<form action="controlflow.php" method="post">
<div class="row"> <!--adding Bootstrap style-->
  <div class="col"> <!--adding Bootstrap style-->
    Name: <input type="text" name="userName" required placeholder="Type your Name here"> <br>
    Age: <input type="int" name="userAge" required placeholder="Type your Age here"> <br>
    <input type="submit" value="Submit">
  </div>
</div>
</form>
<br>
<?php
$userName = $_POST["userName"];
$userAge = $_POST["userAge"];
if ($userAge < 18) {echo $userName.' is not eligible for voting.';}
else {echo $userName.' is eligible for voting.';}
?>

<br>
<h4>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome…
</h4>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
echo $user_agent;
?>
<br><br>
<p>Doing with Switch function</p>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
switch($user_agent)
{
  case (stripos($user_agent, 'Edg')==true): echo 'You are using Microsoft Edge';
  break;
  case (stripos($user_agent, 'Chrome')==true): echo 'You are using Google Chrome';
  break;
  case (stripos($user_agent, 'Firefox')==true): echo 'Mozilla Firefox';
  break;
  case (stripos($user_agent, 'Safari')==true): echo 'Apple Safari';
  break;
}
?>

<br><br>
<p>Extra: with if elseif else</p>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (stripos($user_agent, 'Edg')==true) // Edg must be the 1st in the sequence for this to work [for a mysterious reason]
  {echo 'You are using Microsoft Edge';}
elseif (stripos($user_agent, 'Chrome')==true)
  {echo 'You are using Google Chrome';}
elseif (stripos($user_agent, 'Mozilla')==true)
  {echo 'You are using Mozilla Firefox';}
elseif (stripos($user_agent, 'Safari')==true)
  {echo 'You are using Apple Safari';}
?>

<?php include "quang22000Layout/footer.php" ?>