<?php require_once 'config/connection.php';?>
<?php

    ///// Input Validation //////////////
    $a = ($_POST['a']);
    $b = ($_POST['b']);
    $c = ($_POST['c']);


    if (empty($a)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "First Number field cannot be empty."
    ];
        goto end;
    }

    if (!is_numeric($a)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "First Number must be a number only (no letters or symbols)."
    ];
        goto end;

    }


    if (empty($b)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Second Number field cannot be empty."
    ];
        goto end;
    }


    if (!is_numeric($b)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Second Number must be a number only (no letters or symbols)."
    ];
        goto end;

    }


    if (empty($c)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Third Number field cannot be empty."
    ];
        goto end;
    }


    if (!is_numeric($c)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Third Number must be a number only (no letters or symbols)."
    ];
        goto end;

    }

        //process
        $d = $b * $b;
        $e = 4 * $a * $c;
        $f = $d - $e;
        $g = sqrt($f);
        $h = 2 * $a;
        $i = -$b + $g;
        $j = -$b - $g;
        $k = $i / $h;
        $l = $j / $h;
        $x1 = round($k, 2);
        $x2 = round($l, 2);



    $response = [
        'response' => 200,
        'success' => true,
        'x' => "$x1 or $x2 "
    ];

end:
echo json_encode ($response);
?>