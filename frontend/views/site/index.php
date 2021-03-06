<?php
/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'OG Profit K Official Page';
?>
<div class="intro" >
	<div class="row">
    		<div class="jumbotron">
      			<h1>OG Profit K</h1>
			<div class="site-index">

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
            'caption' => '<p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4", array('class'=>'btn btn-sm btn-danger')) . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => '<iframe width="460" height="315" src="https://www.youtube.com/embed/dTOYL1CzVgY" frameborder="0" allowfullscreen></iframe>',
            'caption' => '<h4>Runnin</h4><p>By OG Profit K ft. GC Cecret<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4", array('class'=>'btn btn-sm btn-danger')) . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/Bless_edit.jpg', ['width'=>'125', 'height'=>'120']),
            'caption' => '<p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4", array('class'=>'btn btn-sm btn-danger')) . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => '<iframe width="460" height="315" src="https://www.youtube.com/embed/HEU2WtbG-6M" frameborder="0" allowfullscreen></iframe>',
            'caption' => '<h4>Bleeding</h4><p>By OG Profit K<br/> ' . Html::a("Download Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4", array('class'=>'btn btn-sm btn-danger')) . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/Bless_edit.jpg', ['width'=>'125', 'height'=>'120']),
            'caption' => '<p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4", array('class'=>'btn btn-sm btn-danger')) . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => '<iframe width="460" height="315" src="https://www.youtube.com/embed/DJFm-3G87nc" frameborder="0" allowfullscreen></iframe>',
            'caption' => '<h4>Heavens Gate</h4><p>By OG Profit K<br/> ' . Html::a("Find on Itunes", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4", array('class'=>'btn btn-sm btn-danger')) . '</p>',
            'options' => ['data-interval'=>4000],
        ],

    ],
    'id' => 'homeCarousel'
]);  
?>
			</div>
     		</div>
		<div style="margin:auto; text-align:center;">
<div id="carouselButtons">
    <button id="playButton" type="button" class="btn btn-default btn-xs">
        <span class="glyphicon glyphicon-play"></span>
     </button>
    <button id="pauseButton" type="button" class="btn btn-default btn-xs">
        <span class="glyphicon glyphicon-pause"></span>
    </button>
</div>
		</div>
	</div>
	<div class="row" style="margin-left:auto; margin-right:auto;text-align:center;">
			<p>
				<?php echo Html::a("Click To Contact NOW!", Url::to(['site/contact']), array('class'=>'btn btn-lg btn-danger'))?>
			</p>
		<iframe width="75%" height="170" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/66392700&amp;color=f2ab00&amp;theme_color=000000&amp;auto_play=false&amp;hide_related=true&amp;show_artwork=false"></iframe>
	</div>
	<div class="row">
            <div class="col-lg-4">
                <h2>Music and Store</h2>

                <p>New music added all the time!  Get the latest gear here! Shirts, Hats, and More</p>

                <p>
			<?php echo Html::a("Get Music", Url::to(['site/store']), array('class'=>'btn btn-lg btn-danger')); ?> 
		</p>
            </div>
            <div class="col-lg-4">
                <h2>Videos</h2>

                <p>Check the latest videos!  New videos added... See how we living!</p>

                <p>
			<?php echo Html::a("Watch Videos", Url::to(['site/video']), array('class'=>'btn btn-lg btn-danger')); ?> 
		</p>
            </div>
            <div class="col-lg-4">
                <h2>Pics</h2>

                <p>Check the latests pics!  We doing big things!</p>

                <p>
			<?php echo Html::a("View Pics", Url::to(['site/pic']), array('class'=>'btn btn-lg btn-danger')); ?> 
		</p>
            </div>
	</div>
</div>
<?php

$this->registerJs(
"$( document ).ready(function() {
	$('#playButton').click(function () {
    		$('#homeCarousel').carousel('cycle');
	});
	$('#pauseButton').click(function () {
    		$('#homeCarousel').carousel('pause');
	});
});");
?>

