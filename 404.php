<?php get_header(); ?>
    
    <!--error section area start-->
    <div class="error_section">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>404</h1>
                        <h2>抱歉，找不到页面</h2>
                        <p>您要查找的页面不存在，或者被删除，改名，暂时不可用等等。</p>
                        <form action="<?php bloginfo('url'); ?>/" method="GET">
                            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="搜索...">
                            <button type="submit"><i class="icon-magnifier icons"></i></button>
                        </form>
                        <a href="<?php echo get_option('home'); ?>">回到首页</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--error section area end--> 
    
<?php get_template_part( 'footer1' ); ?>