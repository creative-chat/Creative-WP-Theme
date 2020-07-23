<?php get_template_part( 'header1' ); ?>
    
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>

                        <?php
                        if( is_home()){
                            bloginfo('name');
                        }elseif(is_page()){
                            the_title();
                        }elseif(is_category()){
                            single_cat_title();
                        }elseif(is_tag()){
                            single_tag_title();
                        }elseif(is_author()){
                            the_post();
                            echo '作者：'. get_the_author();
                            rewind_posts();
                        }elseif(is_search()){
                            echo '搜索结果';
                        }elseif(is_day()){
                            echo '档案：' .get_the_date();
                        }elseif(is_month()){
                            echo '档案：' .get_the_date('F Y');
                        }elseif(is_year()){
                            echo '档案：' .get_the_date('Y');
                        }else{
                            echo '档案';
                        }
                        ?>

                        </h3>
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
    <div class="blog_page_section blog_reverse mb-60">
        <div class="container">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-lg-9 col-md-12 right_content">
                    <div class="blog_wrapper">
                        <div class="row">

                            <!-- 归档页面会自动获取当前页和总页数的值 -->
                            <?php if (have_posts()) : while(have_posts()): the_post(); ?>


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
                    
                    <div class="blog_pagination">
                        <div class="pagination">
                            <ul>
                                <?php echo paginate_links( array(
                                    'prev_text'          => __( '<style>.blog_pagination .pagination {     border: 1px solid #ededed; }</style>上一页', '' ),
                                    'next_text'          => __( '<style>.blog_pagination .pagination {     border: 1px solid #ededed; }</style>下一页', '' ),
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