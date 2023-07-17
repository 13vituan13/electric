<div class="wap-tin-video flex">
    <div class="left-intro">
        <div class="box_tintuc_tc flex">
            <?php
            $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' =>  'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
                        'posts_per_page' => 2, // Số lượng bài viết hiển thị mỗi trang
                        'cat' => 1, // Lấy bài viết trong chuyên mục có id là 10
                    );
            $getposts = new WP_Query($args);
            while ($getposts->have_posts()) : $getposts->the_post();?>
            <div class="item2 clearfix">
                <a class="sp_img img_tt zoom_hinh" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">.
                    <?php echo get_the_post_thumbnail(get_the_id(),'full', array('class' => 'lazy') );?>
                </a>
                <div class="info_bv">
                    <p class="ngay">
                        <?php echo get_the_date('d - m - Y'); ?>
                    </p>
                    <h3 class="tin_name catchuoi1">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <p class="mota_tt catchuoi3">
                        <?php the_excerpt(); ?>
                    </p>
                    <a class="xemct" href="<?php the_permalink(); ?>" title="Xem chi tiết">Xem chi tiết >></a>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
    <div class="right-intro">
        <div class="slick_tin">
            <?php
            $args2 = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' =>  'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
                        'posts_per_page' => 9, // Số lượng bài viết hiển thị mỗi trang
                        'cat' => 1, // Lấy bài viết trong chuyên mục có id là 10
                        'offset' => 2 // // Bỏ đi 2 bài viết đầu tiên
            );
            $getposts = new WP_Query($args2);
            while ($getposts->have_posts()) : $getposts->the_post();?>
            <div class="item_bv clearfix">
                <div class="it_bv flex">
                    <p class="ngay_bv">
                        <span>
                            <?php echo get_the_date('d'); ?>
                        </span> tháng
                        <?php echo get_the_date('m'); ?>
                    </p>
                    <div class="if_bv">
                        <h3 class="tin_name_bv">
                            <a class="" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                            <p class="mota_bv">
                                <?php the_excerpt(); ?>
                            </p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</div>