<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

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

                <h2>Listagem Avarias</h2>


               <table  class="table table-striped">
                <?php
            {
                echo '<table class="table table-striped">'
                    .'<tr>' .'<th>' . "Data" . '</th>'
                    .'<th>' . "Reparação" . '</th>'
                    .'<th>' . "Cliente" . '</th>'
                    .'<th>' . "Tecnico" . '</th>'
                    .'<th>' . "Estado" . '</th>'
                    . '</tr>'
                    .'</table>';
                echo '<div class="container-fluid">';





                echo '</table> </div>';
            }

        ?>
                </table>



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

