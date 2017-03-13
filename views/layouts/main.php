<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Pjax;
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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
        <?php $this->registerJsFile('js/modernizr-2.6.2.min.js', ['position' => \yii\web\View::POS_HEAD]) ?>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>     
        <div class="container-fluid">
                        <div class="row">

             <?php 
                        NavBar::begin([
    'brandLabel' => 'Yii Navbar',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default'
    ]
]);
echo Nav::widget([
    'options' => [
        'class' => 'navbar-nav navbar-right'
    ],
    'items' => [
        [
            'label' => 'Главная',
            'url' => [
                '#'
            ]
        ],
        [
            'label' => 'О фонде',
            'url' => [
                'pages/about'
            ]
        ],
        [
            'label' => 'Проекты',
            'url' => [
                'pages/projects'
            ]
        ],
        Yii::$app->user->isGuest ? [
            'label' => 'Войти',
            'url' => [
                '#'
            ]
            ] : [
            'label' => 'Выйти ('.Yii::$app->user->identity->username.')',
            'url' => [
                '#'
            ],
            'linkOptions' => [
                'data-method' => 'post'
            ]
            ]
    ]
]);
NavBar::end();
                        ?>
                        </div>
        </div>
       <div class="container-fluid">
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <div class="sidebar-menu">

                        <div class="logo-wrapper">
                            <h1 class="logo">
                                
                                <a href="/"><?= Html::img('@web/images/logo.jpg', ['alt' => 'Жашыл Ай'], ['#' => 'logo-img']) ?>
                                    <span class="logo-text">Общественный фонд "Жашыл Ай"</span></a>
                            </h1>
                        </div> <!-- /.logo-wrapper -->
                         <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a class="homebutton" href="#">Главная</a></li>
                            <li><a class="show-1" href="#">О фонде</a></li>
                            <li><a class="show-2" href="#">Проекты</a></li>
                            <li><a class="show-2" href="#">Мероприятия</a></li>
                            <li><a class="show-2" href="#">Партнеры</a></li>
                            <li><a class="show-3" href="#">Галерея</a></li>
                            <li><a class="show-4" href="#" onclick="templatemo_map();">Контакты</a></li>
                            <li><a rel="nofollow" href="https://www.facebook.com/profile.php?id=100006787625876" target="_parent">Мы в Facebook</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->
                       

                        <!--Arrow Navigation-->
                        <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                        <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                    </div> <!-- /.sidebar-menu -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-8 col-sm-12">
                     <?php Pjax::begin(); ?>
                    <div id="menu-container">
                          <?= $content ?>
                    </div>
                     <?php Pjax::end(); ?>
                </div>
            </div>
        </div>

        <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">
                
                	Copyright &copy; 2006 - 2016 <a href="/">Общественный фонд "Жашыл Ай"</a>
                 
                 </p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->
       
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
