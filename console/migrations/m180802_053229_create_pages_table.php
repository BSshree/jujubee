<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m180802_053229_create_pages_table extends Migration {

    /**
     * {@inheritdoc}
     */
    const PAGES_TABLE = '{{%pages}}';

    public function safeUp() {

        $this->insert(self::PAGES_TABLE, [
            'title' => 'Our Story',
            'slug' => 'about',
            'content' => "  <section class='welcome'>
      <div class='container'>
        <div class='row'>
          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
             <h5>ABOUT US</h5>
              <h2>We’r a team of high-octane creative & talented people with innovative ideas & Marketing expertise.</h2>
              <!-- <img src='./assets/images/about-us.jpg' class='img-about1'> -->
          </div>
          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
            <p>We provide website development, Product development, Business Intelligence & Digital marketing services to startups and small businesses looking for a partner for their digital media, design, lead generation, and marketing requirements. The important word in that last sentence is “partner.” <br/><br/>
            We work with you, not for you. We are headquartered in Madurai, India, with our associates located across Chennai, Wilmington, US & Selangor, Malaysia. To best serve a client base that stretches throughout the regions where we serve.</p>
          </div>
          </div>

          <div class='row our-history'>
             <div  class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5'>
                <img src='themes/site_theme/images/about-1.jpg' class='img-right'>
             </div>

             <div  class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                <h5>OUR HISTORY</h5>
                <h3>In IT industry from the last 10 years!</h3>
                <p>Jujubee Media is a subsidary of Sumanas Technologies Pvt Ltd, that has been in the business of core IT solutions
                from the past 10 years, With expert knowledge in making websites that drive ROI, we have a vast range of developement
                experience from a simple Wodpress website to complex API's and SaaS over PHP Frameworks.</p>
             </div>
          </div>


          <div class='row our-history-part2'>
             <div  class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                <h5>OUR MISSION</h5>
                <h3>Deliver what our client's need!</h3>
                <p>Taking full ownership of our clients project is what keeps us driving, we believe in making stronger relations
                  than transactions and with that idea strive to deliver the most advanced websites, campaigns and sales funnels</p>
             </div>
             <div  class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                <img src='themes/site_theme/images/about-2.jpg' style='    width: 100%;'>
             </div>
          </div>
        </div>
    </section>

    <section class='about-your-business'>
      <div class='container-fluid'>
      <div class='row'>
        <div  class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6'>
          <img src='themes/site_theme/images/about-3.jpg'>
        </div>
        <div  class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center mt-5 mb-5'>
          <img src='themes/site_theme/images/logo.png' class='img-header'>
           <h3>GET IN TOUCH<BR/>WITH US</h3>
            <p>To get a free website audit or a brief of our services please feel free to talk to us, and if you dont think we offer what your business needs please do get in touch even then,
              so that probably we can point you in the right direction.</p>
                <button type='button' class='btn btn-warning btn-works'>Contact us</button>

        </div>
      </div>
    </div>
    </section> ",
            'bgimage' => 'banner',
        ]);

        $this->insert(self::PAGES_TABLE, [
            'title' => 'Our Works',
            'slug' => 'work',
            'content' => " <section class='work'>
        <div class='container'>
        <div class='row height-work grid text-left'>
            <div class='col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8'>
                <h5>OUR WOKS</h5>
                <h2>We’ve done lot’s of work, Let’s Check some from here</h2>
            </div>
        <div class='gallery col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <button class='btn btn-default filter-button' data-filter='all'>All</button>
            <button class='btn btn-default filter-button' data-filter='hdpe'>Business</button>
            <button class='btn btn-default filter-button' data-filter='sprinkle'>Finance</button>
            <button class='btn btn-default filter-button' data-filter='spray'>Technical</button>
            <button class='btn btn-default filter-button' data-filter='irrigation'>Marketing</button>
        </div>

        
        
            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe' >
              <a href='#' data-toggle='modal' data-target='#exampleModal'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider1.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> BUSINESS <br/>
                    <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle '>
               <a href='#' data-toggle='modal' data-target='#exampleModal'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider2.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> FINANCE <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe'>
              <a href='#' data-toggle='modal' data-target='#exampleModal'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider3.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> BUSINESS <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation'>
              <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider4.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> MARKETING <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle '>
              <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider1.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> FINANCE <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray'>
              <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider5.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> TECHNICAL <br/>
                      <span class='btn motivate-link'> Bespoke Web design</span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation'>
              <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider1.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> MARKETING <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray'>
               <figure class='effect-oscar'> <img src='themes/site_theme/images/slider2.jpg' alt=''/>
              <figcaption>
                <p class='pro-txt'> TECHNICAL <br/>
                  <a href='#' class='btn motivate-link'> Bespoke Web design </a></p>
              </figcaption>
            </figure>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation'>
                <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider3.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> MARKETING <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation'>
                <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider5.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> MARKETING <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

            <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe'>
            <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider2.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> BUSINESS <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
            </div>

             <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 home-pro-thumb filter hdpe'>
            <a href='#'>
                <figure class='effect-oscar'> <img src='themes/site_theme/images/slider5.jpg' alt=''/>
                  <figcaption>
                    <p class='pro-txt'> BUSINESS <br/>
                      <span class='btn motivate-link'> Bespoke Web design </span></p>
                  </figcaption>
                </figure>
              </a>
          </div>
          
        </div>

        <!-- Modal -->
  <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
  <div class='modal-dialog ' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Business</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body modal-work'>
        <h4>Family Asset Management</h4>
        <div class='project-details'>
          <div class='project-date'>
            <p>Project Date:<span>26 Nov 2018</span></p>
          </div>
            <p>Project Type: <span>Angular Js-4</span></p>
            <p>Project Link: <a href='http://demo.arkinfotec.in/jujubee/demo/index.html'> http://demo.arkinfotec.in/jujubee/demo/index.html</a></p>
        </div>
        <div id='Projects' class='owl-carousel owl-theme slider-project'>
            <div class='item'>
              <img src='themes/site_theme/images/project1.jpg' >
            </div>
            <div class='item'>
              <img src='themes/site_theme/images/project2.jpg' >
            </div>
            <div class='item'>
              <img src='themes/site_theme/images/project3.jpg' >
            </div>
            <div class='item'>
              <img src='themes/site_theme/images/about-us.jpg' >
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
    </section>",
            'bgimage' => 'banner banner-work',
        ]);

        $this->insert(self::PAGES_TABLE, [
            'title' => 'UI / UX Design',
            'slug' => 'web-design',
            'content' => "  <section class='services-seo webdesign-service-cont'>
      <div class='container'>
        <div class='row'>
          <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 inner-heading'>
             <h5>SEARCH ENGINE OPTIMIZE</h5>
              <h2>We Combine Design, Thinking And Technical</h2>
              <!-- <img src='./assets/images/about-us.jpg' class='img-about1'> -->
          </div>
          
          
          <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 service-web '>
            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
          </div>
          <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6'>
            <img src='themes/site_theme/images/web-design.jpg' alt=''>
          </div>
          
          <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 inner-heading inner-heading2'>
            
          <h2>Learn Our Digital Branding Approach  </h2>
              <!-- <img src='./assets/images/about-us.jpg' class='img-about1'> -->
          </div>
          
          
          <div class='col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 webservices-thumb'>
          
          
          <p class='wow zoomIn' data-wow-delay='.3s'> <img src='themes/site_theme/images/icon-7.png'  alt=''></p>
          
          <h4> Research &  Workshops</h4>
          
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus dolor, convallis sit amet iaculis quis, tempus ut nibh. Fusce gravida finibus est.
          
          
           </div>
           
           <div class='col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 webservices-thumb'>
          
          
          <p class='wow zoomIn' data-wow-delay='.6s'> <img src='themes/site_theme/images/icon-8.png'  alt=''></p>
          
          <h4> Ideation Sessions</h4>
          
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus dolor, convallis sit amet iaculis quis, tempus ut nibh. Fusce gravida finibus est.
          
          
           </div>
          
          
          <div class='col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 webservices-thumb'>
          
          
          <p class='wow zoomIn' data-wow-delay='.9s'> <img src='themes/site_theme/images/icon-9.png'  alt=''></p>
          
          <h4> Creativity and Design</h4>
          
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus dolor, convallis sit amet iaculis quis, tempus ut nibh. Fusce gravida finibus est.
          
          
           </div>
           
           <div class='col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 webservices-thumb'>
          
          
          <p class='wow zoomIn' data-wow-delay='1.1s'> <img src='themes/site_theme/images/icon-10.png'  alt=''></p>
          
          <h4> Strategy and Execution</h4>
          
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus dolor, convallis sit amet iaculis quis, tempus ut nibh. Fusce gravida finibus est.
          
           </div>
          
        </div>
      </div>
    </section>
<section class='callus'>
      <div class='container'>
        <div class='row'>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-contact'>
            <h2>Call us on +91 98948 37443</h2>
            <p>best solutions is here</p>
           </div>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-email'>
            <h2>Do you want work with us?</h2>
            <p>Email Us : Jujubee@gmail.com</p>
           </div>
        </div>
      </div>  
    </section>",
            'bgimage' => 'banner banner-services',
        ]);

        $this->insert(self::PAGES_TABLE, [
            'title' => 'Web Development',
            'slug' => 'web',
            'content' => " <section class='services-seo webdesign-service-cont'>
      <div class='container'>
        <div class='row'>
          <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 inner-heading'>
             <h5>Web Development Company</h5>
              <h2>We are Delivering Exceptional Digital Products</h2>
              <!-- <img src='./assets/images/about-us.jpg' class='img-about1'> -->
          </div>
          <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 service-web'>
            <h3>Bespoke Web design & Development Company</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
          </div>
          <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6'>
            <img src='themes/site_theme/images/web-development.jpg' alt=''>
          </div>
          
          <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 inner-heading inner-heading2'>
            
          <h2>Praesent non viverra nisl. Morbi ac libero ut est dignissim  </h2>
              <!-- <img src='./assets/images/about-us.jpg' class='img-about1'> -->
          </div>
          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 web-thumb'>
          <p> <img src='themes/site_theme/images/ui-ux.png'  alt=''></p>
          
          <h4>UI / UX  Development</h4>
          
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nisl sagittis, posuere nunc sit amet, bibendum risus. Cras finibus faucibus nisl, eget feugiat arcu blandit at. Aliquam sit amet porttitor dui, in eleifend est. Aliquam a velit tempus, maximus turpis at, fringilla leo. Aliquam non eros id leo vehicula blandit id vitae lacus. Quisque sollicitudin dolor sed urna tristique posuere. Ut massa lectus, scelerisque vel dapibus at, consequat at felis. Fusce tempus tincidunt volutpat. Duis porttitor velit quam, eget eleifend ipsum maximus ut. 
          
           </div>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 web-thumb'>
          <p> <img src='themes/site_theme/images/ecommerce.png'  alt=''></p>
          <h4>Ecommerce Solution </h4>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nisl sagittis, posuere nunc sit amet, bibendum risus. Cras finibus faucibus nisl, eget feugiat arcu blandit at. Aliquam sit amet porttitor dui, in eleifend est. Aliquam a velit tempus, maximus turpis at, fringilla leo. Aliquam non eros id leo vehicula blandit id vitae lacus. Quisque sollicitudin dolor sed urna tristique posuere. Ut massa lectus, scelerisque vel dapibus at, consequat at felis. Fusce tempus tincidunt volutpat. Duis porttitor velit quam, eget eleifend ipsum maximus ut. 
          
           </div>
            <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 web-thumb'>
          <p> <img src='themes/site_theme/images/cms.png'  alt=''></p>
          <h4>Content Management System </h4>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nisl sagittis, posuere nunc sit amet, bibendum risus. Cras finibus faucibus nisl, eget feugiat arcu blandit at. Aliquam sit amet porttitor dui, in eleifend est. Aliquam a velit tempus, maximus turpis at, fringilla leo. Aliquam non eros id leo vehicula blandit id vitae lacus. Quisque sollicitudin dolor sed urna tristique posuere. Ut massa lectus, scelerisque vel dapibus at, consequat at felis. Fusce tempus tincidunt volutpat. Duis porttitor velit quam, eget eleifend ipsum maximus ut. 
           </div>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 web-thumb'>
          <p> <img src='themes/site_theme/images/custom-app.png'  alt=''></p>
          <h4>
Custom Application Development
 </h4>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nisl sagittis, posuere nunc sit amet, bibendum risus. Cras finibus faucibus nisl, eget feugiat arcu blandit at. Aliquam sit amet porttitor dui, in eleifend est. Aliquam a velit tempus, maximus turpis at, fringilla leo. Aliquam non eros id leo vehicula blandit id vitae lacus. Quisque sollicitudin dolor sed urna tristique posuere. Ut massa lectus, scelerisque vel dapibus at, consequat at felis. Fusce tempus tincidunt volutpat. Duis porttitor velit quam, eget eleifend ipsum maximus ut. 
          
           </div>
        </div>
      </div>
    </section>
<section class='callus'>
      <div class='container'>
        <div class='row'>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-contact'>
            <h2>Call us on +91 98948 37443</h2>
            <p>best solutions is here</p>
           </div>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-email'>
            <h2>Do you want work with us?</h2>
            <p>Email Us : Jujubee@gmail.com</p>
           </div>
        </div>
      </div>  
    </section>",
            'bgimage' => 'banner banner-web-development',
        ]);

        $this->insert(self::PAGES_TABLE, [
            'title' => 'SEO',
            'slug' => 'seo',
            'content' => " <section class='services-detail'>
      <div class='container'>
        <div class='row'>
          <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 service-web'>
            <h2>Premium Features</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
          </div>
          <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6'>
            <img src='themes/site_theme/images/digi.jpg' alt=''>
          </div>

          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 services-category'>
            <img src='themes/site_theme/images/service-detail-2.png' alt='' >
            <div class='details-hide'>
              <h4>Organic Search</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo.</p>
            </div>
          </div>

          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 services-category'>
            <img src='themes/site_theme/images/service-detail-3.png' alt=''>
            <div class='details-hide'>
              <h4>On-Page SEO</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo.</p>
            </div>
          </div>

          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 services-category'>
            <img src='themes/site_theme/images/service-detail-4.png' alt=''>
            <div class='details-hide'>
              <h4>Link Building</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo.</p>
            </div>
          </div>

          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 services-category'>
            <img src='themes/site_theme/images/service-detail-5.png' alt=''>
            <div class='details-hide'>
              <h4>Keyword Research / Strategy</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo.Vestibulum ante ipsum primis in faucibus orci.</p>
            </div>
          </div>


          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 services-category'>
            <img src='themes/site_theme/images/service-detail-6.png' alt=''>
            <div class='details-hide'>
              <h4>Activity Reports</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo.Vestibulum ante ipsum primis in faucibus orci.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class='identity'>
      <div class='container'>
        <div class='row'>
          <div class='col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6'>
            <h3>We create<br/> identity</h3>
            <p>consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. Proin egestas ex neque, at hendrerit justo placerat nonuis a est nec sapien.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. Proin egestas ex neque, at hendrerit justo placerat nonuis a est nec sapien.<br/><br/>consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. Proin egestas ex neque, at hendrerit justo placerat nonuis a est nec sapien.</p>
          </div>
        </div>
      </div>
    </section>

    <section class='callus'>
      <div class='container'>
        <div class='row'>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-contact'>
            <h2>Call us on +91 98948 37443</h2>
            <p>best solutions is here</p>
           </div>
           <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-email'>
            <h2>Do you want work with us?</h2>
            <p>Email Us : Jujubee@gmail.com</p>
           </div>
        </div>
      </div>  
    </section>",
            'bgimage' => 'banner banner-service-details',
        ]);

        $this->insert(self::PAGES_TABLE, [
            'title' => 'Mobile App Development',
            'slug' => 'mobile',
            'content' => "<section class='services-seo webdesign-service-cont'>
  <div class='container'>
    <div class='row'>
      <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 inner-heading'>
        <h5>Mobile app Development Company</h5>
        <h2>Lorem ipsum dolor  amet consectetur adipiscing elit. Vestibulum</h2>
        <!-- <img src='./assets/images/about-us.jpg' class='img-about1'> --> 
      </div>
      <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 service-web'>
        <h3>Bespoke Mobile App Development Company</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.<br/>
          <br/>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
      </div>
      <div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 '>
       <img src='assets/images/ios-development1.jpg' alt=''> 
     </div>
      <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 inner-heading inner-heading2'>
        <h2>Praesent non viverra nisl. Morbi ac libero ut est dignissim </h2>
        <!-- <img src='./assets/images/about-us.jpg' class='img-about1'> --> 
      </div>
    </div>
    <div class='row grid  services-text'>
      <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-md-2 app-develop-thumb'>
        <h2 class='services-head-bold'>IOS Development</h2>
        <hr class='drop-line'>
        <br/>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed orci viverra, semper urna id, condimentum orci. In id augue nec urna malesuada semper sit amet ut eros. Nulla ac faucibus ante. Aenean consequat ex tortor, et lacinia nibh suscipit et. Suspendisse sed porta enim, a facilisis purus. Mauris tempus vulputate molestie. Quisque vitae enim commodo, hendrerit sapien eu, vehicula justo. Pellentesque a ultricies risus, ac euismod eros. Curabitur gravida neque sapien, id lobortis sem fringilla molestie. Fusce malesuada leo ut fermentum commodo. Donec in egestas augue. Ut tincidunt, tortor at elementum dignissim, ex nulla consectetur felis, quis maximus lacus eros sed metus.</p>
        <p>Vestibulum ultrices nisl risus, vitae malesuada tortor convallis et. Phasellus pretium nisi gravida euismod placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
      </div>
      <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5 mobileapp-img wow fadeInRight'>
        <div class=''> <img src='assets/images/ios-development.png' alt=''> </div>
      </div>
    </div>
    
    <div class='row grid mt-5 services-text'>
          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 app-develop-thumb'>
            <h2 class='services-head-bold'>Android App Development</h2>
            <hr class='drop-line'><br/> 
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed orci viverra, semper urna id, condimentum orci. In id augue nec urna malesuada semper sit amet ut eros. Nulla ac faucibus ante. Aenean consequat ex tortor, et lacinia nibh suscipit et. Suspendisse sed porta enim, a facilisis purus. Mauris tempus vulputate molestie. Quisque vitae enim commodo, hendrerit sapien eu, vehicula justo. Pellentesque a ultricies risus, ac euismod eros. Curabitur gravida neque sapien, id lobortis sem fringilla molestie. Fusce malesuada leo ut fermentum commodo. Donec in egestas augue. Ut tincidunt, tortor at elementum dignissim, ex nulla consectetur felis, quis maximus lacus eros sed metus.</p>
        <p>Vestibulum ultrices nisl risus, vitae malesuada tortor convallis et. Phasellus pretium nisi gravida euismod placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
          </div>
          <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  mb-5 mobileapp-img wow fadeInLeft'>
             <img src='assets/images/android-app-development.png' alt=''>
          </div>
        </div>
  </div>
</section>
<section class='callus'>
  <div class='container'>
    <div class='row'>
      <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-contact'>
        <h2>Call us on +91 98948 37443</h2>
        <p>best solutions is here</p>
      </div>
      <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-email'>
        <h2>Do you want work with us?</h2>
        <p>Email Us : Jujubee@gmail.com</p>
      </div>
    </div>
  </div>
</section>",
            'bgimage' => 'banner banner-mobile',
        ]);

        $this->insert(self::PAGES_TABLE, [
            'title' => 'Out Source',
            'slug' => 'outsource',
            'content' => ' <section class="services-detail">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 service-web">
            <h2>Bespoke Digital
Outsourcing Company</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
            <img src="themes/site_theme/images/outsourcing.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="identity outsourse-section2">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-6">
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
            <p>consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. Proin egestas ex neque, at hendrerit justo placerat nonuis a est nec sapien.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. Proin egestas ex neque, at hendrerit justo placerat nonuis a est nec sapien.<br/><br/>consectetur adipiscing elitestib ulum eleifend massa augue, quis mollis magna efficitur egeuscds pendisse potenti. Proin egestas ex neque, at hendrerit justo placerat nonuis a est nec sapien.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="callus">
      <div class="container">
        <div class="row">
           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-contact">
            <h2>Call us on +91 98948 37443</h2>
            <p>best solutions is here</p>
           </div>
           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 call-us-email">
            <h2>Do you want work with us?</h2>
            <p>Email Us : Jujubee@gmail.com</p>
           </div>
        </div>
      </div>  
    </section>',
            'bgimage' => 'banner banner-outsource',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->delete(self::PAGES_TABLE,['title' => 'Our Story']);
        $this->delete(self::PAGES_TABLE,['title' => 'Our Works']);
        $this->delete(self::PAGES_TABLE,['title' => 'UI / UX Design']);
        $this->delete(self::PAGES_TABLE,['title' => 'Web Development']);
        $this->delete(self::PAGES_TABLE,['title' => 'SEO']);
        $this->delete(self::PAGES_TABLE,['title' => 'Mobile App Development']);
        $this->delete(self::PAGES_TABLE,['title' => 'Out Source']);
    }
}
