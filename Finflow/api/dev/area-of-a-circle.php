<?php require_once 'config/connection.php'; ?>

<?php
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

    //*process
    $area = 3.142 * $radius * $radius;

    $response = [
        'response' => 200,
        'success' => true,
        'area' => $area,
        'description' => "3.142 * $radius * $radius = $area"
    ];


end:
echo json_encode($response);
?>
