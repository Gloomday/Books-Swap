<?
use yii\bootstrap\Nav;
?>
<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">

            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
                <?
                $menuItems = [
                    ['label' => 'Home', 'url' => '/'],
                    ['label' => 'About', 'url' => '#'],
                    ['label' => 'Contact', 'url' => 'main/main/contact'],
                ];

                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                ?>
            </div>
            <?=$model->user->email ?>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Starts -->





<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <a href="/" ><img src="../../images/logo.png"></a>
        <?
        $menuItems = [];
        $guest = Yii::$app->user->isGuest;
        if($guest) {
            $menuItems[] =  ['label' => 'Login', 'url' => ['/main/main/login']];
            $menuItems[] =  ['label' => 'Register', 'url' => ['/main/main/register']];
        }
        else{
            $menuItems[] =  ['label' => 'Manager adverts', 'url' => ['/cabinet/advert']];
            $menuItems[] = ['label' => 'Logout',  'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']];


        }
        echo Nav::widget([
            'options' => ['class' => 'pull-right'],
            'items' => $menuItems,
        ]);
        ?>
    </div>
    <!-- #Header Starts -->
</div>