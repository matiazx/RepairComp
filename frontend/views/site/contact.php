<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact - Car Repair Shop Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css">
    <![endif]-->
</head>
<body>

<div id="body">
    <div class="content">
        <div class="section">
            <div class="contact">

                <h2>Historico Avarias</h2>
                <h3>Consulte aqui o seu historico</h3>
                <form action="index.html">
                    <label for="name"> <span>Tipo Equipamento</span>
                        <input type="text" name="equip" id="equip">
                    </label>
                    <label for="email"> <span>Referência</span>
                        <input type="text" name="referencia" id="referencia">
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
