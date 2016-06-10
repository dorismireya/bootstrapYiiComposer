<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = $model->COD_USUARIO;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'COD_USUARIO' => $model->COD_USUARIO, 'COD_ROL' => $model->COD_ROL], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'COD_USUARIO' => $model->COD_USUARIO, 'COD_ROL' => $model->COD_ROL], [
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
            'COD_USUARIO',
            'CI',
            'NOMBRE',
            'APELLIDO',
            'DIRECCION',
            'TELEFONO',
            'CELULAR',
            'EMAIL:email',
            'LOGIN',
            'PASSWORD',
            'ESTADO',
            'COD_ROL',
        ],
    ]) ?>

</div>
