<?php
function Triangle($bottom, $height) {
    return $bottom * $height / 2;
}
function Square($bottom,  $height) {
    return $bottom * $height;
}
function Trapezoid($top, $bottom, $height) {
    return ($top + $bottom) * $height / 2;
}

echo Triangle(5, 2) . "<br />";
echo Square(6, 8) . "<br />";
echo Trapezoid(4, 8, 10);