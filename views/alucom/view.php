<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alucom */

$this->title = $model->idalucom;
$this->params['breadcrumbs'][] = ['label' => 'Alucoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="alucom-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <?= Html::a('Criar Conselho', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->idalucom], ['class' => 'btn btn-primary']) ?>
        
        <?= Html::a('Delete', ['delete', 'id' => $model->idalucom], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idalucom',
            ['attribute'=>'idalunofk','value'=>$model->idalunofk0->nome],
            ['attribute'=>'idcomponentefk','value'=>$model->idcomponentefk0->descricao],
           ['attribute'=>'idprofessorfk','value'=>$model->idprofessorfk0->nome],
            'nota',
            'bimestre',
        ],
    ]) ?>

</div>
