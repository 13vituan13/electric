<div class="chay_ha flex">
    <?php
    $args = array(
                    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                    'post_type' =>  'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
                    'posts_per_page' => 8, // Số lượng bài viết hiển thị mỗi trang
                    'cat' => 8, // Lấy bài viết trong chuyên mục có id là 10
                    // 'paged' => $paged // Sử dụng biến $paged để lấy trang hiện tại
                    // 'offset' => 1, // Bỏ đi 1 bài viết đầu tiên
                );
    $getposts = new WP_Query($args);
    while ($getposts->have_posts()) : $getposts->the_post();?>
    <div class="item_ha">
        <div class="img_tt zoom_hinh">
            <a class="hinh_tt" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php echo get_the_post_thumbnail(get_the_id(),'full', array('class' => 'lazy') );?>
            </a>
        </div>
        <div class="des_t flex">
            <h3 class="name_tt text-split">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata();?>
</div>
<p class="ha_xemthem"><a class="w-clear" href="chuyen-muc/cong-trinh" title="Xem tất cả">Xem tất cả</a></p>