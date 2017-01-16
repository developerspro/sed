<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Aluno;
use app\models\Professor;
use app\models\Componente;

/* @var $this yii\web\View */
/* @var $model app\models\Alucom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alucom-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'idalunofk')->dropDownList(ArrayHelper::map(Aluno::find()->All(), 'idaluno', 'nome'),['prompt'=>'selecione um aluno']) ?>

    <?= $form->field($model, 'idcomponentefk')->dropDownList(ArrayHelper::map(Componente::find()->All(), 'idcomponente', 'descricao'),['prompt'=>'selecione um Componente']) ?>

    <?= $form->field($model, 'idprofessorfk')->dropDownList(ArrayHelper::map(Professor::find()->All(), 'idprofessor', 'nome'),['prompt'=>'selecione um Professor']) ?>
    <?= $form->field($model, 'nota')->textInput() ?>

    <?= $form->field($model, 'bimestre')->textInput() ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
