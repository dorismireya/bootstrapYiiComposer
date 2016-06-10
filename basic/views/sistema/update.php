<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sistema */

$this->title = 'Update Sistema: ' . $model->COD_SISTEMA;
$this->params['breadcrumbs'][] = ['label' => 'Sistemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_SISTEMA, 'url' => ['view', 'id' => $model->COD_SISTEMA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sistema-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
