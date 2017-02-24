<div class="properties-listing spacer"> <a href="buysalerent.html"  class="pull-right viewall">View All Listing</a>
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