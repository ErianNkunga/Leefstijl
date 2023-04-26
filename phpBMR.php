<?php
//voor BMR

// Geeft de cijfers in de twee textbox een variable
$lengte = $_GET["BMRlengte"];
$geslacht = $_GET["Geslacht"];
$gewicht = $_GET["BMRgewicht"];
$leeftijd = $_GET["leeftijd"];

    
        // Kijkt of de user welke radiobutton heeft geklikt
    if ($geslacht == "Man") 
    {
        $totaal = (((13.7516 * $gewicht) + (5.0033 * $lengte)-(6.755 *$leeftijd)) + 66.473);
        // Rondt het aff
        $BMR = round($totaal, 2);
        echo "$BMR per dag.";
    }

    else if ($geslacht == "vrouw")
    {
        $totaal = (((9.5634 *$gewicht) + (1.8496 * $lengte)- (4.6756 *$leeftijd)) + 655.0955);
        $BMR = round($totaal, 2);
        echo "$BMR per dag.";
    } 

// als de user niks heeft geklikt dan komt dit te staan
    else 
    {
        echo "Je moet aangeven of je een man of vrouw bent.";
    }

 










?>