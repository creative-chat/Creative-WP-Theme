<?php get_template_part( 'header1' ); ?>
    
    <!--slider area start-->
    <section class="slider_section slider_s_two color_two mb-95">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo esc_url(get_template_directory_uri()); ?>/static/images/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2>Created by a software architect</h2>
                                <h1>WordPress course</h1>
                                <p>
                                    Getting started with zero foundation,<br/>
                                    Develop blog theme, WooCommerce theme
                                </p>
                                <a href="https://www.udemy.com/course/fast-learn-wordpress-and-build-up-your-own-online-website/" target="_blank">Read more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo esc_url(get_template_directory_uri()); ?>/static/images/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2>side tables</h2>
                                <h1>Furniture Design</h1>
                                <p>
								Modern Designer Tables With A Single Leg
							     </p>
                                <a href="shop.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
    
    <!--product area start-->
    <div class="product_area color_two mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Recommended products </h2>
                       <p>	<a href="">Read more</a></p>
                    </div>
                </div>
            </div> 
            <div class="row">
               <div class="product_carousel product_column4 owl-carousel">

                    <?php global $wp_query, $post, $woocommerce,$query_string;
                    $args = array(
                        'tax_query' => array(
                        'relation' =>'OR',
                            array(
                                'taxonomy' =>'product_cat', // The parameter here is specified as the product catalog
                                'field' =>'id', // call based on product catalog id
                                'terms' => array( 20 ), // 20 is the product catalog id
                            ),
                        ),
                        'posts_per_page' => 5, // Total number of posts to be called
                        'post_status' =>'publish', // The called post is already published
                        'post_type' =>'product', // The type of the call is product (product)
                        'no_found_rows' => 1,
                        'order' =>'desc', // latest-asc, earliest-desc
                        'meta_query' => array() // You can also use post meta to query, this is the same as used in wordpress loop
                    );
                    //The above are the parameters of the loop
                    $query = new WP_Query( apply_filters('woocommerce_products_widget_query_args', $args) );//Establish a loop query
                    //Start loop
                    if($query->have_posts()):
                    while ($query->have_posts()) :$query->the_post(); ?>

                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="<?php the_permalink(); ?>">
                                            <!-- Picture thumbnail -->
                                            <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
                                        </a>
                                    </div>
                                    <figcaption class="product_content">

                                        <h3 class="product_name center">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        
                                        <div class="price_box center"> 
                                            <span class="old_price">
                                                <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
                                            </span>

                                            <div class="center">
                                                <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                            </div>
                                        </div>
                                        
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        
                    <?php endwhile; // end the loop
                        wp_reset_query(); // Clear the loop
                    endif;
                    ?>
                   
               </div>
           </div>   
        </div> 
    </div>
    <!--product area end-->

    <!--product area start-->
    <div class="product_area color_two mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Latest products </h2>
                       <p>  <a href="">Read more</a></p>
                    </div>
                </div>
            </div> 
            <div class="row">
               <div class="product_carousel product_column4 owl-carousel">
                   
                <?php
                $query = new WP_Query( array(
                    // 'post_type'      => 'post',
                    'post_type'      => 'product',
                    'posts_per_page' => '5',
                    'order'          => 'desc', // Latest - asc, earliest - desc
                  ));
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();?>

                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="<?php the_permalink(); ?>">
                                        <!-- Picture thumbnail -->
                                        <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
                                    </a>
                                </div>
                                <figcaption class="product_content">

                                    <h3 class="product_name center">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    
                                    <div class="price_box center"> 
                                        <span class="old_price">
                                            <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
                                        </span>

                                        <div class="center">
                                            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                        </div>
                                    </div>
                                    
                                </figcaption>
                            </figure>
                        </article>
                    </div>

                <?php endwhile; ?>

                <?php 
                else :
                    echo '<p>Sorry, no content!</p>';
                endif; ?>
               
               </div>
           </div>   
        </div> 
    </div>
    <!--product area end-->
    
    <!--banner fullwidth area start-->
    <div class="banner_fullwidth mb-95">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/banner5.jpg" alt="">
        <div class="banner_fullwidth_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="banner_full_text">
                            <h2>New</h2>
                            <h3>Luxury Collection</h3>
                            <p>As the name, design and versatility of the piece indicates, it is a city design. Upholstered in neutral tones, yet with a modern pattern that does not go unnoticed</p>
                            <a href="shop.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--banner fullwidth area end-->
    
    <!--product area start-->
    <div class="categories_product_area color_two  mb-92">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Latest posts </h2>
                       <p>	<a href="">Read more</a></p>
                    </div>
                </div>
            </div> 
            <div class="row">
               <div class="product_carousel product_column4 owl-carousel">

                    <?php
                    $query = new WP_Query( array(
                        'post_type'      => 'post',
                        // 'post_type'      => 'product',
                        'posts_per_page' => '5',
                        'order'          => 'desc', // Latest - asc, earliest - desc
                      ));
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();?>

                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    </div>
                                    <figcaption class="blog_content">
                                       <h4 class="post_title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                                       <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                       <footer class="blog_footer">
                                            <a href="<?php the_permalink(); ?>">Read more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>

                    <?php endwhile; ?>

                    <?php 
                    else :
                        echo '<p>Sorry, no content!</p>';
                    endif; ?>
                    
               </div>
           </div>   
        </div> 
    </div>
    <!--product area end-->
    
     <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/banner6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/banner7.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--shipping area start-->
    <div class="shipping_area shipping_two">
        <div class="container">
            <div class="shipping_two_inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/shipping5.png" alt="">
                            </div>
                            <div class="shipping_content">
                               <h3>Delivery info</h3>
                                <p>From then, delivery is generally within 2-10 days, depending on your location.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/shipping6.png" alt="">
                            </div>
                            <div class="shipping_content">
                               <h3>Free Returns</h3>
                                <p>Not the right fit? No worries. We will arrange pick up and a full refund within 7 days.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/shipping7.png" alt="">
                            </div>
                            <div class="shipping_content">
                               <h3>8 years warranty</h3>
                                <p>That is why we have got you covered for up to 8 years. Warranty periods vary depending.</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
        </div>
    </div>
    <!--shipping area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ion-android-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/productbig5.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/productbig6.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/productbig7.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/productbig8.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/product21.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/product22.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/product23.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/static/picture/product25.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price" >$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- modal area end-->

<?php get_template_part( 'footer1' ); ?>