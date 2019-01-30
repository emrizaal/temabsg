<?php
get_header( 'carousel' ); ?>

    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'anti' ); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/image/logo-bsg.png">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#"><?php _e( 'HOME', 'anti' ); ?></a>
                            </li>
                            <li>
                                <a href="#about"><?php _e( 'ABOUT US', 'anti' ); ?></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php _e( 'SERVICES', 'anti' ); ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#"><?php _e( 'Action', 'anti' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e( 'Another action', 'anti' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e( 'Something else here', 'anti' ); ?></a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">
                                        <?php _e( 'Nav header', 'anti' ); ?>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e( 'Separated link', 'anti' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e( 'One more separated link', 'anti' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#about"><?php _e( 'RESEARCH', 'anti' ); ?></a>
                            </li>
                            <li>
                                <a href="#about"><?php _e( 'PROJECTS', 'anti' ); ?></a>
                            </li>
                            <li>
                                <a href="#contact"><?php _e( 'CONTACT US', 'anti' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Carousel
================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="http://pinegrow.com/placeholders/img4.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php _e( 'Example headline.', 'anti' ); ?></h1>
                        <p><?php _e( 'Note: If you\'re viewing this page via a', 'anti' ); ?> <code><?php _e( 'file://', 'anti' ); ?></code> <?php _e( 'URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.', 'anti' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="http://pinegrow.com/placeholders/img3.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php _e( 'Another example headline.', 'anti' ); ?></h1>
                        <p><?php _e( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'anti' ); ?></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php _e( 'Learn more', 'anti' ); ?></a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="http://pinegrow.com/placeholders/img8.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php _e( 'One more for good measure.', 'anti' ); ?></h1>
                        <p><?php _e( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'anti' ); ?></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php _e( 'Browse gallery', 'anti' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'anti' ); ?></span> </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'anti' ); ?></span> </a>
    </div>
    <!-- /.carousel -->
    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="http://pinegrow.com/placeholders/img6.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2><?php _e( 'Heading', 'anti' ); ?></h2>
                <p><?php _e( 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', 'anti' ); ?></p>
                <p><a class="btn btn-default" href="#" role="button"><?php _e( 'View details &raquo;', 'anti' ); ?></a></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="http://pinegrow.com/placeholders/img5.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2><?php _e( 'Heading', 'anti' ); ?></h2>
                <p><?php _e( 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.', 'anti' ); ?></p>
                <p><a class="btn btn-default" href="#" role="button"><?php _e( 'View details &raquo;', 'anti' ); ?></a></p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="http://pinegrow.com/placeholders/img1.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2><?php _e( 'Heading', 'anti' ); ?></h2>
                <p><?php _e( 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'anti' ); ?></p>
                <p><a class="btn btn-default" href="#" role="button"><?php _e( 'View details &raquo;', 'anti' ); ?></a></p>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php _e( 'First featurette heading.', 'anti' ); ?> <span class="text-muted"><?php _e( 'It\'ll blow your mind.', 'anti' ); ?></span></h2>
                <p class="lead"><?php _e( 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'anti' ); ?></p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img6.jpg" alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading"><?php _e( 'Oh yeah, it\'s that good.', 'anti' ); ?> <span class="text-muted"><?php _e( 'See for yourself.', 'anti' ); ?></span></h2>
                <p class="lead"><?php _e( 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'anti' ); ?></p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img7.jpg" alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php _e( 'And lastly, this one.', 'anti' ); ?> <span class="text-muted"><?php _e( 'Checkmate.', 'anti' ); ?></span></h2>
                <p class="lead"><?php _e( 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'anti' ); ?></p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img9.jpg" alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#"><?php _e( 'Back to top', 'anti' ); ?></a></p>
            <p><?php _e( '&copy; 2014 Company, Inc. &middot;', 'anti' ); ?> <a href="#"><?php _e( 'Privacy', 'anti' ); ?></a> &middot; <a href="#"><?php _e( 'Terms', 'anti' ); ?></a></p>
        </footer>
    </div>        

<?php get_footer( 'carousel' ); ?>