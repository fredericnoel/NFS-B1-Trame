<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>La liste des caisses à Greugreu</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php

$fichier = file_get_contents('./files/cars.json');
$json = json_decode($fichier, true);

$tableau = "<table>";
$tableau .= "<caption>Liste des caisses à Greugreu</caption>";
$tableau .= "<thead>";
$tableau .= "<tr>";

if (count($json) > 0) {
    $tableValuesN0 = $json[0];
    $titles = array_keys($tableValuesN0);
    if (count($titles) > 0) {
        for($i = 0 ; $i < count($titles) ; $i++) {
            $tableau .= "<td>";
            $tableau .= $titles[$i];
            $tableau .= "</td>";
        }
    }
}

$tableau .= "</tr>";
$tableau .= "</thead>";
$tableau .= "<tbody>";

foreach ($json as $value) {
    $tableau .= "<tr>";
    foreach ($value as $valeurs) {
        $tableau .= "<td>";
        $tableau .= $valeurs;
        $tableau .= "</td>";
    }
    $tableau .= "</tr>";
}

$tableau .= "</tbody>";
$tableau .= "</table>";

echo $tableau;
?>
</body>
</html>