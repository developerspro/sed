<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'InfoABC',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuitems =[['label' => 'Inicio', 'url' => ['/site/index']],
                 ['label' => 'Sobre', 'url' => ['/site/about']],
                 ['label' => 'Contato', 'url' => ['/site/contact']]
    ];
    $menuItems = [['label' => 'Home','url' => ['/site/index']],
                  ['label' => 'Shop','url' => ['/shop/index']],
                  ['label' => 'About','url' => ['/site/about']],
                  ['label' => 'Contact','url' => ['/site/contact']]
        ];
    if (Yii::$app->user->isGuest){
         $menuitems[] = ['label' => 'Login','url' => ['/site/login']];
    } else {
           $menuitems[] = ['label' => 'Aluno','url' => ['/aluno/index']];
           $menuitems[] = ['label' => 'Componente', 'url' => ['/componente/index']];
           $menuitems[] = ['label' => 'Professor', 'url' => ['/professor/index']];
           $menuitems[] = ['label' => 'Conselho', 'url' => ['/alucom/index']];
           $menuitems[] = ['label'=>'Série', 'url' => ['/serie/index']];
           $menuitems[] = ['label' => 'Logout (' . Yii::$app->user->identity->usuario . ')','url' => ['/site/logout'],
           'linkOptions' => ['data-method' => 'post']];
         
        
//            'label' => 'Componente', 'url' => ['/componente/index'],
//            'label' => 'Professor', 'url' => ['/professor/index'],
//            'label' => 'Conselho', 'url' => ['/alucom/index'],
//            'label' => 'Série', 'url' => ['/serie/index'],
//            'label' => 'Logout (' . Yii::$app->user->identity->usuario . ')','url' => ['/site/logout'],
//           'linkOptions' => ['data-method' => 'post']];
//        
        $menuItems[] = ['label' => 'Logout (' . Yii::$app->user->identity->usuario . ')','url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ];
    }
 
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuitems,
    ]);

    NavBar::end();
  
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
