<div class="footer">

    <div class="container">



        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Information</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="">About</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="">Participants</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="">Blog</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Newsletter</h4>
                <p>Get notified about the latest properties in our marketplace.</p>

                <? echo \yii\helpers\Html::beginForm('','post', ['class' => 'form-inline']) ?>
                <? echo \yii\helpers\Html::textInput('search', '', ['class' => 'form-control', 'placeholder' => 'Enter Your email address']) ?>

                <? echo \yii\helpers\Html::submitButton('Notify Me!', ['class' => 'btn btn-success']) ?>

                <? echo \yii\helpers\Html::endForm() ?>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Follow us</h4>
                <a href="#"><img src="/images/facebook.png"  alt="facebook"></a>
                <a href="#"><img src="/images/twitter.png"  alt="twitter"></a>
                <a href="#"><img src="/images/linkedin.png"  alt="linkedin"></a>
                <a href="#"><img src="/images/instagram.png"  alt="instagram"></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Contact us</h4>

                    <span class="glyphicon glyphicon-map-marker"></span> 7 Olympiyska Street, Ukraine <br>
                    <span class="glyphicon glyphicon-envelope"></span> dorozhanskij@yandex.ru<br>
                    <span class="glyphicon glyphicon-earphone"></span> (096) 727-5349</p>
            </div>
        </div>
        <p class="copyright">Copyright 2017. All rights reserved.	</p>


    </div></div>