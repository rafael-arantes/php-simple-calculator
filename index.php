<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
    // We use the GET method when we can see information in URL, and the POST method when we can't see the information, but it still there
    
    if (isset($_GET['submit'])) {
      $result1 = $_GET['num1'];
      $result2 = $_GET['num2'];
      $operator = $_GET['operator'];
      $finalResult = "";

      switch ($operator) {
        case "None":
          $finalResult = "You need to select a method!";
        break;
        
        case "Add":
          $finalResult = $result1 + $result2;
        break;

        case "Subtract":
          $finalResult = $result1 - $result2;
        break;

        case "Multiply":
          $finalResult = $result1 * $result2;
        break;
        
        case "Divide":
          $finalResult = $result1 / $result2;
        break;
      }
    };
  ?>

  <section class="container">
    <form class="calculator_form">
      <input class="result" type="text" name="result" value="<?php if(isset($_GET['submit'])) { echo $finalResult;} ?>">
      <input type="text" name="num1" placeholder="Number 1">
      <input type="text" name="num2" placeholder="Number 2">
      <select class="operator_select" name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <button class="calculate_button" type="submit" name="submit" value="submit">Calculate</button>
      <button class="clear_button" type="submit" name="clear" value="clear">Clear</button>
    </form>
  </section>
  <!-- <p>The answer is: </p> -->
</body>
</html>