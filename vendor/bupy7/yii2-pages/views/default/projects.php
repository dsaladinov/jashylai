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
    <h1><?= Html::encode($model->title); ?></h1>
</div>
<h2>приет</h2>
    <div class="clearfix"></div>-->
<?= $model->content; ?>
                          <?= $content ?>
