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
       
       
        
        <script type="application/ld+json">
                {
                  "@context" : "http://schema.org",
                  "@type" : "Organization",
                  "name" : "Jujubee Media - Digital Marketing Company",
                  "url" : "http://jujubeemedia.com/",
                  "logo": "http://jujubeemedia.com/themes/site_theme/images/logonew.png",
                  "sameAs" : [
                    "https://www.facebook.com/jujubeemedia",
                    "https://twitter.com/jujubeemedia",
                    "https://www.linkedin.com/company/14402872/",
                    "https://plus.google.com/u/0/b/106177774632969723573/"
                  ],
                  "contactPoint" : [{
                    "@type" : "ContactPoint",
                    "telephone" : "+9199528 70443",
                    "contactType" : "customer service"
                  }]
                }
            </script>
         <script type="application/ld+json">
            {
          "@context" : "http://schema.org",
          "@type" : "WebSite",
          "name" : "Jujubee Media - Digital Marketing Company",
          "alternateName" : "Jujubee Media",
          "url" : "http://jujubeemedia.com",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "http://jujubeemedia.com?s={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
    </script>
    
     <script type="application/ld+json">
            {
          "@context": "http://schema.org/",
          "@type": "Product",
          "image": "http://jujubeemedia.com/themes/site_theme/images/logonew.png",
          "name": "Digital Marketing Company",
          "review": {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "ratingValue": "5"
            },
            "name": "Great company to work with! Great communication and responsiveness, and great quality of work.",
            "author": {
              "@type": "Person",
              "name": "CJ Lewis"
            },
            "datePublished": "2018-01-15",
            "reviewBody": "Very good work. Great project management. I really enjoy working with them from Canada. Thanks to all the team.",
            "publisher": {
              "@type": "Organization",
              "name": "jujubeemedia.com"
            }
          }
        }
        </script>
        
        <script type="application/ld+json">
        {
          "@context": "http://schema.org",
         "@type": "LocalBusiness",     
         "image": "http://jujubeemedia.com/themes/site_theme/images/logonew.png",
         "url": "http://jujubeemedia.com",
         "logo": "http://jujubeemedia.com/themes/site_theme/images/logonew.png",
         "hasMap": "https://bit.ly/2PyrifK",
         "priceRange": "$$",

         "email": "mailto:info@sumanastech.com",   
         "address": {
         "@type": "PostalAddress",
         "addressLocality": "Madurai",
         "addressRegion": "India",
         "postalCode":"625016",
          "streetAddress": "244/3, Vivek Street, 
        Duraisamy Nagar, Near Corporation Park,
        Bye-Pass Road"
          },
           "description": "Jujubee Media is a subsidary of Sumanas Technologies Pvt Ltd, Considered the Best Website Design Services & Internet Marketing Agency in Madurai, Tamil Nadu.",
           "name": "Jujubee Media",
         "telephone": "+9199528 70443",
          "openingHours": "Mo 10:00-19:00,Tu 10:00-19:00,We 10:00-19:00,Th 10:00-19:00,Fr 10:00-19:00,Sa 10:00-19:00",
        "geo": {
          "@type": "GeoCoordinates",
         "latitude": "78.0876304",
         "longitude": "9.9150549"
             },         
          "aggregateRating": {
            "@type": "AggregateRating",
        "ratingValue": "4.9",
         "reviewCount": "10"
          },
          "sameAs" : ["https://www.facebook.com/jujubeemedia",
         "https://www.linkedin.com/company/14402872/",
         "https://twitter.com/jujubeemedia",                            
         "https://plus.google.com/u/0/b/106177774632969723573/"]
           }
        </script>


    <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "http://jujubeemedia.com/",
            "name": "Home"
            }
          },
           {
           "@type": "ListItem",
           "position": 2,
           "item":
           {
            "@id": "http://jujubeemedia.com/services/",
            "name": "Services"
            }
          },
          {
           "@type": "ListItem",
          "position": 3,
          "item":
           {
             "@id": "http://jujubeemedia.com/seo",
             "name": "Search Engine Optimization"
           }   
          }
         ]
        }
        </script>

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
