<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PecaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pecas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peca-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peca', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPeca',
            'descricao',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
