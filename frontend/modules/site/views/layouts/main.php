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

$this->registerMetaTag(['name' => 'description','content' => $seo->meta_desc]);
$this->registerMetaTag(['name' => 'keywords','content' => $seo->meta_keyword]);
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
</head>
<body>
<?php $this->beginBody() ?>
    <?php //echo($this->keywords); exit; ?>
     <?php  echo $this->render('@frontend/modules/site/views/layouts/header'); ?> 

        <?= $content ?>
   
     <?php echo $this->render('@frontend/modules/site/views/layouts/footer'); ?> 

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
