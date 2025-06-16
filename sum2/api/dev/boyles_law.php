<?php require_once 'config/connection.php'; ?>
<?php

    ///// Input Validation //////////////
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];



    // To check for p1
    if (empty($p1)) {
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Initial pressure field cannot be empty."
        ];
        goto end;
    }

    if ($p1 !== '?' && !is_numeric($p1)){ 
        $response = [
            'response' => 100,
            'success' => false,
            'message' => "Initial pressure must be numeric or a question mark (?)."
        ];
        goto end;
    }
   


    // To check for p2
    if (empty($p2)) {
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Final pressure field cannot be empty."
        ];
        goto end;
    }

    if ($p2 !== '?' && !is_numeric($p2)){ 
        $response = [
            'response' => 100,
            'success' => false,
            'message' => "Final pressure must be numeric or a question mark (?)."
        ];
        goto end;
    }

   
    // To check for v1
    if (empty($v1)) {
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Initial volume field cannot be empty."
        ];
        goto end;
    }

    if ($v1 !== '?' && !is_numeric($v1)){ 
        $response = [
            'response' => 100,
            'success' => false,
            'message' => "Initial volume must be numeric or a question mark (?)."
        ];
        goto end;
    }

    // To check for v2
    if (empty($v2)) {
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Final volume field cannot be empty."
        ];
        goto end;
    }

    if ($v2 !== '?' && !is_numeric($v2)){ 
        $response = [
            'response' => 100,
            'success' => false,
            'message' => "Final volume must be numeric or a question mark (?)."
        ];
        goto end;
    }


        // my process for calculation
        if ($p1 === '?') {
            $p1 = $p2 * $v2 / $v1;
            $p1 = round($p1, 2);
            $result = $p1;
            $description = "Initial pressure is $p1 atm.";
        

        } elseif ($p2 === '?') {
            $p2 = $p1 * $v1 / $v2;
            $p2 = round($p2, 2);
            $result = $p2;
            $description = "Initial pressure is $p2 atm.";
            
        } elseif ($v1 === '?') {
            $v1 = $p2 * $v2 / $p1;
            $v1 = round($v1, 2);
            $result = $v1;
            $description = "Initial volume is $v1 L.";

        } elseif ($v2 === '?') {
            $v2 = $p1 * $v1 / $p2;
            $v2 = round($v2, 2);
            $result = $v2;
            $description = "Initial volume is $v2 L.";
        }

    $response = [
        'response' => 200,
        'success' => true,
        'result' => "$result",
        'description' => "$description"
    ];

end:
echo json_encode($response);
?>
