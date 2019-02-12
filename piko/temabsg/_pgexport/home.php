<?php
/*
 Template Name: homepage
 */
?>
<?php
get_header(); ?>

    <?php echo do_shortcode("[smartslider3 slider=2]") ?>
    <div class="container c_mb50 c_mt50">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/equip.png" />
            </div>
            <div class="col-md-6">
                <h3 class="cihuy"><?php _e( 'Facilities and Equipment', 'ptbsg' ); ?></h3>
                <p class="c_p"> <?php _e( 'Bima Sakti Geotama is a full-service, in-situ geotechnical engineering company and soil / rock-related laboratories, geotechnical monitoring instrumentation, and geotechnical engineering consultants. BSG Serves with the best facilities and equipment in good performance will be running for our service client. The tools we have, including: Cone Penetration Test (CPT), CPTu, Drilling machine, Downhole Seismic Testing, Dilatometer (DMT), PDA Test, Monitoring Instrumentation and Soil Mechanical Laboratory. Other than that we have a lot of knowledge about software for numerical modeling so that it can solve problems effectively, quickly and accurately.', 'ptbsg' ); ?> </p>
            </div>
        </div>
    </div>
    <div class="c_bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-building-o fa-3x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4><?php _e( 'Company', 'ptbsg' ); ?></h4>
                            <p class="c_p"> <?php _e( 'Established in Bandung (2002), Bima Sakti Geotama (BSG) dedicated to solving wide range of complex geotechnical challenges in Indonesia, by becoming a professional geotechnical and engineering company that provides the most accurate interpretation and completes all geotechnical problems.', 'ptbsg' ); ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-map-signs fa-3x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4><?php _e( 'Best Experience', 'ptbsg' ); ?></h4>
                            <p class="c_p"> <?php _e( 'Bima Sakti Geotama (BSG) has more than 10 years of experience with more than 100 projects completed. Problem solving against geotechnical problems that are not limited to slope stability, deep / shallow foundations, Soft Soil Engineering, Excavation, Earthquake risks, tunnels, Dam, and seepage problems.', 'ptbsg' ); ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-gears fa-3x"></i>
                        </div>
                        <div class="col-md-10">
                            <h4><?php _e( 'Technology & Research', 'ptbsg' ); ?></h4>
                            <p class="c_p"> <?php _e( 'In activity, BSG has been supported by Engineers and technicians of trained and highly experienced people who are certified by Indonesian Society or Geotechnical Engineering (ISGE - HATTI). They must do research, development, and trainees to improve their knowledge and quality of services.', 'ptbsg' ); ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container c_mt50 c_mb50">
        <div class="row">
            <div class="col-md-6">
                <h3><?php _e( 'Company Analysis', 'ptbsg' ); ?></h3>
                <p class="c_p"> <?php _e( 'Bima Sakti Geotama is a full-service geotechnical engineering company, in situ and soil / rock related laboratory, geotechnical monitoring instrumentation and geotechnical engineering consultant. Most of our clients use geotechnical survey and planning services for determined geotechnical properties and geotechnical forensic like for sheet pile failure and for analysis of various mechanisms for solutions to existing geotama problems. There are more than 100 projects we are working on with our team serving with the latest technology and good skills so that more than 100 clients are satisfied with the results.', 'ptbsg' ); ?> </p>
            </div>
            <div class="col-md-6">
                <div id="canvas-holder" style="margin: auto;">
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="c_bg_gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/CIMG2484-1.jpg" />
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/CIMG2484-1.jpg" />
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/CIMG2484-1.jpg" />
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/CIMG2484-1.jpg" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-4 text-center">
            <h3><?php _e( '100', 'ptbsg' ); ?></h3>
            <p style="color:#777"><?php _e( 'HAPPY CLIENTS', 'ptbsg' ); ?></p>
        </div>
        <div class="col-md-4 text-center">
            <h3><?php _e( '10', 'ptbsg' ); ?></h3>
            <p style="color:#777"><?php _e( 'RESEARCH', 'ptbsg' ); ?></p>
        </div>
        <div class="col-md-4 text-center">
            <h3><?php _e( '100', 'ptbsg' ); ?></h3>
            <p style="color:#777"><?php _e( 'PORTOFOLIO PROJECTS', 'ptbsg' ); ?></p>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->        

<?php get_footer(); ?>