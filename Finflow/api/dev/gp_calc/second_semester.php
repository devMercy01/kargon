<?php require_once '../config/connection.php'; ?>
<?php

    ///// Input Validation //////////////
    $DBM201  = $_POST['DBM201'];
    $UI_UX202 = $_POST['UI_UX202'];
    $AI203  = $_POST['AI203'];
    $SQT204 = $_POST['SQT204'];
    $AA205 = $_POST['AA205'];
    $DEVOPS206 = $_POST['DEVOPS206'];


    if (empty($DBM201)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "DBM201 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($DBM201)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "DBM201 must be numeric."
        ];
        goto end;
    }

    if ($DBM201  <= 10 || $DBM201 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "DBM201 must be between 11 and 100."
        ];
        goto end;
    }

    if (empty($UI_UX202)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "UI_UX202 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($UI_UX202)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "UI_UX202 must be numeric."
        ];
        goto end;
    }

    if ($UI_UX202  <= 10 || $UI_UX202 >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "UI_UX202 must be between 11 and 100."
        ];
        goto end;
    }


    if (empty($AI203)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AI203 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($AI203)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AI203 must be numeric."
        ];
        goto end;
    }

    if ($AI203  <= 10 || $AI203  >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AI203 must be between 11 and 100."
        ];
        goto end;
    }

    if (empty($SQT204)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SQT204 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($SQT204)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SQT204 must be numeric."
        ];
        goto end;
    }

    if ($SQT204  <= 10 || $SQT204  >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "SQT204 must be between 11 and 100."
        ];
        goto end;
    }

    if (empty($AA205)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AA205 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($AA205)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AA205 must be numeric."
        ];
        goto end;
    }

    if ($AA205  <= 10 || $AA205  >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "AA205 must be between 11 and 100."
        ];
        goto end;
    }


    if (empty($DEVOPS206)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "DEVOPS206 field cannot be empty."
        ];
        goto end;
    }

    if (!is_numeric($DEVOPS206)) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "DEVOPS206 must be numeric."
        ];
        goto end;
    }

    if ($DEVOPS206  <= 10 || $DEVOPS206  >= 101) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "DEVOPS206 must be between 11 and 100."
        ];
        goto end;
    }

        //process

        if ($DBM201 >= 80 and $DBM201 <= 100) 
            $grade_for_DBM201 = 4.0 * 5;
        elseif ($DBM201 >= 70 and $DBM201 <= 79.9) 
            $grade_for_DBM201 = 3.5 * 5;
        elseif ($DBM201 >= 60 and $DBM201 <= 69.9) 
            $grade_for_DBM201 = 3.0 * 5;
        elseif ($DBM201 >= 50 and $DBM201 <= 59.9) 
            $grade_for_DBM201 = 2.5 * 5;
        elseif ($DBM201 >= 40 and $DBM201 <= 49.9) 
            $grade_for_DBM201 = 2.0 * 5;
        else $grade_for_DBM201 = 1.99 * 5;

        if ($UI_UX202 >= 80 and $UI_UX202 <= 100) 
            $grade_for_UI_UX202 = 4.0 * 4;
        elseif ($UI_UX202 >= 70 and $UI_UX202 <= 79.9) 
            $grade_for_UI_UX202 = 3.5 * 4;
        elseif ($UI_UX202 >= 60 and $UI_UX202 <= 69.9) 
            $grade_for_UI_UX202 = 3.0 * 4;
        elseif ($UI_UX202 >= 50 and $UI_UX202 <= 59.9) 
            $grade_for_UI_UX202 = 2.5 * 4;
        elseif ($UI_UX202 >= 40 and $UI_UX202 <= 49.9) 
            $grade_for_UI_UX202 = 2.0 * 4;
        else $grade_for_UI_UX202 = 1.99 * 4;

        if ($AI203 >= 80 and $AI203 <= 100) 
            $grade_for_AI203 = 4.0 * 4;
        elseif ($AI203 >= 70 and $AI203 <= 79.9) 
            $grade_for_AI203 = 3.5 * 4;
        elseif ($AI203 >= 60 and $AI203 <= 69.9) 
            $grade_for_AI203 = 3.0 * 4;
        elseif ($AI203 >= 50 and$AI203 <= 59.9) 
            $grade_for_AI203 = 2.5 * 4;
        elseif ($AI203 >= 40 and $AI203 <= 49.9) 
            $grade_for_AI203 = 2.0 * 4;
        else $grade_for_AI203 = 1.99 * 4;

        if ($SQT204 >= 80 and $SQT204 <= 100) 
            $grade_for_SQT204 = 4.0 * 4;
        elseif ($SQT204 >= 70 and $SQT204 <= 79.9) 
            $grade_for_SQT204 = 3.5 * 4;
        elseif ($SQT204 >= 60 and $SQT204 <= 69.9) 
            $grade_for_SQT204 = 3.0 * 4;
        elseif ($SQT204 >= 50 and $SQT204 <= 59.9) 
            $grade_for_SQT204 = 2.5 * 4;
        elseif ($SQT204 >= 40 and $SQT204 <= 49.9)
            $grade_for_SQT204 = 2.0 * 4;
        else $grade_for_SQT204 = 1.99 * 4;

        if ($AA205 >= 80 and $AA205 <= 100) 
            $grade_for_AA205 = 4.0 * 4;
        elseif ($AA205 >= 70 and $AA205 <= 79.9) 
            $grade_for_AA205 = 3.5 * 4;
        elseif ($AA205 >= 60 and $AA205 <= 69.9) 
            $grade_for_AA205 = 3.0 * 4;
        elseif ($AA205 >= 50 and $AA205 <= 59.9)
            $grade_for_AA205 = 2.5 * 4;
        elseif ($AA205 >= 40 and $AA205 <= 49.9)
            $grade_for_AA205 = 2.0 * 4;
        else $grade_for_AA205 = 1.99 * 4;

        if ($DEVOPS206 >= 80 and $DEVOPS206 <= 100) 
            $grade_for_DEVOPS206 = 4.0 * 4;
        elseif ($DEVOPS206 >= 70 and $DEVOPS206 <= 79.9)
            $grade_for_DEVOPS206 = 3.5 * 4;
        elseif ($DEVOPS206 >= 60 and$DEVOPS206 <= 69.9) 
            $grade_for_DEVOPS206 = 3.0 * 4;
        elseif ($DEVOPS206 >= 50 and $DEVOPS206 <= 59.9)
            $grade_for_DEVOPS206 = 2.5 * 4;
        elseif ($DEVOPS206 >= 40 and $DEVOPS206 <= 49.9) 
            $grade_for_DEVOPS206 = 2.0 * 4;
        else $grade_for_DEVOPS206 = 1.99 * 4;

        $total_unit2 = 25;
        $total_gp2 = $grade_for_DBM201 + $grade_for_UI_UX202 + $grade_for_AI203 + $grade_for_SQT204 + $grade_for_AA205 + $grade_for_DEVOPS206;
        $gpa2 = round($total_gp2 / $total_unit2, 2);

    $response = [
        'response' => 200,
        'success' => true,
        'second_semester' => [
        'total_grade_point' => $total_gp2,
        'GPA' => $gpa2
        ],
        'description' => "Second semester GPA Is $gpa2 "
    ];

end:
echo json_encode($response);
?>
