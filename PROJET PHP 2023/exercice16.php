<?php
function sinusAngle($angle, $unite = 'radian') {
    switch (strtolower($unite)) {
        case 'radian':
            return sin($angle);
        case 'degre':
            return sin(deg2rad($angle));
        case 'grade':
            return sin(deg2rad($angle) * 10 / 9);
        default:
            return "Unité non reconnue";
    }
}

// Exemples d'utilisation
$angleEnRadian = M_PI / 4;
$angleEnDegre = 45;
$angleEnGrade = 50;

echo "Sinus de $angleEnRadian radian : " . sinusAngle($angleEnRadian) . "<br>";
echo "Sinus de $angleEnDegre degré : " . sinusAngle($angleEnDegre, 'degre') . "<br>";
echo "Sinus de $angleEnGrade grade : " . sinusAngle($angleEnGrade, 'grade') . "<br>";
?>