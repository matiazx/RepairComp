<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>
<!-- Navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Home</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a('Utilizadores', ['/user/index','estado' => 1], ['data-method' => 'post', 'class' => 'nav-link'])?>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a('Servico', ['/servico/index','estado' => 1], ['data-method' => 'post', 'class' => 'nav-link'])?>
        </li>

    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <li class="nav-item">
            <?= Html::a('Logout', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
