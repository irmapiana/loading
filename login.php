<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use kartik\spinner\Spinner;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
       <?php echo Html::a('<img src="'. Url::base() . '/img/logo_rev.png" width=360 class="image logo-lg shadowed" alt="protelmart logo"/>', Yii::$app->homeUrl, ['class' => 'logo']); ?>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        
        <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>

        <?php $form = ActiveForm::begin([
              'action' => ['login'],
              'method' => 'post'
        ]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('nama pengguna')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('kata sandi')])?>

        <div class="row">
            <!-- /.col -->
            <body onload="$('#loader').hide();">
            <div class="col-xs-6 pull-right">
                <?= Html::submitButton('Masuk', ['class' => 'btn btn-primary btn-block btn-create btn-loading', 'name' => 'login-button']) ?>
           
            <div id="loader">
                 <?php echo Html::a('<img src="'. Url::base() . '/img/loading.gif" width=60 alt="loading"/>', Yii::$app->homeUrl, ['class' => 'row']); ?>
            </div>
             </div> 
            <?php $this->endBody() ?>

<script type="text/javascript">

  $(document).ready(function(){

    //When clicking on a button, it shows the loader

    $('.btn-loading').on('click', function(){

      $('#loader').show();

    });

  });

</script>

</body>
            </div>
            <!-- <div class="col-xs-6 pull-left">
                <?= Html::a('Sign up', 'registrasi.php', ['class' => 'btn btn-primary btn-block btn-create']) ?>
            </div> -->
            <!-- /.col -->
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
</div>

