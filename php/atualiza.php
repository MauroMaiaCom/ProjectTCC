<?php


$rand = rand(1,20);
echo "Temperatura: " . $rand;

echo "<meta HTTP-EQUIV = 'refresh' CONTENT='1'>";


?>

var data = google.visualization.arrayToDataTable([
                ['Tempo'      , 'Sensor01', 'Sensor02', 'Sensor03', 'Exautor(%)', 'Resistencia'],
                ['Inicio'     ,  <?= $dados[0]["sensor01"] ?>,      <?= $dados[0]["sensor02"] ?>,         <?= $dados[0]["sensor03"] ?>,             <?= $dados[0]["exaustor"] ?>,           <?= $dados[0]["resistencia"] ?>],
                ['Processando',  <?= $dados[0]["sensor01"] ?>,      <?= $dados[0]["sensor02"] ?>,        <?= $dados[0]["sensor03"] ?>,             <?= $dados[0]["exaustor"] ?>,          <?= $dados[0]["resistencia"] ?>],
                ['Processando',  <?= $dados[0]["sensor01"] ?>,      <?= $dados[0]["sensor02"] ?>,        <?= $dados[0]["sensor03"] ?>,             <?= $dados[0]["exaustor"] ?>,           <?= $dados[0]["resistencia"] ?>],
                ['Fim'        ,  <?= $dados[0]["sensor01"] ?>,      <?= $dados[0]["sensor02"] ?>,        <?= $dados[0]["sensor03"] ?>,             <?= $dados[0]["exaustor"] ?>,           <?= $dados[0]["resistencia"] ?>],
                ]);