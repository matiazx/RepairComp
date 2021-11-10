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

                <h2>Avaria</h2>
                <h3>Faça aqui o seu pedido</h3>
                <form action="index.html">
                    <label for="equipamento"> <span>Tipo Equipamento</span>
                        <input type="text" name="equip" id="equipamento">
                    </label>
                    <label for="referencia"> <span>Referência</span>
                        <input type="text" name="referencia" id="referencia">
                    </label>
                    <label for="descricao"> <span>Descrição</span>
                        <textarea name="descricao" id="descricao"></textarea>
                    </label>
                    <label for="urgencia"> <span>Nivel Urgência</span>
                        <input type="text" name="urgencia" id="urgencia">

                    </label>
                    <label for="fotografia"> <span>Fotografia</span>
                        <input type="file" accept="image/png, image/jpeg">
                    </label>
                    <input type="submit" name="send" id="send" value="">
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

        <div >
            <a href="index.php" class="logo"><img  src="images/logop.png" alt=""></a>
        </div>


        <div class="connect">
            <h3>Ajuda e suporte:</h3>
            <p>
                suportrepaircomp@gmail.com
            </p>
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
    </div>

</div>
</body>
</html>