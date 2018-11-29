<section class="banner banner-work">
    <br><h2>Portfolio</h2>
    <!--<h4><a href="/"> HOME </a> / OUR WORKS</h4>-->
</section>

<section class="work career">
    <div class="container">
         <div class="row grid">
            <div  class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <!--<h5>OUR WORKS</h5>-->
                <h3>Our work speaks for us!</h3>
            </div>
        </div>
        <div class="row height-work grid text-left">
           <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4>Spread across different domains and technologies, our portfolio is a reflection of our exceptional technical expertise!</h4>
                <!--<button class="btn btn-default filter-button" data-filter="all">All</button>-->

                <?php //foreach ($categories as $category) {?>
<!--<button class="btn btn-default filter-button" data-filter="<?php //echo strtolower($category);   ?>"><?php //echo ucwords($category)  ?></button>-->
                <?php //} ?>
            </div>
            <?php foreach ($works as $work) { ?>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe<?php echo strtolower($work->category); ?>" >
                    <a href="#" data-toggle="modal" data-target="#workModal" data-category="<?php echo strtolower($work->category); ?>" data-projectdate="<?php echo strtolower($work->project_date); ?>"  data-projecttype="<?php echo strtolower($work->project_type); ?>" data-projecttitle="<?php echo strtolower($work->title); ?>" data-projectlink="<?php echo ($work->link); ?>" data-projectimage="<?php echo ($work->project_image); ?>">
                        <!--<figure class="effect-oscar">--> 
                            <img src="backend/web/uploads/<?php echo $work->thumbnail; ?>" alt=""/>
<!--                            <figcaption>
                                <p class="work-text-center" style="line-height: 1.2em;"> <?php // echo strtoupper($work->title); ?><br/>
                                    <span class="btn motivate-link" ><?php //echo strtoupper($work->title);   ?>  </span></p>
                            </figcaption>-->
                        <!--</figure>-->
                    </a>
                </div>

            <?php } ?>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="workModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
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
<!--                                                        <div class="project-date">
                                                            <p>Project Date:<span class="workprojectdate"></span></p>
                                                        </div>-->
                            <h5 style="text-transform: capitalize">Technology: <span class="workprojecttype"  style="text-transform: capitalize"> </span></h5>
                            <h5 style="text-transform: capitalize">Website Link: <a class="worklink" href="" target="2"> </a></h5>
                        </div> 
                       
                            <div id="Projects" class="owl-carousel owl-theme slider-project workprojectimage">
                                 <div class="item">
                                <img src="<?php //echo $work->project_image;  ?>" class="workprojectimage" alt=""/>
                            </div>
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
        var projectimage = button.data('projectimage');
        var modal = $(this);
        modal.find('.workcategory').text(category);
        modal.find('.workprojectdate').text(projectdate);
        modal.find('.workprojecttype').text(projecttype);
        modal.find('.worktitle').text(projecttitle);
        modal.find('.worklink').text(projectlink);
        modal.find('.worklink').attr('href',projectlink);
        modal.find('.workprojectimage').attr('src', 'backend/web/uploads/'+ projectimage);
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