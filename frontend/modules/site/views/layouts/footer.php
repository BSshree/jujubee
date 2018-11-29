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
    <div class="container footer-padding">
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
            <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                <h4 class="mob-hed-center font-pop">Digital</h4>
                <ul>
                    <li><a href="/about">About</a></li>
                    <!--<li><a href="/careers">Careers</a></li>-->
                    <li><a href="/clients">Portfolio</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/contactus">Get In Touch</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <h4 class="mob-hed-center font-pop">Web</h4>
                <ul>
                    <li><a href="/creative-agency" >Creative Agency</a></li>
                    <li><a href="/web-design">Web Design</a></li>
                    <li><a href="/digital-marketing" >Digital Marketing</a></li>
                    <li><a href="/mobile-application" >Mobile Application</a></li>
                    <li><a href="/design-branding" >Design & Branding</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  Address-info">
                <h4 class="mob-hed-center font-pop">Quick Contact</h4>
                 <form id="contactusform"  name="contactusform" class="formValidate" method="post" action="">
                    <div class="form-group">
                         <input type="text" id="con-name" name="name" class="form-control input-box" placeholder="Name*">
                    </div>
                    <div class="form-group">
                         <input type="number" id="con-phone" name="phone" class="form-control input-box"  placeholder="Phone*">
                    </div>
                    <div class="form-group">
                        <input type="email" id="con-email" name="email" class="form-control input-box"  placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input-box" id="con-mess" name="mess" placeholder="Message" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" id="request-submit" name="submit" class="btn btn-warning btn-submit" value="SUBMIT" >
                    </div>
                     <div class="form-group request-show" style="display:none">
                             <div class="form-group " >
                                 <br><p id="successrequest"> </p>  
                             </div>
                             <div class="loading-image"><img src="themes/site_theme/images/re.gif" width="8%" height="8%" alt=""> </div>
                        </div>
                </form>
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
                    <h2>Bangalore, India  </h2>
                    <p> +91 9952870443 </p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <h2>Selangor,Malaysia</h2>
                    <p>+60109101103 </p>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-submenu1">
        <span>Copyright @ 2018 jujubee media. All rights reserved. | Digital Marketing Agency 
            <!--<a href="/terms">Terms & conditions apply</a>-->
        </span>
    </div>
</footer>

<!--<div class="cookies">
      <div class="container">
        <div class="col-12 col-xl-10 offset-xl-1">
          <p>This site, like many others, uses small files called cookies to help us customise your experience, please agree to continue to our website.</p>
          <div class="btn-terms-agree">
            <button type="button" class="btn btn-warning btn-agree" id="cookie-agreebutton">Agree</button>
          </div>
        </div>
      </div>
    </div>  -->

<?php
$contactus = Yii::$app->getUrlManager()->createUrl("site/site/contacts");
$careers = Yii::$app->getUrlManager()->createUrl("site/site/career");
$script = <<< JS
        
     $(document).ready(function () {

//        $(window).on("load", function () {           
//            var urlHash = window.location.href.split("#")[1];
//                var myarray = ['uiux','ecommerce','cms','cad'];
//                if(jQuery.inArray(urlHash, myarray) !== -1){
//                  $('html,body').animate({
//                      scrollTop: $('#' + urlHash).offset().top + 190
//                  }, 500); 
//                      }else{
//                            $('html,body').animate({
//                              scrollTop: $('#' + urlHash).offset().top - 120
//                          }, 500); 
//                    }
//        });
        
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
        
        $('#careerModal').on('show.bs.modal', function(e){
            var button = $(e.relatedTarget);
            var title = button.data('title');
            var designation = button.data('designation');
            var modal = $(this);
            modal.find('.modal-title').text(title);
            modal.find('[name="designation"]').val(title);
            modal.find('.modal-body .career-content').html($('#'+designation+'-content .modal-content').html());
        });
        
      
 
         $("#contactusform").validate({
        rules: {
              'name': {
                     required: true,
		},
		'phone': {
                    required:true,
                    number:true,
		},
		'email': {
                    required: true,
                    email: true
                 },
                'mess': {
                    required: true,
		},
           },
        messages: {
                'name': {
                    required :"Please Enter Your Name",
		},
		'phone':{
                    required: "Please Enter Your Phone Number",
                    number: "Please Enter Valid Phone Number"
		},
                'email': "Please Enter a Valid Email Address",
                 'mess': {
                    required :"Please Enter Your Message",
		},
            },
                
              submitHandler: function(form) {
       
                var na = $('#con-name').val();
                var em = $('#con-email').val();
                var ph = $('#con-phone').val();
                var mes = $('#con-mess').val();
            
            $(".request-show").show();   
                
            $.ajax({
       
                type: 'POST',
                url: '{$contactus}',
                data:{
                    na1:na, em1:em, ph1:ph, mes1:mes,
                    form: 'contact',
                     },
                success: function(data) {
                    if(data == "success"){
                     $("#successrequest").html( 'Your request has been send sucessfully!!' );
                      setTimeout(function(){  $("#successrequest").hide("slow"); $("#successrequest").html("");
                       $(".request-show").hide(); }, 5000);
                      $('#contactusform')[0].reset(); 
                      $(".loading-image").hide(); 
                    }
                
                },
            });

           }     
    });
   
                
    $("#career_form").validate({
        rules: {
              'name': {
                     required: true,
		},
		'phone': {
                    required:true,
                    number:true,
		},
		'email': {
                    required: true,
                    email: true
                 },
                
                'mess': {
                    required: true,
		},
                'know': {
                    required: true,
		},
//                'resume': {
//                    required: true,
//                    //extension: "docx|rtf|doc|pdf",
//		}
           },
        messages: {
                'name': {
                    required :"Please Enter Your Name",
		},
		'phone':{
                    required: "Please Enter Your Phone Number",
                    number: "Please Enter Valid Phone Number"
		},
                'email': "Please Enter a Valid Email Address",
                
                 'mess': {
                    required :"Please Enter Your Message",
		},
                'know': {
                    required :"Please Enter Your Reference",
		},
//                 'resume': {
//                    required :"Please Submit Your Resume",
//                   // extension:"Select valid file format",
//		}
            },
                submitHandler: function(form) {
                 var form_data =  new FormData($("#career_form")[0]);               
                $(".careers-show-buffer").show();   
                
                $.ajax({
                    url: '{$careers}',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'post',
                    success: function(data) {
                        if(data == "success"){
                            $(".loading-image").hide();
                            $("#successcareers").html( 'Your request has been send sucessfully!!' );
                            setTimeout(function(){  $("#successcareers").hide("slow"); $("#successcareers").html("");
                            $('#career_form')[0].reset(); 
                            $(".careers-show-buffer").hide();
                            $('#careerModal').modal('hide');
                               }, 5000);
                        }
                    },
                });
             return false;
           }     
        });
        
//    window.cookieconsent_options = {
//    learnMore: 'More info',
//    message : 'This site, like many others, uses small files called cookies to help us customise your experience, please agree to continue to our website'.
//    link: 'http://local.jujubeemedia/'
//    };
                    
 

   window.addEventListener("load", function(){
   window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#292929d6",
      "text": "#ffffff"
    },
    "button": {
      "background": "#fdcb43",
      "text": "#3b3636"
    }
  },
  "showLink": false,
  "theme": "classic",
  "content": {
    "message": "This site, like many others, uses small files called cookies to help us customise your experience, please agree to continue to our website.",
    "dismiss": "Agree"
    }
    })});
                    
  });
    
                     
        
JS;
$this->registerJs($script, View::POS_END);
?>
