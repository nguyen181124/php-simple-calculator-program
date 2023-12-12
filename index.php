<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["number1"])) {
        $enumber1 = "Hãy nhập số thứ nhất";
    } elseif (!is_numeric($_POST["number1"])) {
        $enumber1 = "Số thứ nhất không hợp lệ";
    } else {
        $number1 = $_POST['number1'];
    }

    if (empty($_POST["number2"])) {
        $enumber2 = "Hãy nhập số thứ hai";
    } elseif (!is_numeric($_POST["number2"])) {
        $enumber2 = "Số thứ hai không hợp lệ";
    } else {
        $number2 = $_POST['number2'];
    }
}


if (isset($_POST['Add'])) {
    if ($enumber1 == "" && $enumber2 == "") {
        $result = $number1 + $number2;
    }
}

if (isset($_POST['Subtract'])) {
    if ($enumber1 == "" && $enumber2 == "") {
        $result = $number1 - $number2;
    }
}

if (isset($_POST['Multiply'])) {
    if ($enumber1 == "" && $enumber2 == "") {
        $result = $number1 * $number2;
    }
}

if (isset($_POST['Divide'])) {
    if ($enumber1 == "" && $enumber2 == "") {
        if ($number2 == 0) {
            $result = "Không thể chia cho 0";
        } else {
            $result = $number1 / $number2;
        }
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h2>PHP - Simple Calculator Program</h2>
    <form action="" method="post">
        <input type="text" name="number1" value='<?php echo $number1; ?>' /> First second<br>
        <span class="error">
            <?php echo $enumber1; ?>
        </span>
        <br>
        <input type="text" name="number2" value='<?php echo $number2; ?>' /> Second Number<br>
        <span class="error">
            <?php echo $enumber2; ?>
        </span>
        <br>
        <input readonly type="text" name="result" value='<?php echo $result; ?>' /> Result<br>
        <input type="submit" name="Add" value="Add" />
        <input type="submit" name="Subtract" value="Subtract" />
        <input type="submit" name="Multiply" value="Multiply" />
        <input type="submit" name="Divide" value="Divide" />
    </form>

</body>

</html