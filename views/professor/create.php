<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Professor */

$this->title = 'Create Professor';
$this->params['breadcrumbs'][] = ['label' => 'Professors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
