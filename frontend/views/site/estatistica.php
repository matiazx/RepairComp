<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


?>
<!DOCTYPE HTML>

<html>
<head>
    <meta charset="UTF-8">
    <title>Avaria</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/ie.css">

</head>
<body>

<div id="body">
    <div class="content">
        <div class="section">
            <div class="contact">

                <h2>Estatisticas</h2>
                <form action="index.html">
                    <label for="total"> <span>Número Total de Avarias</span>
                        <input type="text" readonly name="total" id="total">
                    </label>
                    <label for="resolvidas"> <span>Número Total de Avarias Resolvias</span>
                        <input type="text"  readonly name="resolvidas" id="resolvidas">
                    </label>
                    <label for="processamento"> <span>Número Total de Avarias em Processamento</span>
                        <input type="text" readonly name="processamento" id="total">
                    </label>
                    <label for="nresolvidas"> <span>Número Total de Avarias não Resolvias</span>
                        <input type="text" readonly name="nresolvidas" id="nresolvidas">
                    </label>
                </form>
            </div>
        </div>
    </div>
    <div id="footer" >
        <div>
            <div class="contact" >
                <h3>Contactos</h3>
                <ul>
                    <li>
                        <b>Morada:</b> <span>Alcobaça</span>
                    </li>
                    <li>
                        <b>Telemovel:</b> <span>934-889-313</span>
                    </li>
                    <li>
                        <b>Fax:</b> <span>934-889-313</span>
                    </li>
                    <li>
                        <b>Email:</b> <span>repaircomp@gmial.com</span>
                    </li>
                </ul>
            </div>

            <div class="connect">
                <h3>Redes Sociais</h3>

                <ul>
                    <li id="facebook">
                        <a href="">facebook</a>
                    </li>
                    <li id="twitter">
                        <a href="">twitter</a>
                    </li>
                    <li id="googleplus">
                        <a href="">googleplus</a>
                    </li>
                </ul>
            </div>
            <div class="connect">
                <a href="index.php" class="logo"><img  src="images/logop.png" alt=""></a>
            </div>
            <div class="connect">
                <h3>Ajuda e suporte:</h3>
                <p>
                    suportrepaircomp@gmail.com
                </p>
            </div>
        </div>

    </div>
</body>
</html>
