<?php
/*
 Template Name: aboutsss
 */
?>
<?php
get_header(); ?>

<div style="background-color:#DF6605">
    <div class="container" style="min-height: 200px;">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color:#FFF;margin-top:50px;"><?php _e( 'Dedicated to solving wide range of complex geotechnical challenges in Indonesia', 'ptbsg' ); ?></h1>
            </div>
        </div>
    </div>
</div>
<div style="border-bottom: 2px solid #f7f7f7">
    <div class="container c_mt50 c_mb50">
        <div class="row">
            <div class="col-md-3">
                <span><?php _e( 'About', 'ptbsg' ); ?></span>
                <h3><?php _e( 'Bima Sakti Geotama', 'ptbsg' ); ?></h3>
            </div>
            <div class="col-md-5">
                <p class="c_p"> <?php _e( 'Established in Bandung (2002), Bima Sakti Geotama is a full-service geotechnical engineering company, related soil/rock insitu and laboratory, geotechnical monitoring instrumentation and geotechnical engineering consultant.', 'ptbsg' ); ?> </p>
                <p class="c_p"> <?php _e( 'Since 2013, BSG has get licences by law be in form of a limited liability company (PT. Bima Sakti Geotama or PT. BSG) and member of the national association of Indonesian consultant (INKINDO) to be a professional geotechnical and engineering company which provide the most accurate interpretation, geotechnical recommendation of subsurface condition and problem solving against geotechnical problem that included and not limited to slope stability, deep/shallow foundation, Soft Soil Engineering, Ecavation, Earthquake risk, Tunnel, Dam and Seepage problem.', 'ptbsg' ); ?> </p>
            </div>
            <div class="col-md-4">
                <p class="c_p"> <?php _e( 'In activity, BSG has been supported by Engineers and trained technicians and highly experienced who get certified by Indonesian Society for Geotechnical Engineering (ISGE-HATTI). They must doing research, development, and trainee to improve their knowledge so that ensure quality service and accuration result.', 'ptbsg' ); ?> </p>
            </div>
        </div>
    </div>
</div>
<div class="container c_mt50 c_mb50">
    <div class="row">
        <div class="col-md-3">
            <h3><?php _e( 'Supported By', 'ptbsg' ); ?></h3>
        </div>
        <div class="col-md-9">
            <ul class="c_ul">
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/inkindo.jpg" />
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/inkindo.jpg" />
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/inkindo.jpg" />
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/inkindo.jpg" />
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/inkindo.jpg" />
                </li>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/inkindo.jpg" />
                </li>
            </ul>
        </div>
    </div>
</div>        

<?php get_footer(); ?>