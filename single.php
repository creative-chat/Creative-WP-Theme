<?php get_header(); ?>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f0aa81ee9f145001203b9dd&product=inline-share-buttons' async='async'></script>
    
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3><?php the_title(); ?></h3>
                        <ul>
                            <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--blog body area start-->
    <div class="blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 right_content">
                    <!--blog grid area start-->
                    <div class="blog_wrapper blog_wrapper_details">
                        <article class="single_blog">
                            <figure>
                               <div class="post_header">
                                   <h3 class="post_title"><?php the_title(); ?></h3>
                                    <div class="blog_meta">   
                                       <p>

                                        <?php
                                        the_post(); // queue first post
                                        $author_id = get_the_author_meta('ID');
                                        $curauth = get_user_by('ID', $author_id);
                                        $user_nicename = $curauth->user_nicename;
                                        $display_name = $curauth->display_name;
                                        rewind_posts(); // rewind the loop
                                        ?>

                                        <a href="<?php echo get_author_posts_url($author_id, $user_nicename); ?>"><?php echo $display_name; ?></a> in <?php the_time('j/n/Y, G:i:s'); ?> Publish
                                         / Category:
                                        <?php
                                        $categories = get_the_category();
                                        $separator = ", ";
                                        $output ='';

                                        if($categories){
                                            foreach ($categories as $category){
                                                $output .='<a href="'. get_category_link($category->term_id).'">'. $category->cat_name.'</a>'. $separator;
                                            }
                                            echo trim($output, $separator);
                                        }
                                        ?>
                                         / <i class="fa fa-fw fa-eye"></i> View: <?php get_post_views($post -> ID); ?>
                                        </p>                                   
                                    </div>
                                </div>
                                <div class="blog_d_thumb">
                                   <img src="static/picture/blog-big1.jpg" alt="">
                               </div>
                               <figcaption class="blog_content">
                                    <div class="post_content">
                                        <?php
                                        if(have_posts()) :
                                            while (have_posts()) : the_post(); ?>
                                            
                                            <?php the_content(); ?>
                                            
                                            <?php endwhile;
                                            else :
                                                // echo '<p>No content found</p>';
                                            endif;
                                        ?>
                                    </div>
                                    <div class="entry_content">
                                        <div class="post_meta">
                                            <span><?php the_tags(); ?></span>
                                        </div>

                                        <div class="social_sharing">
                                            <p>Share:</p>
                                            <div class="sharethis-inline-share-buttons"></div>
                                        </div>
                                    </div>
                               </figcaption>
                            </figure>
                        </article>
                        <div class="related_posts">
                           <h3>Related posts</h3>
                            <div class="row">

                                <?php
                                global $post;
                                $cats = wp_get_post_categories($post->ID);
                                if ($cats) {
                                    $args = array(
                                        'category__in' => array( $cats[0] ),
                                        'post__not_in' => array( $post->ID ),
                                        'showposts' => 3,
                                        'caller_get_posts' => 1
                                    );
                                    query_posts($args);
                                    if (have_posts()) {
                                        while (have_posts()) {
                                          the_post(); update_post_caches($posts); ?>

                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <article class="single_related">
                                                <figure>
                                                    <div class="related_thumb">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_post_thumbnail(); ?>
                                                        </a>
                                                    </div>
                                                    <figcaption class="related_content">
                                                       <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                       <div class="blog_meta">                                        
                                                            <span class="author">Publish: <a href="<?php echo get_author_posts_url($author_id, $user_nicename); ?>"><?php echo $display_name; ?></a> / </span>
                                                            <span class="meta_date"> <?php the_time('j/n/Y, G:i:s'); ?> </span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>

                                        <?php
                                        }
                                    }
                                    else { ?>
                                    * No related posts
                                    <?php }
                                    wp_reset_query();
                                }
                                else { ?>
                                  * No related posts
                                <?php }
                                ?>

                            </div>
                        </div> 
                        <div class="comments_form">
                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>   
                        </div>
                    </div>
                    <!--blog grid area start-->
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <!--blog section area end-->
    
<?php get_template_part( 'footer1' ); ?>