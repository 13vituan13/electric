<div class="page_noibat">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_status' => 'publish',
        'post_type' => 'post',
        'posts_per_page' => 6,
        'cat' => 6,
        'paged' => $paged // Sử dụng biến $paged để lấy trang hiện tại
    );
    $getposts = new WP_Query($args);
    ?>

    <!-- Đoạn code để hiển thị danh sách bài viết -->
    <div class="wap_item_dv flex wrap"> 
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <!-- Hiển thị thông tin các bài viết -->
            <div class="item_dv">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <p class="sp_img zoom_hinh"> 
                            <?php echo get_the_post_thumbnail(get_the_id(),'full', array('class' => 'thumnail') );?>
                        </p>
                        <div class="info_dichvu">
                            <h3 class="sp_name  catchuoi1"><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <span class="xemct">Xem chi tiết</span>
                        </div>
                    </a>
                </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- Phân trang -->
    <?php
    $total_pages = $getposts->max_num_pages;
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        echo '<div class="pagination paging-sm">';
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'prev_text'    => __('«'),
            'next_text'    => __('»'),
            'current' => $current_page,
            'total' => $total_pages,
        ));
        echo '</div>';
    }
    ?>
</div>        