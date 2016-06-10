<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SistemaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sistemas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sistema-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sistema', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_SISTEMA',
            'NOMBRE',
            'TELEFONO',
            'DIRECCION',
            'FAX',
            // 'EMAIL:email',
            // 'CIUDAD',
            // 'DETALLE',
            // 'FECHA',
            // 'TEMA',
            // 'ESTADO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
