<?php
/*
template name: General page
*/
?>

<?php get_template_part( 'header1' ); ?>
    
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
    
    <section class="about_section"> 
       <div class="container">
            <div class="row">
                <div class="col-12">
                   <figure>
                            
                        <?php
                        if(have_posts()) :
                            while (have_posts()) : the_post(); ?>
                            
                            <?php the_content(); ?>
                            
                            <?php endwhile;
                            else :
                                // echo '<p>No content found</p>';
                            endif;
                        ?>

                    </figure>
                </div>    
            </div>  
        </div> 
    </section>

<?php get_template_part( 'footer1' ); ?>