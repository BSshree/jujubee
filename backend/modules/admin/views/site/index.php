<?php
/* @var $this yii\web\View */

//$this->title = 'Painting Tools';
use yii\helpers\Html;
use yii\web\View;
use yii\bootstrap\Alert;
use common\models\Seo;
use common\models\Client;
use common\models\Page;
$view = "More Info <i class='fa fa-arrow-circle-right'></i>";
?>

 <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <!-- ./col -->
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?=  $pages = Page::find()->count(); ?></h3>

              <p>Pages</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
               <?php echo Html::a($view, ['/admin/pages/index'], ["class" => 'small-box-footer']); ?>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
                 <?php $seo = Seo::find()->count(); ?>
                <h3>
                    <?= $seo; ?>
                </h3>
              <!--<h3>53<sup style="font-size: 20px">%</sup></h3>-->

              <p>SEO Management</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
               <?php echo Html::a($view, ['/admin/seo/index'], ["class" => 'small-box-footer']); ?>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $clients = Client::find()->count();?></h3>

              <p>Clients</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
               <?php echo Html::a($view, ['/admin/clients/index'], ["class" => 'small-box-footer']); ?>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
      </div>
      <div class="row">
      
      </div>

    </section>
