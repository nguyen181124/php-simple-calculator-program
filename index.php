<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
if(isset($_POST['Add'])){
  $result = $number1 + $number2;
}

if(isset($_POST['Subtract'])){
    $result = $number1 - $number2;
}

if(isset($_POST['Multiply'])){
    $result = $number1 * $number2;
}

if (isset($_POST['Divide'])) {
    $result = $number1 / $number2;
}
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
    input {
        margin-bottom: 10px;
    }
</style>
</head>
<body>  
<h2>PHP - Simple Calculator Program</h2>
<form action="" method="post">
  <input type="number" name="number1" value='<?php echo $number1;?>'/> First second<br>

  <input type="number" name="number2" value='<?php echo $number2;?>'/> Second Number<br>
  <input readonly type="text" name="result" value='<?php echo $result;?>'/> Result<br>
  <input type="submit" name="Add" value="Add" />
  <input type="submit" name="Subtract" value="Subtract" />
  <input type="submit" name="Multiply" value="Multiply" />
  <input type="submit" name="Divide" value="Divide" />
</form>

</body>
</html