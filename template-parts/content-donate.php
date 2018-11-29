
<!--=== DONATE AND CONTACT ===-->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
                       
           <section class="main-content">
            
            <div id="content-center">
                <p class="lead">Donations accepted through PayPal</p>
            </div>
               
            <div class="row" id="content-center">
                <div class="col-sm-5">   
                </div>
                <div id="content" class="col-sm-2">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="BF36AE5LEQE3Y" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div><!-- row -->
            
            <div id="content-center">
            <?php while ( have_posts() ) : the_post(); ?>
            
                <?php the_content(); ?>
                
            <?php endwhile; //end of loop ?>
            </div>
            
           </section><!-- main-content -->
            
        </div><!-- content col-sm-12 -->
    </div><!-- row primary -->
</div><!-- container -->