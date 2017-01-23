<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Conselho';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alucom-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Conselho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin();
// var_dump($dataProvider);
 
?>    <?= $grid = GridView::widget([
        'dataProvider' => $dataProvider,
          //'filterModel' => $searchModel,
    
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idalucom',
           ['label'=>'Aluno','value'=>'idalunofk0.nome'],
            'idcomponentefk0.descricao',
          ['label'=>'Professor','value'=>'idprofessorfk0.nome'], 
            'nota',
            'bimestre',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

?>
<?php Pjax::end(); ?></div>
