<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Search\AdvertSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advert-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idadvert') ?>

    <?= $form->field($model, 'name_book') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'fk_agent') ?>

    <?= $form->field($model, 'genre') ?>

    <?php // echo $form->field($model, 'edition') ?>

    <?php // echo $form->field($model, 'year_book') ?>

    <?php // echo $form->field($model, 'town_book') ?>

    <?php // echo $form->field($model, 'general_image') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'hot') ?>

    <?php // echo $form->field($model, 'recommend') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
