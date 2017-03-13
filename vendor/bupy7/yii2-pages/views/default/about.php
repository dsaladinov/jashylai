<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;



/* @var $this yii\web\View */
/* @var $model bupy7\pages\models\Page */
AppAsset::register($this);
if (empty($model->title_browser)) {
    $this->title = $model->title;
} else {
    $this->title = $model->title_browser;
}
if (!empty($model->meta_description)) {
    $this->registerMetaTag(['content' => Html::encode($model->meta_description), 'name' => 'description']);
}
if (!empty($model->meta_keywords)) {
   $this->registerMetaTag(['content' => Html::encode($model->meta_keywords), 'name' => 'keywords']);
}
//?>
<div class="page-header">
   
    <h1><?= Html::a("#"); ?></h1>
</div>
<h2>приет</h2>
    <div class="clearfix"></div>-->

      <?= $model->content; ?>

<div id="menu-1" class="about content">
    <div class="row">
        <ul class="tabs">
            <li class="col-md-4 col-sm-4">
                <a href="#tab1" class="icon-item">
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
