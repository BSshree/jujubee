<?php

use yii\bootstrap\Modal;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;
?>
 <footer class="section-footer">
      <div class="container-fluid footer-padding">
        <div class="row">
            <?php echo \Yii::$app->shortcodes->parse('[blockcode title="Footer Brand Info"]'); ?>
<!--          <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 mob-footer">
           <p class="footer-font">We Build</p>
          <p class="footer-sub-hed">Brands</p>
          <p class="font-14">
            <a href="#" style="color:#fff;">START A PROJECT</a>
            <a class="hoeit1" href="#" >
              <img src="themes/site_theme/images/errarrw.png" alt="" style="width:20px;">
            </a>
          </p>
          <div class="mob-none">
            <h2 class="footer-para-hed">Best Digital Marketing Agency</h2>
             <p style="font-size: 15px;">Jujubee Media, A subsidary of Sumanas Technologies Private Limited, is an up and coming Digital Marketing Agency in Madurai, Providing Website Design & Developement, Search Engine Optimization, Social Media Management, Pay Per Click Ads and other services worldwide.
             </p>
          </div>

          </div>-->
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <h4 class="mob-hed-center font-pop">Digital</h4>
            <ul>
              <li><a href="/about">About Jujubee</a></li>
              <li><a href="/career">Jobs</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Testimonals</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <h4 class="mob-hed-center font-pop">Web</h4>
            <ul>
                <li><a href="/web#uiux" data-href="#uiux" class="footerweb" >UI/UX</a></li>
              <li><a href="/web#ecommerce" data-href="#ecommerce"  class="footerweb">Ecommerce</a></li>
              <li><a href="/web#cms" data-href="#cms"  class="footerweb">Content Management System</a></li>
              <li><a href="/web#cad" data-href="#cad" class="footerweb">Custom application Development</a></li>
              <li><a href="/mobile#android" data-href="#android" class="footermobile">Android</a></li>
              <li><a href="/mobile#ios" data-href="#ios" class="footermobile">IOS</a></li>
              <li><a href="/mobile#android" data-href="#android" class="footermobile">App Marketing</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mob-none">
            <h4 class="mob-hed-center font-pop">Thinking Blogs</h4>
            <ul>
              <li class="footer-blog">
                <span class="blog-date">26-June-2018</span><br/>
                <a href="">How to Create a Strong Video Marketing Strategy in three Steps</a></li>
              <li class="footer-blog">
                <span class="blog-date">27-June-2018</span><br/>
                <a href="">Tips and Tricks for a Successful Online Reputation Management</a></li>
              <li class="footer-blog">
                <span class="blog-date">28-June-2018</span><br/>
                <a href="">How to Boost your E-commerce Sales in 4 Easy Steps</a></li>
              <li class="footer-blog">
                <span class="blog-date">29-June-2018</span><br/>
                <a href="">5 Misleading facts about Digital Marketing</a></li>
              <li class="footer-blog">
                <span class="blog-date">30-June-2018</span><br/>
                <a href="#">Digital Marketing Strategy Essentials For Your Business growth</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-submenu mob-none">
      <div class="container">
        <div class="row  mt-3">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
            <h2>Madurai, India</h2>
            <p>+91 99528 70443  </p>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <h2>Wilmington, USA </h2>
            <p>+1 910-745-0404 </p>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <h2>Selangor,Malaysia</h2>
            <p>+60109101103 </p>
          </div>
        </div>

      </div>
  </div>
    <div class="footer-submenu1">
      <span>Copyright @ 2018 jujubee media. All rights reserved. | Digital Marketing Agency <a href="/terms">Terms & conditions apply</a></span>
    </div>
    </footer>
<?php 
$script = <<< JS
        
     $(document).ready(function () {
        
        $(window).on("load", function () {           
            var urlHash = window.location.href.split("#")[1];
                var myarray = ['uiux','ecommerce','cms','cad'];
                if(jQuery.inArray(urlHash, myarray) !== -1){
                  $('html,body').animate({
                      scrollTop: $('#' + urlHash).offset().top + 190
                  }, 500); 
                      }else{
                            $('html,body').animate({
                              scrollTop: $('#' + urlHash).offset().top - 120
                          }, 500); 
                    }
        });
        
        $(document).on('click', '.footerweb', function (event) {

            if(window.location.pathname == '/web'){
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'data-href')).offset().top + 190
            }, 500);
            }
        });
        
         $(document).on('click', '.footermobile', function (event) {

            if(window.location.pathname == '/mobile'){
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'data-href')).offset().top - 150
            }, 500);
            }
        });
        
      
    });
    
   
        
JS;
$this->registerJs($script, View::POS_END);
?>
