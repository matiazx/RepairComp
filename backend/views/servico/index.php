<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ServicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Servico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idservico',
            'descricao',
            'tipo',
            'estado',
            'gravidade',
            //'data',
            //'idDispositivo',
            //'idRelatorio',
            //'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
