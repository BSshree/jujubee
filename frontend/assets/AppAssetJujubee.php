<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetJujubee extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/site_theme';
    public $css = [
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/style.css',
        'css/responsive.css',
        'css/custom.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
    ];
    public $js = [
        'js/jquery-2.1.1.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/wow.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        'js/custom.js',
        'js/jquery.validate.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];

}
