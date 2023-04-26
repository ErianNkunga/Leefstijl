<?php
//Voor de BMI


// Geeft de cijfers in de twee textbox een variable
    $lengte = $_GET["BMIlengte"];
    $gewicht = $_GET["BMIgewicht"];

// Rekent de BMI uit een geeft het gelijk een variable
$totaal = $gewicht / ($lengte*$lengte);

// Rondt het aff
$BMI = round($totaal, 2);

//Print de zin en de BMI uit
echo "Je BMI is $BMI";
 


?>