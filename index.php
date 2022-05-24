<?php
    require_once 'php/useradm.php';
    session_start();
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devise-width,initial-scale=1.0">
        <title>Projeto Lucy</title>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/inicio.css">
        <style>
            body
            {
                background-image: url("img/FundoIn.jpg");
                background-repeat: no-repeat;
                font-family: 'Times New Roman', Times, serif;
                max-height: 100%;
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        <nav class="Tip01">
            <header class="header">
                <input type="checkbox" id="chec">
                <label for="chec">
                    <img src="img/menu_2.png" alt="">
                </label>
                <nav>
                    <ul>

                        <?php
                        if (isset($_SESSION['id_ADM']))
                        {
                            ?>
                            <li><a href="pgs/ADM/inicioadm.php">Pagina ADM</a></li>
                            <?php
                        }
                        else
                        {
                            ?>
                            <li><a href="index.php">Home</a></li>
                            <?php
                        }
                    
                    ?>
                        <li><a href="pgs/sobreprojeto.php">Projeto</a></li>
                        <li><a href="pgs/faleconosco.php">Fale Conosco</a></li>
                        <?php
                            if (isset($_SESSION['id_ADM']))
                            {
                                ?>
                                    <li><a href="php/exit.php">Sair</a></li>
                                <?php
                            }
                            else
                            {
                                ?>
                                    <li>
                                        <a href="logadm.php">Supervisão de Processo</a>
                                    </li>
                                <?php
                            }
                        ?>
                    </ul>

                </nav>
            </header>
        </nav>
                
        
        <div class="corpo">
            <div class="Tex">
                <h1>Supervisionamento de Sistema de Secagem</h1>
                <h2>Projeto Lucy</h2>
            </div><br><br><br><br><br><br><br>
            <img src="img/fundo-transparente-01.png" width="250px">            
        </div>

        <footer id="rodape">

            <div class="ids">
                <h1>Links Relacionados</h1>
                <ul>
                    <li><a href="#">Equipamentos Automatizados</a></li>
                    <li><a href="#">Desafios na engenharia</a></li>
                    <li><a href="#">Agronegócio</a></li>
                </ul>
            </div>
            <div class="agradecer">
                <h1>Idealizadores do Projeto</h1><br>
                <ul>
                    <li>MSc. Juan Martin Carrizo</li>
                    <li>Mauro Maia - Eng. Mecatrônico</li>
                    <li>Rosivaldo Melo - Eng. Mecatrônico</li>
                </ul>
            </div>

        </footer>
        <div class="fim">
            <p>Copyright &copy; 2020 - By K.I.P.A Tecnologia e Automação <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
        </div>

    </body>
</html> 