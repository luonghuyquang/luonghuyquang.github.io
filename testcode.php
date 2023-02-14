<?php $title = "not an assignment"; include "quang22000Layout/header.php"?>
<h3>This is not an assignment, this is to test codes</h3>
<form action="" method="post">
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
<br><br>
<?php
switch ($userAge) {
    case ($userAge <18 && $userAge>0)==true: echo "<18, cannot vote";
        break;
        // >=18 is shorter, this is to test the || only
    case ($userAge >18 || $userAge = 18)==true: echo ">=18, can vote";
        break;
    default:
        echo 'no valid age entered';
        break;
};
?>

<br><br>
<?php
echo $_SERVER['HTTP_USER_AGENT']."<br><br>";
//The reason why a user agent string for Google Chrome often includes "Mozilla" and "AppleWebKit" 
//is because Chrome uses the WebKit engine, which was originally developed by Apple for the Safari
// browser.
//The "Mozilla" portion of the user agent string is a holdover from the days when the browser was 
//called Mozilla Navigator and later became Mozilla Firefox. Many browser vendors, including 
//Chrome, include "Mozilla" in their user agent strings as a convention to indicate that the 
//browser is based on the Gecko rendering engine, which was originally developed for the Mozilla 
//project.
$user_agent = $_SERVER['HTTP_USER_AGENT'];

switch ($user_agent) {
    //edge must be the 1st case to work properly 
    //Edge give this: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36 Edg/110.0.1587.41"
    //same for others: Google must come before Safari
    //because Chrome gives this "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36"
    //Case 'Mozilla' has no effect, case 'AppleWebKit' works
    //other cases not tested
    case stripos($user_agent, 'Mozilla') ==true:
        echo 'You are using Microsoft Edge';
        break;
    case stripos($user_agent, 'Chrome') ==true:
        echo 'You are using Google Chrome';
        break;
    case stripos($user_agent, 'Firefox') ==true:
        echo 'You are using Mozilla Firefox';
        break;
    case stripos($user_agent, 'Safari') ==true:
        echo 'You are using Apple Safari';
        break;
    case stripos($user_agent, 'Opera') ==true:
        echo 'You are using Opera';
        break;
    case stripos($user_agent, 'MSIE') ==true:
    case stripos($user_agent, 'Trident') ==true:
        echo 'You are using Internet Explorer';
        break;
    default:
        echo 'Your browser could not be detected';
        break;
}
?>
<h4>Trying calculator without the Calculate Button</h4>

<form action="" method="get">
    <input type="double" placeholder="Enter the 1st number" name="numb1" required>
    <input type="double" placeholder="Enter the 2nd number" name="numb2" required>
    <select name="operator">
        <option value="drop" name="">Select a function</option>
        <option value="add" name="">Add</option>
        <option value="sub">Substract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
<!--    <input type="submit" name="cal" value="Calculate" >-->
</form>
<?php
//not using 'cal' here, use 'operator' instead
if (isset($_GET["operator"])) {
    $num1 = $_GET["numb1"];
    $num2 = $_GET["numb2"];
    $operator = $_GET["operator"];
    switch($operator){
        case "add":
        $result = $num1 + $num2;
        break;
        case "sub":
        $result = $num1 - $num2;
        break;
        case "mul":
        $result = $num1 * $num2;
        break;
        case "div":
        $result = $num1 / $num2;
        break;
        default:
        $result = "Error: You have not selected a function";
        break;
    }
  }
echo "<h2> Result: $result </h2>";
if (isset($result)){
    echo "<h2> Result: $result </h2>";
}
//not working
?>
<h3>How to activate the calculation right after selecting the operator [bypass the Calculate button]?</h3>
 
<?php include 'quang22000Layout/footer.php' ?>