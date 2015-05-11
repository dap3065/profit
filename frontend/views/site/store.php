<?php
use yii\bootstrap\Tabs;
use yii\helpers\Html;

$this->title = 'OG Profit Store';

echo Tabs::widget([
    'items' => [
        [
            'label' => 'Singles',
            'content' => 'Coming Soon...',
            'active' => true
        ],
        [
            'label' => 'CDs',
            'content' => 'Coming Soon...',
//            'headerOptions' => [...],
            'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Clothes',
            'items' => [
                 [
                     'label' => 'Shirts',
                     'content' => 'Shirts coming real soon...',
                 ],
                 [
                     'label' => 'Hats',
                     'content' => 'Coming soon...',
                 ],
            ],
        ],
    ],
]);
?>

