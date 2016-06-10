<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rol */

$this->title = $model->COD_ROL;
$this->params['breadcrumbs'][] = ['label' => 'Rols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'COD_ROL' => $model->COD_ROL, 'COD_SISTEMA' => $model->COD_SISTEMA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'COD_ROL' => $model->COD_ROL, 'COD_SISTEMA' => $model->COD_SISTEMA], [
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
            'COD_ROL',
            'ROL',
            'DETALLE',
            'ESTADO',
            'COD_SISTEMA',
        ],
    ]) ?>

</div>
