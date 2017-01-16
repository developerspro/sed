<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alucom */

$this->title = 'Update Alucom: ' . $model->idalucom;
$this->params['breadcrumbs'][] = ['label' => 'Alucoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idalucom, 'url' => ['view', 'id' => $model->idalucom]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alucom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
