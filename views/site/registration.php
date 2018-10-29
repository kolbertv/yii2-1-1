<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.10.2018
 * Time: 14:44
 */

/* @var $this \yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to registration:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>

    <?= $form->field($model, 'password')->passwordInput()->label('Password repeat') ?>



    <?php ActiveForm::end(); ?>



</div>

