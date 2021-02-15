<div id="site-header" class="site-header text-center">
    <div class="site-header-cover">
        <div class="site-header-fade"></div>
        <div class="site-header-entry">
            <?php if ( qa_opt( 'donut_banner_closable' ) ): ?>
                <div class="hide-btn-wrap">
                    <button title="<?php echo donut_lang_html( 'hide_this_banner' ) ?>" id="hide-site-header"
                            type="button" class="close" data-dismiss="site-header-entry" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif ?>

            <h1 class="top-heading"><?php echo qa_opt( 'donut_banner_head_text' ) ?></h1>

            <?php if ( qa_opt( 'donut_banner_div1_text' ) or qa_opt( 'donut_banner_div2_text' ) or qa_opt( 'donut_banner_div2_text' ) or qa_opt( 'donut_banner_div1_icon' ) or qa_opt( 'donut_banner_div2_icon' ) or qa_opt( 'donut_banner_div3_icon' ) ): ?>
                <div class="container visible-md visible-lg">
                    <div class="col-md-4 jumbo-box">
                        <div class="wrap">
                            <div class="icon-wrap">
                                <span class="<?php echo qa_opt( 'donut_banner_div1_icon' ) ?>  fa-2x"></span>
                            </div>
                            <div class="hint">
                                <?php echo qa_opt( 'donut_banner_div1_text' ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 jumbo-box">
                        <div class="wrap">
                            <div class="icon-wrap">
                                <span class="<?php echo qa_opt( 'donut_banner_div2_icon' ) ?> fa-2x"></span>
                            </div>
                            <div class="hint">
                                <?php echo qa_opt( 'donut_banner_div2_text' ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 jumbo-box">
                        <div class="wrap">
                            <div class="icon-wrap">
                                <span class="<?php echo qa_opt( 'donut_banner_div3_icon' ) ?> fa-2x"></span>
                            </div>
                            <div class="hint">
                                <?php echo qa_opt( 'donut_banner_div3_text' ) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <div class="search-wrapper">
                <?php if ( qa_opt( 'donut_banner_show_ask_box' ) ): ?>
                    <div class="search-bar col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1">
                        <form class="form-inline" method="post" action="<?php echo qa_path_html( 'ask' ); ?>">
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control input-lg ask-field" id="ask"
                                       placeholder="<?php echo donut_lang( 'ask_placeholder' )?>" name="title">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg ask-btn hidden-xs"><?php echo donut_lang( 'ask_button' )?></button>
                            <input type="hidden" name="doask1" value="1">
                        </form>
                    </div>
                <?php endif ?>

                <!--IF you are using the default vector , you should not remove the attribution for freepik.com-->
                <div class="col-lg-12 visible-lg text-right small">J&K Students marching ahead in life</div>
            </div>
        </div>
    </div>
    <!---- below bannerabout pmsss --->

<style type="text/css">
    .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
</style>
<br>
<div class="container ">
    <div class="row">
            
                    <div class="col-md-6 ">
                    <div class="img-square-wrapper">
                        <img class="" src="qa-theme\Donut-theme\images\aicte.JPG"  alt="aicte building">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-title bold"><strong>What is PMSSS</strong></h4>
                        <p class="card-text " style="font-size: 16px;" >Prime Minister special Scholarship Scheme is for Jammu and Kashmir , Ladakh students having their domicile certificate.<br> The Prime Minister special Scholarship Scheme is under AICTE-(All India Council of Technical Education).
                         </p>
                         <a href="https://www.aicte-jk-scholarship-gov.in/"><button type="button" class="btn btn-success">Apply here</button></a>
                         <h4><strong>Am I Eligible ?</strong> 
</h4>
                         <ul class="list-group list-group-flush " style="font-size: 16px;">
                        <li class="list-group-item">If you are willing to study outside j&k</li>
                        <li class="list-group-item">If you have passed 10+2 from CBSE,J&K or ICSE board affiliated school's in Jammu and Kashmir.</li>
                        <li class="list-group-item">If you have completed Diploma for 3 years after 10th class from J&K Polytechnic, you are eligible for the admission in 2nd year directly.</li>
                      </ul>
                     </div>
                 </div>
                    
              
        
       
   
</div>
<!-------- start---->

    <!---- about pmsss end --->
</div>
