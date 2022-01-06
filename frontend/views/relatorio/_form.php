<?php

use common\models\Dispositivo;
use common\models\Peca;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Relatorio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relatorio-form">

    <?php $form = ActiveForm::begin(); ?>
    <table align="center" style="width: 300px">
        <td><label>ID Servico</label></td>
        <td><?= $form->field($model, 'idServico')->textInput(['disabled' => 'disabled'])->label(false) ?></td>
        <tr>
            <td><label>Nome<label></td>
            <td><?= $form->field($model, 'autor')->textInput(['disabled' => 'disabled'])->label(false) ?></td>
        <tr>
            <td><label>Descricao da Avaria<label></td>
            <td><?= $form->field($model, 'descricaoA')->textarea(['disabled' => 'disabled'])->label(false) ?></td>
        <tr>
            <td align="left"><label>Dispositivo</label>
            <td><?= $form->field($model, 'idDispositivo')->dropDownList(ArrayHelper::map(Dispositivo::find()->all(), 'idDispositivo', 'referencia'), ['prompt' => 'Selecione dispositivo', 'disabled' => 'disabled'])->label(false) ?>
        <tr>
            <td><label>Notas</label>
            <td><?= $form->field($model, 'descricao')->textarea(['maxlength' => true])->label(false) ?>
        <tr>
            <td><label>Pecas</label>
            <td><?= $form->field($model, 'idPeca')->dropDownList(ArrayHelper::map(Peca::find()->all(), 'idPeca', 'descricao'), ['prompt' => 'Selecione Peca'])->label(false) ?>

            <td>
        <tr>
            <td></td><td align="right"><?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </table>

    <?php ActiveForm::end(); ?>
</div>

