<?php require_once 'config/connection.php';?>
<?php

     ///// Input Validation //////////////
    $radius = ($_POST['radius']);
    
    if (empty($radius)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Radius field cannot be empty."
        ];
        goto end;
    }


    if (!is_numeric($radius)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Radius must be a number only (no letters or symbols)."
        ];
        goto end;
    }
    
        //process
        $circumference = 2 * 3.142 * $radius;

        $response = [
            'response' => 200,
            'success' => true,
            'circumference' => $circumference,
            'description' => "2 * 3.142 * $radius = $circumference"
        ];


end;
echo json_encode($response);
?>