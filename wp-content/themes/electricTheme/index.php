<?php get_header() ?>
    <!-- BANNER -->
    <?php get_template_part('banner') ?>
    <!-- start main content -->
        <div class="main_content clearfix wrap-home">
            <!-- GIỚI THIỆU -->
            <div class="gioithieu">
                <div class="wap_1200 chung_tc clearfix">
                    <div class="noidung_gt">
                        <div class="gach_gt">
                            <p>GIỚI THIỆU VỀ</p>
                            <h2>CÔNG TY KỸ THUẬT ĐIỆN TIẾN PHÁT</h2>
                        </div>
                        <div class="mota_gt">
                            <p style="text-align: justify;">
                                <span class="fz-16">
                                CÔNG TY KỸ THUẬT ĐIỆN TIẾN PHÁT CHUYÊN:
                                </span><br/>
                                <?php
                                $post_id = 275; // ID của bài viết cần lấy nội dung

                                // Lấy thông tin chi tiết của bài viết
                                $content = get_post_field('post_content', $post_id);

                                // Kiểm tra xem bài viết có tồn tại không
                                if ($content) {?>
                                    <?php echo $content; ?>
                                <?php } ?>
                        </div>


                        <p class="gt_xemthem"><a class="w-clear" href="gioi-thieu" title="CÔNG TY KỸ THUẬT ĐIỆN TIẾN PHÁT">Xem chi tiết</a></p>
                    </div>
                    <div class="hinhgt">
                        <div class="img_gioithieu">
                            <a href="gioi-thieu.html" title="CÔNG TY KỸ THUẬT ĐIỆN TIẾN PHÁT">
                                <img class="lazy" 
                                     src="/<?php bloginfo('template_directory') ?>/images/no_image.png" 
                                     data-src="<?php bloginfo('template_directory') ?>/images/slide_gt/sl_gt_01.jpg" alt="" />

                                <img class="lazy w_thumb_slide_bot"
                                     src="/<?php bloginfo('template_directory') ?>/images/no_image.png"
                                     data-src="<?php bloginfo('template_directory') ?>/images/slide_gt/sl_gt_02.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHUYÊN MỤC SẢN PHẨM -->
            <div class="wrap-dichvu-tc">
                <div class="wap_1200 chung_tc">
                    <div class="tieude1">
                        <h2>SẢN PHẨM TẠI <span>TIẾN PHÁT</span></h2>
                        <p></p>
                    </div>
                    <?php get_template_part('partial/product-home') ?>
                </div>
            </div>
            <!-- TIÊU CHÍ -->
            <div class="wap_tieuchi">
                <div class="wap_1200 chung_tc">
                    <div class="chay_db flex">
                        <div class="item_db">
                            <div class="it_db flex">
                                <div class="img_tt">
                                    <a class="hinh_tt flex" title="NHANH CHÓNG">
                                        <img class="lazy" src="<?php bloginfo('template_directory') ?>/images/no_image.png" data-src="<?php bloginfo('template_directory') ?>/images/tieuchi/tc01.png"
                                            alt="NHANH CHÓNG" />
                                    </a>
                                </div>
                                <div class="des_t">
                                    <h3 class="name_tt text-split"><a title="NHANH CHÓNG">NHANH CHÓNG</a></h3>
                                    <div class="des_tt text-split">Nhanh chóng tiếp nhận thông tin. Có mặt nhanh chóng
                                        để giải quyết. Chế độ bảo hành nhanh chóng.</div>
                                </div>
                            </div>
                        </div>
                        <div class="item_db">
                            <div class="it_db flex">
                                <div class="img_tt">
                                    <a class="hinh_tt flex" title="AN TOÀN">
                                        <img class="lazy" src="<?php bloginfo('template_directory') ?>/images/no_image.png" data-src="<?php bloginfo('template_directory') ?>/images/tieuchi/tc02.png"
                                            alt="AN TOÀN" />
                                    </a>
                                </div>
                                <div class="des_t">
                                    <h3 class="name_tt text-split"><a title="AN TOÀN">AN TOÀN</a></h3>
                                    <div class="des_tt text-split">Giải quyết các vấn đề, sự cố hư hỏng đúng kỹ thuật.
                                        Đem lại sự yên tâm tuyệt đối cho khách hàng khi sử dung dịch vụ của TIẾN PHÁT.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_db">
                            <div class="it_db flex">
                                <div class="img_tt">
                                    <a class="hinh_tt flex" title="TIẾT KIỆM">
                                        <img class="lazy" src="<?php bloginfo('template_directory') ?>/images/no_image.png" data-src="<?php bloginfo('template_directory') ?>/images/tieuchi/tc03.png"
                                            alt="TIẾT KIỆM" />
                                    </a>
                                </div>
                                <div class="des_t">
                                    <h3 class="name_tt text-split"><a title="TIẾT KIỆM">TIẾT KIỆM</a></h3>
                                    <div class="des_tt text-split">Làm việc theo bảng giá tránh các vấn đề phát sinh, có
                                        nhiều chính sách ưu đãi. Giúp khách hàng tiết kiệm chi tiêu cho gia đình.</div>
                                </div>
                            </div>
                        </div>
                        <div class="item_db">
                            <div class="it_db flex">
                                <div class="img_tt">
                                    <a class="hinh_tt flex" title="ĐẢM BẢO CHẤT LƯỢNG">
                                        <img class="lazy" src="<?php bloginfo('template_directory') ?>/images/no_image.png" data-src="<?php bloginfo('template_directory') ?>/images/tieuchi/tc04.png"
                                            alt="ĐẢM BẢO CHẤT LƯỢNG" />
                                    </a>
                                </div>
                                <div class="des_t">
                                    <h3 class="name_tt text-split"><a title="ĐẢM BẢO CHẤT LƯỢNG">ĐẢM BẢO CHẤT LƯỢNG</a></h3>
                                    <div class="des_tt text-split">Cam kết kỹ thuật điện đảm bảo chất lượng và dịch vụ bảo
                                        hành dài lâu</div>
                                </div>
                            </div>
                        </div>
                        <div class="item_db">
                            <div class="it_db flex">
                                <div class="img_tt">
                                    <a class="hinh_tt flex" title="KỸ THUẬT CHUYÊN NGHIỆP">
                                        <img class="lazy" src="<?php bloginfo('template_directory') ?>/images/no_image.png" data-src="<?php bloginfo('template_directory') ?>/images/tieuchi/tc05.png"
                                            alt="KỸ THUẬT CHUYÊN NGHIỆP" />
                                    </a>
                                </div>
                                <div class="des_t">
                                    <h3 class="name_tt text-split"><a title="KỸ THUẬT CHUYÊN NGHIỆP">KỸ THUẬT CHUYÊN NGHIỆP</a></h3>
                                    <div class="des_tt text-split">Đội ngũ nhân viên thợ tay nghề cao, chuyên môn cứng
                                        với nhiều năm kinh nghiệm hoạt động kỹ thuật đảm bảo đúng chuyên môn.</div>
                                </div>
                            </div>
                        </div>
                        <div class="item_db">
                            <div class="it_db flex">
                                <div class="img_tt">
                                    <a class="hinh_tt flex" title="HỖ TRỢ NHANH 24/7">
                                        <img class="lazy" src="<?php bloginfo('template_directory') ?>/images/no_image.png" data-src="<?php bloginfo('template_directory') ?>/images/tieuchi/tc06.png"
                                            alt="HỖ TRỢ NHANH 24/7" />
                                    </a>
                                </div>
                                <div class="des_t">
                                    <h3 class="name_tt text-split"><a title="HỖ TRỢ NHANH 24/7">HỖ TRỢ NHANH 24/7</a></h3>
                                    <div class="des_tt text-split">Hỗ trợ tư vấn 24/7 mọi lúc mọi nơi.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HỖ TRỢ -->
            <div class="wap_hotro">
                <div class="wap_1200 chung_tc">
                    <div class="tieude2">
                        <p>Hỗ trợ nhanh: 0911.369.822 ( 24/7 )</p>
                        <h2>Kiểm tra cải tạo nâng cấp hệ thống điện đã có mặt tại</h2>
                    </div>
                    <div class="chay_ht flex">
                        <div class="item_ht">
                            <a href="" target="_blank" title="TP Hồ Chí Minh">
                                <h3 class="name_tt text-split">TP Hồ Chí Minh</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Thành Phố Thủ Đức">
                                <h3 class="name_tt text-split">Thành Phố Thủ Đức</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Quận 9">
                                <h3 class="name_tt text-split">Quận 9</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Bà Rịa Vũng Tàu">
                                <h3 class="name_tt text-split">Quận 7</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Tỉnh Bình Dương">
                                <h3 class="name_tt text-split">Tỉnh Bình Dương</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Tỉnh Long An">
                                <h3 class="name_tt text-split">Tỉnh Long An</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Biên Hòa Đồng Nai">
                                <h3 class="name_tt text-split">Biên Hòa Đồng Nai</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Tỉnh Tây Ninh">
                                <h3 class="name_tt text-split">Tỉnh Tây Ninh</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="KCN Phú Tài Quy Nhơn">
                                <h3 class="name_tt text-split">KCN Phú Tài Quy Nhơn</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="Thành Phố Qui Nhơn">
                                <h3 class="name_tt text-split">Thành Phố Qui Nhơn</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHUYÊN MỤC CÔNG TRÌNH -->
            <div class="wap_hinhanh">
                <div class="wap_1200 chung_tc">
                    <div class="tieude1">
                        <h2>CÔNG TRÌNH TIÊU BIỂU <span>TIẾN PHÁT</span></h2>
                    </div>
                    <?php get_template_part('partial/construction-home') ?>
                </div>
            </div>
            <!-- CÂU HỎI THƯỜNG GẶP -->
            <div class="wap-dangky-cauhoi">
                <div class="wap_1200 chung_tc">
                    <div class="wap-tin-video flex ">
                        <div class="left-dk">
                            <div class="wap_dknt flex">
                                <div class="dknt">
                                    <div class="tieude_dk">
                                        <h2>Đăng ký nhận tin</h2>
                                        <p>Hãy điền thông tin bên dưới để được chúng tôi liên hệ sớm nhất !!!</p>
                                    </div>
                                    <div class="frm_lienhe">
                                        <div name="frm" class="frm clearfix dkdknthai">
                                            <?php echo do_shortcode('[contact-form-7 id="122" title="Contact Form Trang Chủ"]'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-dk">
                            <div class="cauhoi_tg">
                                <div class="tieude_ch">
                                    <h2>một số câu hỏi thường gặp</h2>
                                    <p></p>
                                </div>
                                <div id="accordion" class="accordion">
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>01. Công ty kỹ thuật điện TIẾN PHÁT cung cấp những dịch vụ gì?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class="">Kỹ thuật điện cho tất cả dòng máy điện công nghiệp nhẹ và nặng, Thi
                                                công lắp đặt hệ thống nhà xưởng..., Thiết kế đấu tủ bù công suất phản
                                                kháng bù cosphi, Cân bằng 3 pha cho các cơ sở sản xuất., Làm tủ điện
                                                theo yêu cầu khách hàng, Nâng cấp lên chương trình máy PLC, biến tần,
                                                servo,..., Kỹ thuật điện di dời máy sản xuất, Kỹ thuật điện máy ép thổi chai nhựa,
                                                Kỹ thuật điện máy ó keo nhựa, Kỹ thuật điện máy dập, Đấu tụ bù cosphi, Đấu tủ điều
                                                khiển cho các dòng máy công nghiệp, Xử lý hệ thống thủy lực cho ngành
                                                công nghiệp nặng, Di dời đấu nối điện cho máy, Xử lý sự cố quá tải chập
                                                điện nhà máy xưởng sản xuất, Xử lý hệ thống điện lò hơi áp suất,...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>02. Hệ thống tủ điện bao lâu mới kiểm tra bảo trì 1 lần?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class="">Khi dây dẫn bị đứt do chạm chập, hay đứt dây thì phía sau điểm
                                                bị đứt mất điện, ta dùng đồng hồ von đo kiểm tra xem dây nào bị đứt bằng
                                                cách: ngắt toàn bộ mạng điện, cách ly toàn bộ các thiết bị điện ra khỏi
                                                mạng điện, dùng đồng hồ để ở chế độ đo ngắn mạch, đo một cực lần lược
                                                cuối mạng điện ( nơi mất điện ) với lần lượt một cực đầu nguồn điện nếu
                                                như cực nào kim không lên thì cực đó bị đứt ta kiểm tra và xử lý nối lại
                                                dây dẫn.</div>
                                        </div>
                                    </div>
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>03. Vì sao điện nhà của bạn hay bị chập điện nhảy cầu dao?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class=""> Khi hệ thống điện nhà bạn mất mát hay mất lửa thì thiết bị
                                                điện sẽ không hoạt động, ta kiểm tra như sau:
                                                - Nếu như mất dây pha hay dây ( lửa ) ta có thể dùng bút thử điện đo.
                                                nếu như bút thử điện không sáng thì chứng tỏ hệ thống điện nhà bạn mất
                                                lửa
                                                - Nếu như hệ thống điện nhà bạn bị mất mát ( dây trung tính) ta dùng
                                                đồng hồ von để sang chế độ đo điện áp, nếu như điện áp không lên, nhưng
                                                khi bỏ bút thử điện vào thì đèn sáng chứng tỏ hệ thống điện nhà bạn bị
                                                mất mát.</div>
                                        </div>
                                    </div>
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>04. Muốn bảo vệ chống điện giật tại nhà thì bạn nên làm gì?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class="">Khi dây dẫn bị đứt do chạm chập, hay đứt dây thì phía sau điểm
                                                bị đứt mất điện, ta dùng đồng hồ von đo kiểm tra xem dây nào bị đứt bằng
                                                cách: ngắt toàn bộ mạng điện, cách ly toàn bộ các thiết bị điện ra khỏi
                                                mạng điện, dùng đồng hồ để ở chế độ đo ngắn mạch, đo một cực lần lược
                                                cuối mạng điện ( nơi mất điện ) với lần lượt một cực đầu nguồn điện nếu
                                                như cực nào kim không lên thì cực đó bị đứt ta kiểm tra và xử lý nối lại
                                                dây dẫn.</div>
                                        </div>
                                    </div>
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>05. Dịch vụ kiểm tra sửa chữa nâng cấp hệ thống điện tại Tiến Phát có giá thành và chất lượng tốt không?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class=""> Khi hệ thống điện nhà bạn mất mát hay mất lửa thì thiết bị
                                                điện sẽ không hoạt động, ta kiểm tra như sau:
                                                - Nếu như mất dây pha hay dây ( lửa ) ta có thể dùng bút thử điện đo.
                                                nếu như bút thử điện không sáng thì chứng tỏ hệ thống điện nhà bạn mất
                                                lửa
                                                - Nếu như hệ thống điện nhà bạn bị mất mát ( dây trung tính) ta dùng
                                                đồng hồ von để sang chế độ đo điện áp, nếu như điện áp không lên, nhưng
                                                khi bỏ bút thử điện vào thì đèn sáng chứng tỏ hệ thống điện nhà bạn bị
                                                mất mát.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHUYÊN MỤC TIN TỨC -->
            <div class="wap-tintuc-tc">
                <div class="wap_1200 chung_tc">
                    <div class="tieude1">
                        <h2>TIN TỨC</h2>
                    </div>
                    <?php get_template_part('partial/news-home') ?>
                </div>
            </div>
            <!-- VIDEO -->                    
            <div class="wrap-video-tc">
                <div class="wap_1200 chung_tc">
                    <div class="tieude1">
                        <h2>video clip</h2>
                        <p></p>
                    </div>
                    <?php get_template_part('partial/video-home') ?>
                </div>
            </div>
        </div>
    <!-- end main content -->
                
<?php get_footer() ?>
    
