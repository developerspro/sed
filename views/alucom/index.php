<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alucoms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alucom-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alucom', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin();

?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
          'filterModel' => $searchModel,
    
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idalucom',
            'idalunofk',
            'idcomponentefk',
            'idprofessorfk',
             'nota',
            'bimestre',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
