<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator using switch statement</title>
</head>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$result = $_POST['result'];
$operator = $_POST['operator'];

if(is_numeric($first_num) && is_numeric($second_num)) {
    switch($operator) {
        case 'Add':
            $result = $first_num + $second_num;
            break;
        case 'Subtract':
            $result = $first_num - $second_num;
            break;
        case 'Divide':
            $result = $first_num / $second_num;
            break;
        case 'Multiply':
            $result = $first_num * $second_num;

    }
}
?>
<body>
<div id="page-wrap">
<h1> The Simple Calculator Designed using PHP switch statement </h1>
<form action="" method="POST">
    <p>
    <input type="number" id="first_num" name="first_num" required value="<?php echo $first_num;?>" />
    <b>First Number</b>
    </p>
    <p>
    <input type="number" id="second_num" name="second_num" required value="<?php echo $second_num;?>" />
    <b>Second Number</b>
    </p>
    <p>
    <input readonly id="result" name="result" value="<?php echo $result;?>" />
    <b>Result</b>
    </p>
    <input value="Add" type="submit" name="operator" />
    <input value="Subtract" type="submit" name="operator" />
    <input value="Divide" type="submit" name="operator" />
    <input value="Multiply" type="submit" name="operator" />
</form>
</div>
</body>
</html>