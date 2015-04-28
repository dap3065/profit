<?php
use yii\bootstrap\Carousel;
use yii\helpers\Html;

$this->title = 'OG Profit K Videos';

echo Carousel::widget([
    'items' => [
        // the item contains only the image
//        Html::img('images/click.jpg'),
        // equivalent to the above
//        ['content' => Html::img('images/mobile.jpg')],
        // the item contains both the image and the caption
        [
            'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/dTOYL1CzVgY" frameborder="0" allowfullscreen></iframe>',
            'caption' => '<h4>Runnin</h4><p>By OG Profit K ft. GC Cecret<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/HEU2WtbG-6M" frameborder="0" allowfullscreen></iframe>',
            'caption' => '<h4>Bleeding</h4><p>By OG Profit K<br/> ' . Html::a("Download Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/DJFm-3G87nc" frameborder="0" allowfullscreen></iframe>',
            'caption' => '<h4>Heavens Gate</h4><p>By OG Profit K<br/> ' . Html::a("Find on Itunes", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
    ]
]);  
?>

