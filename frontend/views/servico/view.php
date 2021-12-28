<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Servico */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="servico-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'descricaoservico',
            [
                'attribute' => 'tipo',
                'value' => $model->getTipo(),
            ],
            [
                'attribute' => 'gravidade',
                'value' => $model->getGravidade(),
            ],
            [
                'attribute' => 'estado',
                'value' => $model->getEstado(),
            ],
            'dataservico',
            'fotografia',

        ],
    ]) ?>

</div>
