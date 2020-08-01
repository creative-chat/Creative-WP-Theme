<?php get_header(); ?>
    
    <!--error section area start-->
    <div class="error_section">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>404</h1>
                        <h2>Sorry, page not found</h2>
                        <p>The page you are looking for does not exist, or is deleted, renamed, temporarily unavailable, etc.</p>
                        <form action="<?php bloginfo('url'); ?>/" method="GET">
                            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search for...">
                            <button type="submit"><i class="icon-magnifier icons"></i></button>
                        </form>
                        <a href="<?php echo get_option('home'); ?>">Back to the homepage</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--error section area end--> 
    
<?php get_template_part( 'footer1' ); ?>