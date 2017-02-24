<?
use yii\helpers\Html;
?>

<div id="slider" class="sl-slider-wrapper">

    <div class="sl-slider">

        <?
        foreach($result_general as $row):
        ?>
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="bg-img" style="background-image: url('<?=\frontend\components\Common::getImageAdvert($row)[0] ?>')")"></div>
            <h2><a href="<?=\frontend\components\Common::getUrlAdvert($row)?>"><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h2>
            <blockquote>

                <p><?=\frontend\components\Common::substr($row['description']) ?></p>
                <cite><?=$row['author'] ?></cite>
            </blockquote>
        </div>
    </div>

    <?
    endforeach;
    ?>

</div><!-- /sl-slider -->



<nav id="nav-dots" class="nav-dots">
    <?
    if($count_general >= 1):
        ?>
        <span class="nav-dot-current"></span>
        <?
    endif;
    ?>

    <?
    if($count_general > 1):
        foreach(range(2,$count_general) as $line):
            ?>
            <span></span>
            <?
        endforeach;
    endif;
    ?>
</nav>

</div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3> Search </h3>
        <div class="searchbar">
            <div class="row">
                <?=Html::beginForm(\yii\helpers\Url::to('main/main/find/'),'get') ?>
                <div class="col-lg-6 col-sm-6">
                    <?=Html::textInput('propert', '', ['class' => 'form-control']) ?>
                    <div class="row">

                        <div class="col-lg-3 col-sm-4">
                            <?=Html::submitButton('Find Now', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                    <?=Html::endForm() ?>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="properties-listing spacer"> <a href="main/main/showall"  class="pull-right viewall">View All Listing</a>
        <h2>Featured Properties</h2>
        <div id="owl-example" class="owl-carousel">

            <?
            foreach($featured as $row):
                ?>

                <div class="properties">
                    <div class="image-holder"><img src="<?=\frontend\components\Common::getImageAdvert($row)[0] ?>"  class="img-responsive" alt="properties"/>

                    </div>
                    <h4><a href="<?=\frontend\components\Common::getUrlAdvert($row)?>" ><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h4>
                    <p class="price">Автор:<?=$row['author'] ?></p>
                    <a class="btn btn-primary" href="<?=\frontend\components\Common::getUrlAdvert($row)?>" >View Details</a>
                </div>

                <?
            endforeach;
            ?>

        </div>
    </div>
    <div class="spacer">
        <div class="row">
            <div class="col-lg-6 col-sm-9 recent-view">
                <h3>About Us</h3>
                <p>Book swapping or book exchange is the practice of a swap of books between one person and another. Practiced among book groups, friends and colleagues at work, it provides an inexpensive way for people to exchange books, find out about new books and obtain a new book to read without having to pay. Because swaps occur between individuals, without central distribution or warehousing, and without the copyright owner making a profit, the practice has been compared to peer-to-peer (P2P) systems such as BitTorrent—except that hard-copy original analog objects are exchanged.<br><a href="#" >Learn More</a></p>

            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
                <h3>Recommended Properties</h3>
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <?
                        if($recommend_count >= 1):
                            ?>
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <?
                        endif;
                        ?>

                        <?
                        if($recommend_count > 1):
                            foreach(range(1,$recommend_count-1) as $count):
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?=$count ?>"></li>
                                <?
                            endforeach;
                        endif;
                        ?>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <?
                        $i = 0;
                        foreach($recommend as $rec):
                            ?>
                            <div class="item <?=($i == 0) ? 'active' : '' ?>">
                                <div class="row">
                                    <div class="col-lg-4"><img src="<?=\frontend\components\Common::getImageAdvert($rec)[0] ?>"  class="img-responsive" alt="properties"/></div>
                                    <div class="col-lg-8">
                                        <h5><a href="<?=\frontend\components\Common::getUrlAdvert($row)?>" ><?=\frontend\components\Common::getTitleAdvert($rec) ?></a></h5>
                                        <p class="price">Автор:<?=$rec['author'] ?></p>
                                        <a href="<?=\frontend\components\Common::getUrlAdvert($row)?>"  class="more">More Detail</a> </div>
                                </div>
                            </div>
                            <?
                            $i++;
                        endforeach;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>