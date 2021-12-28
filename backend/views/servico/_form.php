<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Servico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servico-form">





            <?php $form = ActiveForm::begin(); ?>
            <table style="width: 300px">
                <tr>
                <td align="left"><label>Descricao</label>
                <td> <?= $form->field($model, 'descricaoservico')->textarea(['maxlength' => true])->label(false) ?>
                <tr>
                    <td align="left"><label>Tipo</label>
                    <td><?= $form->field($model, 'tipo')->dropDownList($model->tipo_array, ['prompt' => 'Selecione tipo'])->label(false) ?>
                <tr>
                    <td align="left"><label>Gravidade</label>
                    <td><?= $form->field($model, 'gravidade')->dropDownList($model->gravidade_array, ['prompt' => 'Selecione a gravidade'])->label(false) ?>
                <tr>
                    <td align="left"><label>Data</label>
                    <td> <?= $form->field($model, 'dataservico')->textarea()->label(false) ?>
                <tr>

                    <td align="left"><label>Estado</label>
                    <td> <?= $form->field($model, 'estado')->dropDownList($model->estado_array, ['prompt' => 'Selecione estado'])->label(false) ?>
                <tr>


                    <td></td><td align="right"><?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </table>



            <?php ActiveForm::end(); ?>
</div>
