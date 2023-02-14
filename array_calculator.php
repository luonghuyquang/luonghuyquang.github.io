<?php $title = "09.02.0223 calculator"; include "quang22000Layout/header.php" ?>
<h1>09.02.2023 in class exercise</h1>

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
    <input type="submit" name="cal" value="Calculate" >
</form>
<?php
if (isset($_GET["cal"])) {
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

if (isset($result)){
    echo "<h2> Result: $result </h2>";
}
?>
<h3>How to activate the calculation right after selecting the operator [bypass the Calculate button]?</h3>

<?php include "quang22000Layout/footer.php" ?>