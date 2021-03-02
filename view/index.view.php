<?php
use VehicleApp\Vehicle;
use VehicleApp\Auto;
use VehicleApp\Bike;
use VehicleApp\Motorcycle;
use VehicleApp\Render;
$auto=new Auto("audi",'a6');
$auto->setAprasymas("greitas");
$auto->setGalia("200ag");
$auto->setKiekZmoniu(5);
$auto->setMaxGreitis(220);
$auto->setSvoris("1.2t");
$auto->setYraVariklis("yra");
$auto->setKaina(2000);
$auto->setKiekVaromu(4);

$bike=new Bike("kazkoks",'kazkoks');
$bike->setAprasymas("letas");
$bike->setGalia("100kw");
$bike->setKiekZmoniu(1);
$bike->setMaxGreitis(25);
$bike->setSvoris("15kg");
$bike->setYraVariklis("yra");
$bike->setKaina(500);
$bike->setTipas("Elektrinis");

$moto=new Motorcycle("Java",'Java');
$moto->setAprasymas("greitas");
$moto->setGalia("100ag");
$moto->setKiekZmoniu(2);
$moto->setMaxGreitis(100);
$moto->setSvoris("200kg");
$moto->setYraVariklis("yra");
$moto->setKaina(500);
$moto->setKategorija("Klasikinis");


?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
<h1>Motociklas</h1>
<table>
    <thead>
    <tr>
        <th>Modelis</th>
        <th>Marke</th>
        <th>Kaina</th>
        <th>Svoris</th>
        <th>Ar su varikliu</th>
        <th>Galia</th>
        <th>Max. Greitis</th>
        <th>Aprasymas</th>
        <th>Zmoniu skaicius</th>
        <th>Kategorija</th>
    </tr>
    </thead>
    <tbody>
        <?php Render::Show($moto->showMotorcycle())?>
    </tbody>
</table>
<h1>Dviratis</h1>
<table>
    <thead>
    <tr>
        <th>Modelis</th>
        <th>Marke</th>
        <th>Kaina</th>
        <th>Svoris</th>
        <th>Ar su varikliu</th>
        <th>Galia</th>
        <th>Max. Greitis</th>
        <th>Aprasymas</th>
        <th>Zmoniu skaicius</th>
        <th>Tipas</th>
    </tr>
    </thead>
    <tbody>
    <?php Render::Show($bike->showBike())?>
    </tbody>
</table>
<h1>Automobilis</h1>
<table>
    <thead>
    <tr>
        <th>Modelis</th>
        <th>Marke</th>
        <th>Kaina</th>
        <th>Svoris</th>
        <th>Ar su varikliu</th>
        <th>Galia</th>
        <th>Max. Greitis</th>
        <th>Aprasymas</th>
        <th>Zmoniu skaicius</th>
        <th>Kiek VAromu</th>
    </tr>
    </thead>
    <tbody>
    <?php Render::Show($auto->showAuto())?>
    </tbody>
</table>

</body>
</html>

