<?php
/**

 */

namespace Foodbag\Body;

use PhpUnitsOfMeasure\PhysicalQuantity\Length;
use PhpUnitsOfMeasure\PhysicalQuantity\Mass;

define("METRIC", 1);
define("IMPERIAL", 2);

class Calculator
{

    public static function bmi($weight, $height) {
        return ( $weight / ($height*$height) );
    }

    public static function bmr($weight,$height,$age,$gender = 'm') {

        //Metric BMR Formula
        //Women: BMR = 655 + ( 9.6 x weight in kilos ) + ( 1.8 x height in cm ) - ( 4.7 x age in years )
        //Men: BMR = 66 + ( 13.7 x weight in kilos ) + ( 5 x height in cm ) - ( 6.8 x age in years )

        $height = $height * 100;

        $bmr = false;

        if(strtolower($gender) == "f") {
            $bmr = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7*$age);
        } else {
            $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8*$age);
        }

        return $bmr;
    }
}