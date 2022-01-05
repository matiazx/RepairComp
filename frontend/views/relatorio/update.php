<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Relatorio */

$this->title = 'Update Relatorio: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Relatorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="relatorio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
