<?php

//use common\models\DlAdminCities;
//use common\models\DlCity;
//use yii\helpers\ArrayHelper;
use yii\helpers\Html;

use yii\web\View;
//use yii\widgets\ActiveForm;
//$session = Yii::$app->session;
//$cityid = $session->get('cityid');
?>



<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>JM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Jujubee </b> Media</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/backend/web/themes/admin/dist/img/user7-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/backend/web/themes/admin/dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin
                  <small>admin@gmail.com</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                   <?php echo Html::a('Profile', ['/admin/site/profile'], $options = ['class' => 'btn btn-default btn-flat']); ?>                               
                </div>
                <div class="pull-right">
                  <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
                    <?= Html::a('Sign out', ['/admin/site/logout'], $options = ['class' => 'btn btn-default btn-flat']); ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>