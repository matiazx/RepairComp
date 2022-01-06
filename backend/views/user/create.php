<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SignupForm */
/* @var $model common\models\User */


$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">



    <?= $this->render('_form', [
        'model' => $model,
        'role'=> array (['Tecnico', 'Gestor']),
    ]) ?>

</div>
