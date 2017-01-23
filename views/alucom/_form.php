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
    <?= $form->field($model, 'nota')->dropDownList(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10']) ?>

    <?= $form->field($model, 'bimestre')->dropDownList(['1'=>'1 Bimestre','2'=>'2 Bimestre','3'=>'3 Bimestre','4'=>'4 Bimestre','5'=>'Conceito Final']) ?>
     
    <?= $form->field($model, 'falta')->textInput() ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
