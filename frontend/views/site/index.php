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
<div style="height:100px;">
<p></p>
</div>
<div>
<?php
echo Carousel::widget([
    'items' => [
        // the item contains only the image
//        Html::img('images/click.jpg'),
        // equivalent to the above
//        ['content' => Html::img('images/mobile.jpg')],
        // the item contains both the image and the caption
        [
            'content' => Html::img('/images/Bless_edit.jpg', ['width'=>'125', 'height'=>'120']),
            'caption' => '<h2>Taking over the game...</h2><p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => '<iframe width="75%" height="315" src="https://www.youtube.com/embed/DJFm-3G87nc" frameborder="0" allowfullscreen></iframe>',
            'caption' => '<h4>Heavens Gate</h4><p>By OG Profit K<br/> ' . Html::a("Find on Itunes", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => '<iframe width="75%" height="170" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/66392700&amp;color=f2ab00&amp;theme_color=000000&amp;auto_play=false&amp;hide_related=true&amp;show_artwork=false"></iframe>',
            'caption' => '<p>Streaming Music</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/Bless_edit.jpg', ['width'=>'125', 'height'=>'120']),
            'caption' => '<h2>Taking over the game...</h2><p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],

    ]
]);  
?>
<p>
<?php echo Html::a("Click To Contact NOW!", "/site/contact", array('class'=>'btn btn-lg btn-success'))?>
</p>
</div>
  </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Music and Store</h2>

                <p>New music added all the time!  Get the latest gear here! Shirts, Hats, and More</p>

                <p>
			<?php echo Html::a("Get Music", "/site/store", array('class'=>'btn btn-default')); ?> 
		</p>
            </div>
            <div class="col-lg-4">
                <h2>Videos</h2>

                <p>Check the latest videos!  New videos added... See how we living!</p>

                <p>
			<?php echo Html::a("Watch Videos", "/site/video", array('class'=>'btn btn-default')); ?> 
		</p>
            </div>
            <div class="col-lg-4">
                <h2>Pics</h2>

                <p>Check the latests pics!  We doing big things!</p>

                <p>
			<?php echo Html::a("View Pics", "/site/pic", array('class'=>'btn btn-default')); ?> 
		</p>
            </div>
        </div>

    </div>
</div>
</header>
