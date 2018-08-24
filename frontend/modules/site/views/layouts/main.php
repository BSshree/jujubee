<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\assets\AppAssetJujubee;

AppAssetJujubee::register($this);
$seo = \common\models\Seo::findMetaTags(Yii::$app->request->url);

$this->registerMetaTag(['name' => 'description', 'content' => $seo->meta_desc]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $seo->meta_keyword]);
$this->title = $seo->meta_title ?: $this->title;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-PF8V7PV');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF8V7PV"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php $this->beginBody() ?>
        <?php if (Yii::$app->request->url != '/terms') { ?>
            <?php echo $this->render('@frontend/modules/site/views/layouts/header'); ?> 
        <?php } ?>

        <?= $content ?>

        <?php if (Yii::$app->request->url != '/terms') { ?>
            <?php echo $this->render('@frontend/modules/site/views/layouts/footer'); ?> 
        <?php } ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
