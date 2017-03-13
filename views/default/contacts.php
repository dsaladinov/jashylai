<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model bupy7\pages\models\Page */

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
?>

<div class="row">
    <div class="col-md-12">
        <h1><?= Html::encode($model->title); ?></h1>
    </div>
</div>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <div class="alert alert-success">
        Спасибо за сообщение! Мы скоро ответим.
    </div>
    <?php else: ?>

    <div class="row">
        <div class="col-md-7">    
            <?= $model->content; ?>
        </div>
        
        <div class="col-md-5">
            <div class="panel panel-default">
            <div class="panel-body">
            <?php $form = ActiveForm::begin([
                    'id' => 'contact-form'
                ]); ?>
                <?= $form->field($model2, 'name') ?>
                <?= $form->field($model2, 'email') ?>
                <?= $form->field($model2, 'subject') ?>
                <?= $form->field($model2, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model2, 'reCaptcha', ['template' => '{input}'])->widget(
                    \himiklab\yii2\recaptcha\ReCaptcha::className()
                    //['widgetOptions'=>['class'=>'text-right']]
                ) ?>
                <?/*= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-6">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) */?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
            </div>
            </div>
        </div>
            
    </div>

    <?php endif; ?>