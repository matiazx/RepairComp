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



    <p>
        <?= Html::a('Criar Servico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [


            [
                'attribute' => 'id',
                'label' => 'Nome',
                'value' => function ($model) {
                    return $model->id;
                },
            ],
            'descricaoservico',
            [
                'attribute' => 'tipo',
                'value' => function ($model) {
                    return $model->getTipo();
                },
            ],
            [
                'attribute' => 'gravidade',
                'value' => function ($model) {
                    return $model->getGravidade();
                },
            ],
            'dataservico',
            //'fotografia',
            [
                'attribute' => 'estado',
                'value' => function ($model) {
                    return $model->getEstado();
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
