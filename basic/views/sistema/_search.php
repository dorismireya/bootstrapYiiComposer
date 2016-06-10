<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SistemaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sistema-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'COD_SISTEMA') ?>

    <?= $form->field($model, 'NOMBRE') ?>

    <?= $form->field($model, 'TELEFONO') ?>

    <?= $form->field($model, 'DIRECCION') ?>

    <?= $form->field($model, 'FAX') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'CIUDAD') ?>

    <?php // echo $form->field($model, 'DETALLE') ?>

    <?php // echo $form->field($model, 'FECHA') ?>

    <?php // echo $form->field($model, 'TEMA') ?>

    <?php // echo $form->field($model, 'ESTADO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
