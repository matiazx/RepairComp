<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RelatorioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relatorios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relatorio-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'idRelatorio',
            [
                'attribute' => 'id',
                'label' => 'Nome',
                'value' => function ($model) {
                    return $model->getNome();
                },
            ],

            [
                'attribute' => 'idDispositivo',
                'label' => 'Dispositivo',
                'value' => function ($model) {
                    return $model->idServico0->idDispositivo0->referencia;
                },
            ],

            
            'descricao',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
