<?php $title = "09.09.2023 array"; include "quang22000Layout/header.php" ?>
<h1>09.02.2023 in class exercise Array.php</h1>
<h3>1. Write a php script to display courses as list.</h3>
<?php
//1. display array as list
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$countCourse = count($courses);
for ($i=0; $i<$countCourse; $i++){
    echo "<li>$courses[$i]</li>";
}
?>
<br>
<h3>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.</h3>
<?php
//2. remove element by unset ()
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo ">>> before unsetting: <br>";
print_r($courses1);
unset($courses1[3]);
echo "<br> >>> after unsetting #3 CMS: <br>";
print_r($courses1);
?>
<br><br>
<h3>3. Sort the following array</h3>
<?php
//3. Sort array
//a
echo "a) ascending order sort by Value:<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
$toSort = count($courses3);
echo ">>> printing with loop <br>";
echo "ascending 1: ";
for ($i = 0; $i < $toSort; $i++) {
    echo $courses3[$i]." ";}
//print with implode
echo "<br>>>> printing with implode <br>";
echo "ascending 2: " .implode(", ", $courses3);
?>
<?php
//b
echo "<br><br>b) ascending order sort by Key:<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
//first assign the keys to the array currently having no key
$keys_added = ["k1", "k2", "k3", "k4", "k5"];
$courses3 = array_combine($keys_added, $courses3);
ksort($courses3);
echo "ascending by Key: " . implode(", ", $courses3);
?>
<?php
//c
echo "<br><br>c) descending order sort by Value:<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
rsort($courses3);
//print with loop
echo ">>> printing with loop <br>";
echo "descending 1: ";
for ($i = 0; $i < $toSort; $i++) {
    echo $courses3[$i]." ";}
//print with implode
echo "<br>>>> printing with implode <br>";
echo "descending 2: " .implode(", ", $courses3);
?>
<?php
//d
echo "<br><br>d) descending order sort by Key<br>";
//original array
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$keys_added = ["k1", "k2", "k3", "k4", "k5"];
$courses3 = array_combine($keys_added, $courses3);
//sorting
krsort($courses3);
echo "descending by Key: " . implode(", ", $courses3);
?>
<h3><br>4. Change the following array's all values to upper case.</h3>
<?php
//4. UPPER case
//original array
$courses4=array("php", "html", "javascript", "cms", "project");
//upper case
$courses4 = array_map('strtoupper', $courses4);
echo "values to upper case:<br>";
print_r($courses4);
?>
<h3><br>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3>
<?php
//5. favorite colors
$favorite_colors = ['black' => '#000000','white' => '#FFFFFF','blue' => '#0000FF','purple' => '#800080','orange' => '#FFA500'];
print_r($favorite_colors);
?>
<h3><br>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>
<p>
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
 <br>
 Write comments to answer questions:
</p>
<?php
//6 Temperatures
echo "6.1 Write comments to explain the following code (when asked)";
echo "<hr><h4> Calculation average temperature: </h4>";
//This code adds value [here a string of characters] to the variable $month_temps
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
?>
<?php
echo "6.2. // what is explode and what does the below code do?";
//what is explode and what does the below code do?
//https://www.php.net/manual/en/function.explode.php
//explode is a code to split a string and return an array of sub-strings (here the separator is the comma sign)
//explode is used here to convert the above $month_temp variable to an array
//the array created by the following code has values but no keys (not an associative array)
$temp_array = explode(',', $month_temp);
//viewing the array
print_r($temp_array);
//the following code adds the value "0" to the variable $tot_temp
$tot_temp = 0;
?>
<br>
<?php
// What is count?
//https://www.php.net/manual/en/function.count.php
// Counts all elements in an array or in a Countable object
echo "6.3 What is count?<br>";
//this count code returns the "length" or number of all elements in the array $temp_array
$temp_array_length = count($temp_array);
//this loop sum up all the elements together to generate the value of the total variable $tot_temp
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
// the average is calculated by dividing the total temp to the number of elements (length of the array)
 $avg_high_temp = $tot_temp/$temp_array_length;
 // the name of the variable should not contain _high_ here, it's just an average
 echo "Average Temperature is : ".$avg_high_temp."
"; 
?>
<br>
<?php
echo "6.4  what does sort do?";
// what does sort do?
// https://www.php.net/manual/en/function.sort.php
// Sort sorts an array in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
//the following needs a rsort code
echo "<br>List of five highest temperatures :";
rsort($temp_array);
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
?>
<br>
<?php
echo "6.5. explain the following loop";
// explain the following loop
// the loop displays the last 5 elements of the array, one by one.
// the array was sorted in a descending way in the previous task, so the list has the 5 lowest values, in an descending manner
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>
<?php include "quang22000Layout/footer.php" ?>