<?php
class Speedometer{
    const RATIOKMTOMILES = 0.621371;
    public static function convertKmToMiles($nb)
    {
        $result = $nb * self::RATIOKMTOMILES;
        return $result;
    }
}