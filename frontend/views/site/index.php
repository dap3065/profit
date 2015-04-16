<?php
/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\helpers\Html;

$this->title = 'OG Profit K Official Page';
?>
<header class="intro">
<div class="site-index">

    <div class="jumbotron">
      <h1>OG Profit K</h1>
<?php
echo Carousel::widget([
    'items' => [
        // the item contains only the image
//        Html::img('images/click.jpg'),
        // equivalent to the above
//        ['content' => Html::img('images/mobile.jpg')],
        // the item contains both the image and the caption
        [
            'content' => Html::img('/images/mobile.jpg'),
            'caption' => '<h4>We Create Mobile Apps!</h4><p>Have your customers get updated immediately!</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/click.jpg'),
            'caption' => '<h4>We connect you to your customers!</h4><p>Your own domain name so you get recognized.</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/formats.jpg'),
            'caption' => '<h4>Get a design that fits you!</h4><p>We can customize your website to fit your needs.</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/develop.jpg'),
            'caption' => '<h4>We can handle any project.</h4><p>No project is too big or too small.  We can handle all aspects of development.</p>',
            'options' => ['data-interval'=>4000],
        ],
    ]
]);  
?>

        <p class="lead">Professional development at your fingertips.</p>
<p>
<?php echo Html::a("Click To Get Started!", "/site/contact", array('class'=>'btn btn-lg btn-success'))?>
</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Website Development</h2>

                <p>A web presence is required for the longevity of your business.  Your website can be what catapults your business to the next level,
                   or the block that prevents your company from reaching their full potential. </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Learn More</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Bug Fixes</h2>

                <p>Do you have an existing site that is old or having issues from the last developers?  Request us to fix the issues or update the site.  We can take a look at any web problem.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Request Help Now</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Enhancements</h2>

                <p>Do you want to add a new feature to your existing site?  Email subscriptions?  Facebook login?  Paypal payment options?  Request us to add any enhancement to your existing site.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Request your enhancement</a></p>
            </div>
        </div>

    </div>
</div>
</header>
