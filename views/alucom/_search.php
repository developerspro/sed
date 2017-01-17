<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlucomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alucom-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idalucom') ?>

    <?= $form->field($model, 'idalunofk') ?>

    <?= $form->field($model, 'idcomponentefk') ?>

    <?= $form->field($model, 'idprofessorfk') ?>

    <?= $form->field($model, 'nota') ?>

    <?php // echo $form->field($model, 'bimestre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
