<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Search\AdvertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adverts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advert-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Advert', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idadvert',
            'name_book',
            'author',
            'user.email',
            'genre',
            // 'edition',
             'year_book',
             'town_book',
            // 'general_image',
            'description:ntext',
            // 'location',
            'address',
            // 'hot',
            // 'recommend',
            'created_at:date',
            'updated_at:date',
            // 'category_id',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
