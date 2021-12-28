<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SignupForm */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">



    <?= $this->render('_form', [
        'model' => $model,
        'role'=> array (['Funcionario', 'Gestor','Cliente']),
    ]) ?>

</div>
