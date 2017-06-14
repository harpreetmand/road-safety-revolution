<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

        <!-- Open Graph data -->
        <meta property="og:title" content="Join the Road Safety Revolution" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://RoadSafetyRevolution.com/" />
        <meta property="og:image" content="http://example.com/image.jpg" />
        <meta property="og:description" content="Join the Road Safety Revolution today. Thomson, Rogers wants to help make our streets safer for cyclists and everyone else. Change is long overdue. #RoadSafetyRevolution" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->

			<div class="headerImage">
				<div class="overlay"></div>
			</div>

		    <!--</?php echo wp_nav_menu( 'nav-menu' ); ?>-->
            <nav class="navbar navbar-default marb7" role="navigation">
                <div class="container">        
                <div class="container-fluid">
                    <div class="phoneContainer">
                        <div class="phoneNumber">
                            FOR INFO<br/>
                            <span class="yellow"><a href="tel://1-877-565-8264">1-877-565-8264</a></span>
                        </div>
                    </div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                ROAD<br/>
                                <span class="yellow">SAFETY</span><br/>
                                REVOLUTION<br/>
                        </a>
                    </div>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'nav-menu',
                                'depth'             => 2,
                                'container'         => true,
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav collapse navbar-collapse',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker())
                            );
                        ?>
                    </div>
                </div>
            </nav>
   
