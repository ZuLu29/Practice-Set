<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = ($_POST["A"]);
    $side2 = ($_POST["B"]);
    $side3 = ($_POST["C"]);

    function calculateTriangleArea($side1, $side2, $side3) {
        // Calculate semi-perimeter
        $s = ($side1 + $side2 + $side3) / 2;
    
        // Calculate area using Heron's formula
        $area = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
    
        return $area;
    }
    $area = calculateTriangleArea($side1, $side2, $side3);
echo "The area of the triangle is: " . $area;
}
?>