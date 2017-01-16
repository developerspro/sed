<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Serie */

$this->title = 'Create Serie';
$this->params['breadcrumbs'][] = ['label' => 'Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
