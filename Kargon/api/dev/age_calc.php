<?php require_once 'config/connection.php'; ?>

<?php
   
    ///// Input Validation //////////////
    $birth_year = ($_POST['birth_year']);
    $birth_month  = ($_POST['birth_month']);
    $birth_day= ($_POST['birth_day']);

    $current_day = date('d');
    $current_month = date('m');
    $current_year = date('Y');
    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $birth_month, $birth_year);

    if (empty($birth_year)){
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Birth year field are required"
    ];
        goto end;
    }


    if (!is_numeric($birth_year)){
        $response = [
            'response' => 401,
            'success' => false,
            'message' => "Birth year must be a number only."
    ];
        goto end;

    }

    if (empty($birth_month)){
        $response = [
            'response' => 402,
            'success' => false,
            'message' => "Birth month field are required"
    ];
        goto end;
    }

    if (!is_numeric($birth_month)){
        $response = [
            'response' => 403,
            'success' => false,
            'message' => "Birthday must be a number only."
    ];
        goto end;

    }


    if (empty($birth_day)){
        $response = [
            'response' => 404,
            'success' => false,
            'message' => "Birthday field are required"
    ];
        goto end;
    }


    if (!is_numeric($birth_day)){
        $response = [
            'response' => 405,
            'success' => false,
            'message' => "Birthday must be a number only."
    ];
        goto end;

    }

    if ($birth_month == 2 && $birth_day > $days_in_month) {
        $response = [
            'response' => 406,
            'success' => false,
            'message' => "INVALID BIRTHDAY DATE! PLEASE GO BACK AND SELECT ANOTHER DATE"
        ];
        goto end;
    }

    if (
        ($birth_year > $current_year) ||
        ($birth_year == $current_year && $birth_month > $current_month) ||
        ($birth_year == $current_year && $birth_month == $current_month && $birth_day > $current_day)
    ) {
        $response = [
            'response' => 411,
            'success' => false,
            'message' => "INVALID BIRTHDAY DATE! PLEASE GO BACK AND SELECT ANOTHER DATE"
        ];
        goto end;
    }

    if ($birth_year < 1 || $birth_year > $current_year) {
        $response = [
            'response' => 407,
            'success' => false,
            'message' => "INVALID INPUT! PROVIDE A VALID BIRTH YEAR"
        ];
        goto end;
    }


    if ($birth_month < 1 || $birth_month > 12 || $birth_day < 1 || $birth_day > 31) {
        $response = [
            'response' => 400,
            'success' => false,
            'message' => "Enter a valid birth month (1-12) and day (1-31)."
        ];
        goto end;
    }



        // Year Calculation
        if (($birth_month == $current_month && $birth_day > $current_day) ||
            ($birth_month > $current_month)) {
            $result_year = $current_year - $birth_year - 1;
        } else {
            $result_year = $current_year - $birth_year;
        }

        // Month Calculation
        if ($birth_month < $current_month && $birth_day > $current_day) {
            $result_month = $current_month - $birth_month - 1;
        } elseif ($birth_month == $current_month && $birth_day > $current_day) {
            $result_month = 11;
        } elseif ($birth_month > $current_month) {
            if ($birth_day <= $current_day) {
                $result_month = 12 - ($birth_month - $current_month);
            } else {
                $result_month = 11 - ($birth_month - $current_month);
            }
        } else {
            $result_month = $current_month - $birth_month;
        }

        // Day Calculation
        if ($birth_day <= $current_day) {
            $result_day = $current_day - $birth_day;
        } else {
            $result_day = $days_in_month - $birth_day + $current_day;
        }
        

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "You are $result_year Year(s), $result_month Month(s), $result_day Day(s) old."
    ];

   


end:
echo json_encode($response);
?>
