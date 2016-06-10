<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sistema */

$this->title = 'Create Sistema';
$this->params['breadcrumbs'][] = ['label' => 'Sistemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sistema-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
