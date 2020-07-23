<?php
/*
template name: 博客 / Blog
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
                            <li><a href="<?php echo get_option('home'); ?>">首页</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--blog area start-->
    <div class="blog_page_section blog_reverse mb-60 mb-80">
        <div class="container">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-lg-9 col-md-12 right_content">
                    <div class="blog_wrapper">
                        <div class="row">
                            
                            <!-- 在页面上搜索显示文章数量，需要额外获取当前页和总页数的值 -->
                            <?php
                            $current_page = max(1, get_query_var('paged')); //当前第几页

                            //查询参数
                            $args = array_filter(array(
                                'post_type' => 'post',
                                'ignore_sticky_posts' =>  1 ,
                                'posts_per_page' => 3,
                                'paged' => $current_page, //当前页
                                // 'orderby' => 'title',
                                // 'order' => 'ASC',
                            ));

                            //开始查询
                            $query = new WP_Query($args);

                            $total_pages = $query->max_num_pages;  //总共多少页

                            if ($query->have_posts()) :
                                while ($query->have_posts()):
                                $query->the_post();

                                ?>

                                    <div class="col-lg-4 col-md-6">
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
                                                        <a href="<?php the_permalink(); ?>">阅读更多</a>
                                                    </footer>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>

                                <?php endwhile; ?>

                            <?php 
                            else :
                                echo '<div class="no_data_text">抱歉，没有内容！</div>';
                            endif; ?>
                            
                        </div>
                    </div>
                    <!--blog pagination area start-->
                    
                    <?php 
                    if($total_pages == 1)
                    {
                        echo '<style>.blog_pagination .pagination { border: 1px solid #fff; }</style>';
                    }
                    ?>
                    
                    <div class="blog_pagination">
                        <div class="pagination">
                            <ul>
                                <?php echo paginate_links( array(
                                    'prev_text'          => __( '<style>.blog_pagination .pagination {     border: 1px solid #ededed; }</style>上一页', '' ),
                                    'next_text'          => __( '<style>.blog_pagination .pagination {     border: 1px solid #ededed; }</style>下一页', '' ),
                                    'screen_reader_text'  => null,
                                    'total' => $total_pages,  //总页数
                                    'current' => $current_page, //当前页数
                                ) ); ?>
                            </ul>
                        </div>
                    </div>
                    <!--blog pagination area end-->
                </div>  
                
            </div>
        </div>
    </div>
    <!--blog area end-->
    
<?php get_template_part( 'footer1' ); ?>