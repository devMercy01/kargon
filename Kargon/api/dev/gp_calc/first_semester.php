<?php require_once '../config/connection.php'; ?>
<?php

    ///// Input Validation //////////////
    $SDT101 = $_POST['SDT101'];
    $MAD102 = $_POST['MAD102'];
    $SDA103 = $_POST['SDA103'];
    $WAD104 = $_POST['WAD104'];
    $NS105  = $_POST['NS105'];
    $AGD106 = $_POST['AGD106'];


    if (empty($SDT101)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SDT101 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($SDT101)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SDT101 must be numeric."
        ];
        goto end;
    }

    if ($SDT101  <= 10 || $SDT101 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SDT101 must be between 11 and 100."
        ];
        goto end;
    }



    if (empty($MAD102)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "MAD102 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($MAD102)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "MAD102 must be numeric."
        ];
        goto end;
    }


    if ($MAD102  <= 10 || $MAD102 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "MAD102 must be between 11 and 100."
        ];
        goto end;
    }


    if (empty($SDA103)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SDA103 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($SDA103)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SDA103 must be numeric."
        ];
        goto end;
    }

    if ($SDA103  <= 10 || $SDA103 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SDA103 must be between 11 and 100."
        ];
        goto end;
    }



    if (empty($WAD104 )) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "WAD104 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($WAD104 )) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "WAD104 must be numeric."
        ];
        goto end;
    }


    if ($WAD104  <= 10 || $WAD104 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "WAD104 must be between 11 and 100."
        ];
        goto end;
    }

    if (empty($NS105)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "NS105 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($NS105)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "NS105 must be numeric."
        ];
        goto end;
    }


    if ($NS105  <= 10 || $NS105 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "NS105 must be between 11 and 100."
        ];
        goto end;
    }

    if (empty($AGD106)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AGD106 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($AGD106)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AGD106 must be numeric."
        ];
        goto end;
    }

    if ($AGD106  <= 10 || $AGD106 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AGD106 must be between 11 and 100."
        ];
        goto end;
    }

        //*process

        if ($SDT101 >= 80 and $SDT101 <= 100)
            $grade_for_SDT101 = 4.0 * 4;
        elseif ($SDT101 >= 70 and $SDT101 <= 79.9)
            $grade_for_SDT101 = 3.5 * 4;
        elseif ($SDT101 >= 60 and $SDT101 <= 69.9) 
            $grade_for_SDT101 = 3.0 * 4;
        elseif ($SDT101 >= 50 and $SDT101 <= 59.9) 
            $grade_for_SDT101 = 2.5 * 4;
        elseif ($SDT101 >= 40 and $SDT101 <= 49.9) 
            $grade_for_SDT101 = 2.0 * 4;
        else $grade_for_SDT101 = 1.99 * 4;

        if ($MAD102 >= 80 and $MAD102 <= 100)
            $grade_for_MAD102 = 4.0 * 4;
        elseif ($MAD102 >= 70 and $MAD102 <= 79.9) 
            $grade_for_MAD102 = 3.5 * 4;
        elseif ($MAD102 >= 60 and $MAD102 <= 69.9) 
            $grade_for_MAD102 = 3.0 * 4;
        elseif ($MAD102 >= 50 and $MAD102 <= 59.9) 
            $grade_for_MAD102 = 2.5 * 4;
        elseif ($MAD102 >= 40 and $MAD102 <= 49.9) 
            $grade_for_MAD102 = 2.0 * 4;
        else $grade_for_MAD102 = 1.99 * 4;

        if ($SDA103 >= 80 and $SDA103 <= 100)  
            $grade_for_SDA103 = 4.0 * 5;
        elseif ($SDA103 >= 70 and $SDA103 <= 79.9) 
            $grade_for_SDA103 = 3.5 * 5;
        elseif ($SDA103 >= 60 and $SDA103 <= 69.9) 
            $grade_for_SDA103 = 3.0 * 5;
        elseif ($SDA103 >= 50 and $SDA103 <= 59.9) 
            $grade_for_SDA103 = 2.5 * 5;
        elseif ($SDA103 >= 40 and $SDA103 <= 49.9) 
            $grade_for_SDA103 = 2.0 * 5;
        else $grade_for_SDA103 = 1.99 * 5;

        if ($WAD104 >= 80 and $WAD104 <= 100) 
        $grade_for_WAD104 = 4.0 * 4;
        elseif ($WAD104 >= 70 and $WAD104 <= 79.9) 
        $grade_for_WAD104 = 3.5 * 4;
        elseif ($WAD104 >= 60 and $WAD104 <= 69.9) 
            $grade_for_WAD104 = 3.0 * 4;
        elseif ($WAD104 >= 50 and $WAD104 <= 59.9) 
            $grade_for_WAD104 = 2.5 * 4;
        elseif ($WAD104 >= 40 and $WAD104 <= 49.9) 
            $grade_for_WAD104 = 2.0 * 4;
        else $grade_for_WAD104 = 1.99 * 4;

        if ($NS105 >= 80 and $NS105 <= 100) 
            $grade_for_NS105 = 4.0 * 4;
        elseif ($NS105 >= 70 and $NS105 <= 79.9) 
            $grade_for_NS105 = 3.5 * 4;
        elseif ($NS105 >= 60 and $NS105 <= 69.9) 
            $grade_for_NS105 = 3.0 * 4;
        elseif ($NS105 >= 50 and $NS105 <= 59.9) 
            $grade_for_NS105 = 2.5 * 4;
        elseif ($NS105 >= 40 and $NS105 <= 49.9)
            $grade_for_NS105 = 2.0 * 4;
        else $grade_for_NS105 = 1.99 * 4;

        if ($AGD106 >= 80 and $AGD106 <= 100) 
            $grade_for_AGD106 = 4.0 * 4;
        elseif ($AGD106 >= 70 and $AGD106 <= 79.9) 
            $grade_for_AGD106 = 3.5 * 4;
        elseif ($AGD106 >= 60 and $AGD106 <= 69.9) 
            $grade_for_AGD106 = 3.0 * 4;
        elseif ($AGD106 >= 50 and $AGD106 <= 59.9) 
            $grade_for_AGD106 = 2.5 * 4;
        elseif ($AGD106 >= 40 and $AGD106 <= 49.9) 
            $grade_for_AGD106 = 2.0 * 4;
        else $grade_for_AGD106 = 1.99 * 4;

        $total_unit1 = 25;
        $total_gp1 = $grade_for_SDT101 + $grade_for_MAD102 + $grade_for_SDA103 + $grade_for_WAD104 + $grade_for_NS105 + $grade_for_AGD106;
        $gpa1 = round($total_gp1 / $total_unit1, 2);




    $response = [
        'response' => 200,
        'success' => true,
        'first_semester' => [
        'total_grade_point' => $total_gp1,
        'GPA' => $gpa1
        ],
        'description' => "First semester GPA Is $gpa1 "
    ];


end:
echo json_encode($response);
?>
