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
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width">   
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
	<!-- templatemo 410 circle -->
    <?php $this->registerJsFile('js/vendor/modernizr-2.6.2.min.js', ['position' => \yii\web\View::POS_HEAD]) ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'My Company',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
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

    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    <div class="bg-overlay"></div>

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a href="#"><img src="images/logo.jpg" alt="Жашыл Ай" id="logo-img">
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
                
                <div id="menu-container">

                    <div id="menu-1" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <?= Html::a(['site/about','#' => 'tab1'], ['class' => 'icon-item']) ?>
                                        <i class="fa fa-book"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-dot-circle-o"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-globe"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-thumb-tack"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab5" class="icon-item">
                                        <i class="fa fa-file-text"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab1">
                                    <h3>Наша история</h3>
                                    <p></p>
                                </div>

                                <div class="toggle-content text-center" id="tab2">
                                    <h3>Наша миссия</h3>
                                    <p></p>
                                </div>

                                <div class="toggle-content text-center" id="tab3">
                                    <h3>Наше руководство</h3>
                                    <p></p>
                                </div>
                                <div class="toggle-content text-center" id="tab4">
                                    <h3>Новости</h3>
                                    <p></p>
                                </div>
                                <div class="toggle-content text-center" id="tab5">
                                    <h3>Нормативные документы</h3>
                                    <div class="g-item">
                                    <img src="images/g1.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g1.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                    </div> <!-- /.g-item -->
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/member-1.jpg" alt="Базарбаев Мухамадали - Генеральный директор">
                                    </div>
                                    <h4>Базарбаев Мухамадали</h4>
                                    <span>Генеральный директор</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/member-2.jpg" alt="-">
                                    </div>
                                    <h4>Паланчиев тугунчу</h4>
                                    <span>Тугунчу</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/member-3.jpg" alt="-">
                                    </div>
                                    <h4>Паланчиев тугунчу</h4>
                                    <span>Паланчиев тугунчу</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.about -->

                    <div id="menu-2" class="services content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab6" class="icon-item">
                                        <i class="fa fa-cogs"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab7" class="icon-item">
                                        <i class="fa fa-leaf"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab8" class="icon-item">
                                        <i class="fa fa-question-circle"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab6">
                                    <h3>Наши программы</h3>
                                    <p></p>
                                </div>

                                <div class="toggle-content text-center" id="tab7">
                                    <h3>Мы помогли</h3>
                                    <p></p>
                                </div>

                                <div class="toggle-content text-center" id="tab8">
                                    <h3>Вам нужна помощь?</h3>
                                    <p></p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->

                    <div id="menu-3" class="gallery content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab9" class="icon-item">
                                        <i class="fa fa-picture-o"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab10" class="icon-item">
                                        <i class="fa fa-video-camera"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul>
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab9">
                                    <h3>Фотогалерея</h3>
                                    <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g1.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g1.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g2.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g2.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g3.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g3.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g4.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g4.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g5.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g5.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g6.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g6.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g7.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g7.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g8.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g8.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g9.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g9.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g10.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g10.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g11.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g11.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g12.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g12.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g13.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g13.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g14.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g14.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g15.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g15.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g16.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g16.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                             <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/g17.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/g17.jpg">
                                        <span><i class="fa fa-search-plus"></i></span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                                </div>

                                <div class="toggle-content text-center" id="tab10">
                                    <h3>Видеогалерея</h3>
                                    <p></p>
                                </div>

                            </div> <!-- /.col-md-12 -->

                            


                        </div> <!-- /.row -->
                    </div> <!-- /.gallery -->

                    <div id="menu-4" class="contact content">
                        <div class="row">
                        	
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Наши контакты</h3>
                                    <p>Мы находимся
                                    <br><br><strong>Адрес:</strong> г.Бишкек, ул.Макмал 38
                                    <br><strong>Email:</strong> info@jashylai.kg | <strong>Тел:</strong> 0779 - 300 - 989</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                            
                            <div class="col-md-12">
                                <div class="google-map">
                                </div> <!-- /.google-map -->
                            </div> <!-- /.col-md-12 -->
                            
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
                                    	<form action="#" method="post">
                                            <fieldset class="col-md-4">
                                                <input id="name" type="text" name="name" placeholder="Name">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="email" name="email" id="email" placeholder="Email">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="Subject">
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <input type="submit" name="send" value="Написать" id="submit" class="button">
                                            </fieldset>
                                        </form>
                                    </div> <!-- /.row -->
                                </div> <!-- /.contact-form -->
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->

                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
    
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">
                
                	Copyright &copy; 2006 - 2016 <a href="#">Общественный фонд "Жашыл Ай"</a>
                 
                 </p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>