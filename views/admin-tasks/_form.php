<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tables\Tasks */
/* @var $items */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creator_id')->dropDownList($items) ?>

    <?= $form->field($model, 'updater_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->widget(\yii\jui\DatePicker::className(), [
        'dateFormat' => 'yyyy-MM-dd',
        'language' => 'ru',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <? /* echo \yii\jui\DatePicker::widget([
            'model' => $model,
            'attribute' => 'updated_at',
            'dateFormat' => 'yyyy-MM-dd',
            'language' => 'ru',

    ]); */ ?>

    <?php ActiveForm::end(); ?>

</div>
