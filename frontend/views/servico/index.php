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
        <?= Html::a('Create Servico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'label' => 'Nome',
                'value' => function ($model) {
<<<<<<< HEAD
                //$users= new \backend\models\User();
                //$user = $users->find()->where(['id'=>2])->all();
                  //var_dump($user['attributes']);  die;
                    return $model->id;
=======
                    return $model->getNome();
>>>>>>> 466d6176c6dcf9839389cde52e3fa7d1d05d2618
                },

            ],
            'descricao',
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
            'data',
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
