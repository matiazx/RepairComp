<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Servico */

$this->title = 'Create Servico';
$this->params['breadcrumbs'][] = ['label' => 'Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
