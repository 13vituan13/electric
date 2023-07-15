<div class="page_noibat">
    <div class="wap_item_dv flex wrap"> 
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // Trang hiện tại
        $args = array (
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' =>  'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
                        'posts_per_page' => 6, // Số lượng bài viết hiển thị mỗi trang
                        'cat' => 11, // Lấy bài viết trong chuyên mục có id là 10
                        // 'paged' => $paged // Sử dụng biến $paged để lấy trang hiện tại
                        // 'offset' => 1, // Bỏ đi 1 bài viết đầu tiên
                    );
        $getposts = new WP_Query($args);
        while ($getposts->have_posts()) : $getposts->the_post();?>
            <div class="item_dv">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <p class="sp_img zoom_hinh"> 
                        <?php echo get_the_post_thumbnail(get_the_id(),'full', array('class' => 'thumnail') );?>
                    </p>
                    <div class="info_dichvu">
                        <h3 class="sp_name  catchuoi1"><?php the_title(); ?> - <?php echo get_the_date(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <span class="xemct">Xem chi tiết</span>
                    </div>
                </a>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>        