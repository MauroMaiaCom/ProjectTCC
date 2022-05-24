<?php
    require_once '../php/useradm.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devise-width,initial-scale=1.0">
        <title>Sobre o Projeto</title>
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/sobreprojeto.css">
        <style>
            body
            {
                background-image: url("../img/terra.jpg");
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
                    <img src="../img/menu_2.png" alt="">
                </label>
                <nav>
                    <ul>

                        <li><a href="../index.php">Home</a></li>
                        <li><a href="sobreprojeto.php">Projeto</a></li>
                        <li><a href="faleconosco.php">Fale Conosco</a></li>
                        <?php
                            if (isset($_SESSION['id_ADM']))
                            {
                                ?>
                                    <li><a href="../php/exit.php">Sair</a></li>
                                <?php
                            }
                            else
                            {
                                ?>
                                    <li>
                                        <a href="../logadm.php">Supervisão de Processo</a>
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
                <h1>Projeto Lucy</h1>
                <h2>Levando tecnologia para o Agronegocio</h2><br><br>
            </div><br>
            <img src="../img/fundo-transparente-01.png" width="250px">       
        </div>

        <div class="rodape">
            <h2>Projeto de supervisionamento de processos</h2><br>
            <p>Na busca pelo melhor controle e supervisionamento de equipamentos agricolas,
            a Kipa traz o projeto lucy, levando a agricultura para a era da industria 4.0.
                Facilitando a vida do produtor de alimentos desidratados, fornecendo a ele um
            supervisonamento do seu processo em qualquer lugar a qualquer hora. 
            </p>
        </div>

        <div class="fim">
            <p>Copyright &copy; 2020 - By K.I.P.A Tecnologia e Automação <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
        </div>

    </body>
</html>