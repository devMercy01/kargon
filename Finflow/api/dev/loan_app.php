<?php require_once 'config/connection.php'; ?>

<?php
    ///// Input Validation //////////////
    $loan_amount = $_POST['loan_amount'];
    $loan_duration = $_POST['loan_duration'];




    if ($loan_amount == ""){
        $response = [
            'response' => 402,
            'success' => false,
            'message' => "Loan amount is required"
        ];
        goto end;
    }

    if (!is_numeric($loan_amount) || $loan_amount <= 1000) {
        $response = [
            'response' => 401,
            'success' => false,
            'message' => "Invalid input! Enter a valid amount"
        ];
        goto end;
    }

    if ($loan_duration == "") {
        $response = [
            'response' => 402,
            'success' => false,
            'message' => "Loan duration is required"
        ];
        goto end;
    }



    if (!is_numeric($loan_duration) || $loan_duration <= 0) {
        $response = [
            'response' => 403,
            'success' => false,
            'message' => "Loan duration must be a positive number"
        ];
        goto end;
    }
    

        //process
        $current_date = new DateTime();
        $monthly_interest_rate = 1.5;

        $repayment = $loan_amount / $loan_duration;
        $principal = $loan_amount;

        $total_interest = 0;
        $total_repayment = 0;
        $data = [];

        for ($month = 1; $month <= $loan_duration; $month++) {
            $interest = ($monthly_interest_rate / 100) * $principal;
            $monthly_repayment = $repayment + $interest;

            $repayment_date = (clone $current_date)->modify("+$month months")->format('d/m/Y');

            $data[] = [
                'month' => $month,
                'principal' => '₦' . number_format(round($principal, 2), 2),
                'repayment' => '₦' . number_format(round($repayment, 2), 2),
                'interest' => '₦' . number_format(round($interest, 2), 2),
                'monthly_repayment' => '₦' . number_format(round($monthly_repayment, 2), 2),
                'repayment_date' => $repayment_date
            ];

            $total_interest += $interest;
            $total_repayment += $monthly_repayment;
            $principal -= $repayment;
        }

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "Loan calculation successful",
        'loan_amount' => '₦' . number_format(round($loan_amount, 2), 2),
        'loan_duration' => $loan_duration,
        'total_interest' => '₦' . number_format(round($total_interest, 2), 2),
        'total_repayment' => '₦' . number_format(round($total_repayment, 2), 2),
        'data' => $data
    ];


end:
echo json_encode($response);
?>
