<?php require_once 'config/connection.php'; ?>
<?php

$SDT101 = $_POST['SDT101'];
$MAD102 = $_POST['MAD102'];
$SDA103 = $_POST['SDA103'];
$WAD104 = $_POST['WAD104'];
$NS105  = $_POST['NS105'];
$AGD106 = $_POST['AGD106'];

$DBM201    = $_POST['DBM201'];
$UI_UX202  = $_POST['UI_UX202'];
$AI203     = $_POST['AI203'];
$SQT204    = $_POST['SQT204'];
$AA205     = $_POST['AA205'];
$DEVOPS206 = $_POST['DEVOPS206'];



// first semester
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


// second semester
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
 'first_semester' => [
    'total_grade_point' => $total_gp2,
    'GPA' => $gpa2
    ],
    'description' => "First semester GPA Is $gpa2 "
];

end:
echo json_encode($response);
?>
