<?php
class Speedometer{
    public static function convertKmToMiles($nb)
    {
        $kmToMilesRatio = 0.621371;
        $result = $nb * $kmToMilesRatio;
        return $result;
    }
}