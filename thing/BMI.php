<?php

    $weight = $_GET["weight"];
    $length = $_GET["length"];

    BMIcalc($weight, $length);

        function BMIcalc($weight, $length)
        {
            $weight = (int)$weight;
            $length = (int)$length;

            $bmi = $weight / (($length / 10000) * $length);
            $bmi = round($bmi, 1);

            echo '<p class="bold">Gewicht: ' . $weight . ' KG</p>' .
                '<p class="bold">Lengte: ' . $length . ' CM</p>' .
                '<p class="bold">BMI: ' . $bmi . '</p>';


            switch ($bmi) {
                case $bmi < 0 :
                    echo "<p class='bold'>Ongeldige BMI</p>";
                    break;
                case $bmi < 18.5:
                    echo "<p class='bold'>Ondergewicht</p>";
                    break;
                case $bmi >= 18.5 && $bmi < 25:
                    echo "<p class='bold'>Normaal/Gezond gewicht</p>";
                    break;
                case $bmi >= 25 && $bmi < 27:
                    echo "<p class='bold'>Licht overgewicht</p>";
                    break;
                case $bmi >= 27 && $bmi < 30:
                    echo "<p class='bold'>Matig overgewicht</p>";
                    break;
                case $bmi >= 30 && $bmi < 40:
                    echo "<p class='bold'>Obesitas</p>";
                    break;
                case $bmi >= 40 && $bmi < 100:
                    echo "<p class='bold'>Morbide obesitas</p>";
                    break;
                case $bmi >= 100:
                    echo "<p class='bold'>Ongelde BMI</p>";
                    break;
                default:
                    echo "<p class='bold'>Geen valide/missende input</p>";
            }
        }
