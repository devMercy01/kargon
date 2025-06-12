<?php require_once 'config/connection.php'; ?>
<?php

    ///// Input Validation //////////////
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];
    $op = $_POST['op'];

    if (empty($firstNumber)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "First Number field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($firstNumber)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "First Number must be numeric."
        ];
        goto end;
    }

    if ($secondNumber == "") {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Second Number field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($secondNumber)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Second Number must be numeric."
        ];
        goto end;
    }

    if (empty($op)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Operator field cannot be empty."
        ];
        goto end;
    }

    $valid_operators = ['+', '-', '*', '/'];
    if (!in_array($op, $valid_operators)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Invalid operator. Only +, -, *, / are allowed."
        ];
        goto end;
    }

    if ($op == '/' && $secondNumber == 0) {
        $response = [
            'response' => 200,
            'success' => false,
            'result' => "",
            'message' => "Cannot divide by zero."
        ];
        goto end;
    }

        //process
        if ($op == '+') {
            $result = $firstNumber + $secondNumber;
        } elseif ($op == '-') {
            $result = $firstNumber - $secondNumber;
        } elseif ($op == '*') {
            $result = $firstNumber * $secondNumber;
        } elseif ($op == '/') {
            $result = $firstNumber / $secondNumber;
        }

    $response = [
        'response' => 200,
        'success' => true,
        'result' => $result,
        'description' => "$firstNumber $op $secondNumber = $result"
    ];

end:
echo json_encode($response);
?>
