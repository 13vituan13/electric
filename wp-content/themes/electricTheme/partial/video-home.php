<div class="slick_phongvip">
    <?php
    $args = array(
        'post_type' => 'video',
        'posts_per_page' => 6, // Số lượng bài viết hiển thị trên trang chủ
    );

    $video_query = new WP_Query($args);

    while ($video_query->have_posts()) : $video_query->the_post();
        // Lấy nội dung bài viết
        $content = get_the_content();
        
        // Sử dụng preg_match để trích xuất URL YouTube từ khối wp:embed
        preg_match('/wp:embed[^"]+"url":"(.*?)"/', $content, $matches);
        if (isset($matches[1])) {
            $youtube_url = esc_url($matches[1]);
            $thumbnail_url = get_youtube_thumbnail($youtube_url); // Lấy ảnh thumbnail từ URL YouTube
        } else {
            $youtube_url = ''; // Nếu không tìm thấy URL, gán giá trị rỗng
        }
    ?>
    <div class="item_tin">
        <a data-fancybox href="<?php echo $youtube_url; ?>">
            <p class="sp_img zoom_hinh"><img src="<?php echo $thumbnail_url; ?>" /></p>
            <h3 class="vd_name"><span class="tdt">
                    <?php the_title(); ?>
                </span></h3>
        </a>
        </a>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>