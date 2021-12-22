<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    $dataPost=ArrayHelper::map(\app\models\Province::find()->asArray()->all(), 'id', 'name');
    echo $form->field($model, 'province_id')
    ->dropDownList($dataPost, ['province_id'=>'name']);
    ?>

    <?php
    $dataPost=ArrayHelper::map(\app\models\City::find()->asArray()->all(), 'id', 'name');
    echo $form->field($model, 'city')
    ->dropDownList($dataPost, ['city'=>'name']);
    ?>

    <!-- <?= $form->field($model, 'province_id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?> -->
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
