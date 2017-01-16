<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alucom */

$this->title = 'Create Alucom';
$this->params['breadcrumbs'][] = ['label' => 'Alucoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alucom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
