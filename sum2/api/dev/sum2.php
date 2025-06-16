<?php require_once 'config/connection.php';?>
<?php

    ///// Input Validation //////////////
    $firstNumber = ($_POST['firstNumber']);
    $secondNumber = ($_POST['secondNumber']);

    if (empty($firstNumber)){
        $response = [
            'response' => 100,
            'success' => false,
            'message' => "First Number field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($firstNumber)){
        $response = [
            'response' => 101,
            'success' => false,
            'message' => "First Number must be a number only (no letters or symbols)."
        ];
        goto end;
    }


    if (empty($secondNumber)){
        $response = [
            'response' => 102,
            'success' => false,
            'message' => "Second Number field cannot be empty."
        ];
        goto end;
    }


    if (!is_numeric($secondNumber)){
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Second Number must be a number only (no letters or symbols)."
        ];
        goto end;
    }

        ///// Process //////////////
        $result = $firstNumber + $secondNumber;

        $response = [
            'response' => 200,
            'success' => true,
            'result' => $result,
            'descriptionOne' => "The sum of $firstNumber and $secondNumber is $result",
            'descriptionTwo' => "$firstNumber + $secondNumber = $result"
        ];


end:
echo json_encode($response);
?>