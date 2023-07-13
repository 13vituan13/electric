<div class="page_noibat">
    <div class="wap_item_dv flex wrap">  
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="item_dv">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <p class="sp_img zoom_hinh"> 
                            <?php echo get_the_post_thumbnail(get_the_id(),'full', array('class' => 'thumnail') );?>
                        </p>
                        <div class="info_dichvu">
                            <h3 class="sp_name  catchuoi1"><?php the_title(); ?> - <?php echo get_the_date(); ?></h3>
                            <!-- <p><?php the_excerpt(); ?></p> -->
                            <span class="xemct">Xem chi tiết</span>
                        </div>
                    </a>
                </div>
            <?php endwhile; else:  ?>
	            <p>Chưa có bài viết</p>
        <?php endif; ?>
    </div>
    
        <?php if(paginate_links()!='') {?>
            <div class="paging-sm">
                <?php
                global $wp_query;
                $big = 999999999; // Số lớn đại diện cho số trang cực lớn
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'prev_text'    => __('«'),
                    'next_text'    => __('»'),
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages
                    ) );
                ?>
            </div>
        <?php } ?>
</div>    
  
                 