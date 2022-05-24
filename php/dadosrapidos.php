<?php

    include("SC/BBDD.php");
    require_once 'useradm.php';


    $stats = htmlentities(addslashes($_GET['stats']));
    $sensor01 = htmlentities(addslashes($_GET['sensor01']));
    $sensor02 = htmlentities(addslashes($_GET['sensor02']));
    $sensor03 = htmlentities(addslashes($_GET['sensor03']));
    $pressao = htmlentities(addslashes($_GET['pressão']));
    $exaustor = htmlentities(addslashes($_GET['exaustor']));
    $resistencia = htmlentities(addslashes($_GET['resistencia']));
    $fruta = htmlentities(addslashes($_GET['fruta']));

    $us = new Useradm($namebd, $localbd, $dono, $senhbd);
    $us -> salvandoDadosRp($sensor01, $sensor02, $sensor03, $pressao, $exaustor, $resistencia, $fruta, $stats);

?>