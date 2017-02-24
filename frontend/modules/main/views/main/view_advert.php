<div class="row">
    <div class="col-lg-3 col-sm-4 hidden-xs">

        <? echo \frontend\widgets\HotWidget::widget() ?>

    </div>

    <div class="col-lg-9 col-sm-8 ">

        <h2><?=\frontend\components\Common::getTitleAdvert($model) ?></h2>
        <div class="row">
            <div class="col-lg-8">
                <div class="property-images">
                    <!-- Slider Starts -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <?
                            foreach(range(1,count($images) - 1) as $s):
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?=$s ?>" class=""></li>
                            <?
                            endforeach;
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <!-- Item 1 -->

                            <div class="item active">
                                <img src="<?=\frontend\components\Common::getImageAdvert($model)[0] ?>"  class="properties" alt="properties" />
                            </div>
                            <?
                            foreach($images as $image):
                                ?>
                                <div class="item">
                                    <img src="<?=$image ?>"  class="properties" alt="properties" />
                                </div>
                            <?
                            endforeach
                            ?>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <!-- #Slider Ends -->

                </div>




                <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                    <p> <?=$model->description ?></p>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="col-lg-12  col-sm-6">
                    <div class="property-info">
                        <p class="price"> <?=$model->name_book ?></p>
                        <p class="area"><span class="glyphicon glyphicon-map-marker"></span> Author: <?=$model->author ?></p>

                        <div class="profile">
                            <span class="glyphicon glyphicon-user"></span> About owner advert
                            <p>Email: <?=$model->user->email ?><br> Username: <?=$model->user->username ?><br>Phone: <?=$model->user->phone?></p>
                        </div>


                     <div class="profile">
                    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
                    <p> Genre: <?=$model->genre ?><br> Town book: <?=$model->town_book ?><br>Edition: <?=$model->edition?></p>
                     </div>
                    </div>



                <div class="col-lg-12 col-sm-6 ">
                    <div class="enquiry">
                        <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                        <?
                        $form = \yii\bootstrap\ActiveForm::begin();
                        ?>
                        <?=$form->field($model_feedback,'email')->textInput(['value' => $current_user['email'], 'placeholder' => 'you@yourdomain.com'])->label(false) ?>
                        <?=$form->field($model_feedback,'name')->textInput(['value' => $current_user['username'], 'placeholder' => 'Username'])->label(false) ?>
                        <?=$form->field($model_feedback,'text')->textarea(['rows' => 6, 'placeholder' => 'Whats on your mind?'])->label(false) ?>
                        <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>

                        <?
                        \yii\bootstrap\ActiveForm::end();
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>