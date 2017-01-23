<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $model->idaluno;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Registrar Aluno', ['create'], ['class' => 'btn btn-success']) ?>
   
        <?= Html::a('Update', ['update', 'id' => $model->idaluno], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idaluno], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Voce quer realmente remover este aluno:'.$model->nome.'?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idaluno',
            'nome',
            ['attribute'=>'Serie','value'=>$model->idseriefk0->descricao],
        ],
    ]) ?>

</div>
