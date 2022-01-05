<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Relatorio */

$this->title = $model->idRelatorio;
$this->params['breadcrumbs'][] = ['label' => 'Relatorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="relatorio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idRelatorio' => $model->idRelatorio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idRelatorio' => $model->idRelatorio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idRelatorio',
            'idServico',
            'idDispositivo',
            'id',
            'descricao',
        ],
    ]) ?>

</div>
