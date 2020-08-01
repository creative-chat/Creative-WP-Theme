 <!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<!-- CSS 
========================= -->
<!--bootstrap min css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/bootstrap.min.css">
<!--owl carousel min css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/owl.carousel.min.css">
<!--slick min css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/slick.css">
<!--magnific popup min css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/magnific-popup.css">
<!--font awesome css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/font.awesome.css">
<!--ionicons css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/ionicons.min.css">
<!--simple line icons css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/simple-line-icons.css">
<!--animate css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/animate.css">
<!--jquery ui min css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/jquery-ui.min.css">
<!--slinky menu css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/slinky.menu.css">
<!--plugins css-->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/plugins.css">

<!-- Main Style CSS -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/style.css">

<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/static/css/style_hc.css">

<!--modernizr min js here-->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/static/js/modernizr-3.7.1.min.js"></script>

</head>

<body>

<!--header area start-->

<!--offcanvas menu area start-->
<div class="off_canvars_overlay">
            
</div>
<div class="offcanvas_menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                    </div>
                    <div class="header_contact_info">
                        <ul>
                            <li><a href="tel:(+test)123456789"><i class="icon-call-in"></i> (+test)123456789</a></li>
                           <li><a href="mailto:http://1.envato.market/9LbxW"><i class="icon-envelope"></i> demo@email.com</a></li>

                        </ul>
                    </div>
                    <div class="language_currency">
                            <ul>
                                <li><a href="#"><i class="icon-shuffle"></i> Compare (3)</a></li>
                                <li class="account"><a href="#"><i class="icon-user"></i>  Setting <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#"> USD $ <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    <div id="menu" class="text-left ">
                        <!-- Mobile start -->
                        <?php
                        wp_nav_menu( array(
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'offcanvas_main_menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'item_spacing'    => 'preserve',
                            'depth'           => 0,
                            'walker'          => '',
                            'theme_location'  => '',
                          ) );
                        ?>
                        <!-- Mobile end -->
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<header>
    <div class="main_header header_two color_two">
        <div class="header_top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="header_contact_info">
                            <ul>
                                <li><a href="tel:(+test)123456789"><i class="icon-call-in"></i> (+test)123456789</a></li>
                               <li><a href="mailto:http://1.envato.market/9LbxW"><i class="icon-envelope"></i> demo@email.com</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7">
                        <div class="language_currency text-right">
                            <ul>
                                <?php if ( is_user_logged_in() ) { ?>
                                    <li><a href="<?php echo wp_logout_url( home_url(add_query_arg(array(),$wp->request)) ); ?>" ><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                                <?php } else { ?>
                                    <li><a href="<?php echo get_option('home'); ?>/wp-login.php?action=register"> <i class="fa fa-edit"></i> <span>Register</span></a></li>
                                    <li><a href="<?php echo get_option('home'); ?>/my-account/"><i class="fa fa-sign-in"></i> <span>Login</span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle sticky-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 offset-md-5 offset-lg-0 col-5 offset-3 col-sm-5">
                        <div class="logo">
                            <a href="<?php echo get_option('home'); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8">                
                        <!--main menu start-->
                        <div class="main_menu">
                            <div class="menu_header">
                                <!-- PC start -->
                                <?php 
                                wp_nav_menu( array(
                                    'menu'            => '',
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'drop-down-menu',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'item_spacing'    => 'preserve',
                                    'depth'           => 0,
                                    'walker'          => '',
                                    'theme_location'  => 'primary',
                                  ) );
                                ?>
                                <!-- PC end -->
                            </div>
                        </div>
                        <!--main menu end-->
                    </div> 
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                        <div class="header_account_area">
                            <div class="header_account_list search_list">
                                <a href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                <div class="dropdown_search">
                                    <form action="<?php bloginfo('url'); ?>/" method="GET">
                                        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="搜索 ...">
                                        <button type="submit"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header_account_list  mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="icon-bag"></i>

                                </a>

                                <!--mini cart start-->
                                <div class="mini_cart">

                                    <ul>
                                        <li class="">
                                            <a class="cart-contents"></a>
                                        </li>
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="widget_shopping_cart_content"></div>
                                            </div>        
                                        </li>
                                    </ul>

                                    
                                </div>
                                <!--mini cart end-->
                           </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>
    </div> 
</header>
