<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Componente */

$this->title = 'Update Componente: ' . $model->idcomponente;
$this->params['breadcrumbs'][] = ['label' => 'Componentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcomponente, 'url' => ['view', 'id' => $model->idcomponente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="componente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
