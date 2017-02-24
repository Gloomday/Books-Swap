<?
use yii\helpers\Html;
?>

<div class="properties-listing spacer">

    <div class="row">
        <div class="col-lg-3 col-sm-4 ">
            <?=\yii\helpers\Html::beginForm(\yii\helpers\Url::to('/main/main/find/'),'get') ?>
            <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search </h4>
                <?=Html::textInput('propert', $request->get('propert'), ['class' => 'form-control', 'placeholder' => 'Search of Properties']) ?>


                <button class="btn btn-primary">Find Now</button>
                <?=\yii\helpers\Html::endForm() ?>

            </div>



            <div class="hot-properties hidden-xs">

                <? echo \frontend\widgets\HotWidget::widget() ?>

            </div>


        </div>

        <div class="col-lg-9 col-sm-8">
            <div class="row">

                <?
                foreach($model as $row):
                    $url = \frontend\components\Common::getUrlAdvert($row);
                    ?>
                    <!-- properties -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="properties">
                            <div class="image-holder"><img src="<?=\frontend\components\Common::getImageAdvert($row)[0] ?>"  class="img-responsive" alt="properties">
                            </div>
                            <h4><a href="<?=$url ?>" ><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h4>
                            <p class="price">Автор:<?=$row['author'] ?></p>
                            <a class="btn btn-primary" href="<?=$url ?>" >View Details</a>
                        </div>
                    </div>

                <?
                endforeach;
                ?>
                <!-- properties -->


                <div class="clearfix"></div>
                <!-- properties -->
                <div class="center">
                    <? echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages
                    ]) ?>
                </div>

            </div>
        </div>
    </div>
</div>