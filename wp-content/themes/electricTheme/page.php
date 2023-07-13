<?php get_header() ?>
<!-- start main content -->
<div class="main_content clearfix ">
            <div class="tieude_link">
                <a class="text-1" href="">Trang chủ</a>
                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                <a class="text-2"><?php the_title() ?></a>
            </div>
            <div class="box_container pd50">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="tieude_giua"><?php the_title() ?></div>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>                 
                <?php endwhile;?>
            <?php endif; ?>
            </div>
        </div>
        <!-- end main content -->
<?php get_footer() ?>