<?php
use yii\bootstrap\Carousel;
use yii\helpers\Html;

$this->title = 'OG Profit K Pics';

echo Carousel::widget([
    'items' => [
        // the item contains only the image
//        Html::img('images/click.jpg'),
        // equivalent to the above
//        ['content' => Html::img('images/mobile.jpg')],
        // the item contains both the image and the caption
        [
            'content' => Html::img('/images/Bless_edit.jpg'),
            'caption' => '<h4>Taking over the game...</h4><p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/Bless_edit.jpg'),
            'caption' => '<h4>Taking over the game...</h4><p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/Bless_edit.jpg'),
            'caption' => '<h4>Taking over the game...</h4><p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],
        [
            'content' => Html::img('/images/Bless_edit.jpg'),
            'caption' => '<h4>Taking over the game...</h4><p>Getting paid!<br/> ' . Html::a("Get New Music Now", "https://itunes.apple.com/us/artist/og-profit-k/id960021450?ign-mpt=uo%3D4") . '</p>',
            'options' => ['data-interval'=>4000],
        ],

    ]
]);  
?>

