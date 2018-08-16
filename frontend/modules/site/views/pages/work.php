<section class="banner banner-work">
    <h2>Portfolio</h2>
    <!--<h4><a href="/"> HOME </a> / OUR WORKS</h4>-->
</section>

<section class="work">
    <div class="container">
        <div class="row height-work grid text-left">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h5>OUR WOKS</h5>
                <h2>Our work speaks for us!</h2>
            </div>
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--<button class="btn btn-default filter-button" data-filter="all">All</button>-->
                
                <?php //foreach ($categories as $category) {?>
                <!--<button class="btn btn-default filter-button" data-filter="<?php //echo strtolower($category); ?>"><?php //echo ucwords($category)?></button>-->
                <?php //} ?>
            </div>
            <?php
            foreach ($works as $work){?>
            
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter <?php echo strtolower($work->category); ?>" >
                <a href="#" data-toggle="modal" data-target="#workModal" data-category="<?php echo strtolower($work->category); ?>" data-projectdate="<?php echo strtolower($work->project_date); ?>"  data-projecttype="<?php echo strtolower($work->project_type); ?>" data-projecttitle="<?php echo strtolower($work->title); ?>" data-projectlink="<?php echo ($work->link); ?>">
                    <figure class="effect-oscar"> <img src="backend/web/uploads/<?php echo $work->thumbnail; ?>" alt=""/>
                        <figcaption>
                            <p class="pro-txt"> <?php echo strtoupper($work->title); ?> <br/>
                                <!--<span class="btn motivate-link"> Bespoke Web design </span></p>-->
                        </figcaption>
                    </figure>
                </a>
            </div>
            
            <?php  } ?>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="workModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title workcategory"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-work">
                        <h4 class="worktitle" style="text-transform: uppercase"></h4>
                        <div class="project-details">
<!--                            <div class="project-date">
                                <p>Project Date:<span class="workprojectdate"></span></p>
                            </div>-->
                            <p>Technology: <span class="workprojecttype"  style="text-transform: capitalize"> </span></p>
                            <p>Website Link: <a class="worklink" href="" target="2"></a></p>
                        </div>
                        <div id="Projects" class="owl-carousel owl-theme slider-project">
                            <div class="item">
                                <!--<img src="themes/site_theme/images/project1.jpg" >-->
                                <img src="backend/web/uploads/<?php echo $work->project_image; ?>" alt=""/>
                            </div>
<!--                            <div class="item">
                                <img src="themes/site_theme/images/project2.jpg" >
                            </div>
                            <div class="item">
                                <img src="themes/site_theme/images/project3.jpg" >
                            </div>
                            <div class="item">
                                <img src="themes/site_theme/images/about-us.jpg" >
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$script = <<< JS
    $('#workModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var category = button.data('category');
        var projectdate = button.data('projectdate');
        var projecttype = button.data('projecttype');
        var projecttitle = button.data('projecttitle');
        var projectlink = button.data('projectlink');
        var modal = $(this);
        modal.find('.workcategory').text(category);
        modal.find('.workprojectdate').text(projectdate);
        modal.find('.workprojecttype').text(projecttype);
        modal.find('.worktitle').text(projecttitle);
        modal.find('.worklink').text(projectlink);
        modal.find('.worklink').attr('href',projectlink);
      });

        $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
        
JS;
$this->registerJs($script, yii\web\View::POS_END)

?>