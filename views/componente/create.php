<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Componente */

$this->title = 'Create Componente';
$this->params['breadcrumbs'][] = ['label' => 'Componentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="componente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
