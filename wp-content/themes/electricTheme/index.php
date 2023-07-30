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
                                        <i class="fa-solid fa-gauge-high icon-tc"></i>
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
                                        <i class="fa-solid fa-shield-heart icon-tc"></i>
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
                                    <i class="fa-solid fa-piggy-bank icon-tc"></i>
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
                                    <i class="fa-solid fa-star icon-tc"></i>
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
                                    <i class="fa-solid fa-user-gear icon-tc"></i>
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
                            <a href="" target="_blank" title="TP THỦ ĐỨC">
                                <h3 class="name_tt text-split">TP THỦ ĐỨC</h3>
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
                            <a href="" target="_blank" title="QUẬN 5">
                                <h3 class="name_tt text-split">QUẬN 5</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="QUẬN 12">
                                <h3 class="name_tt text-split">QUẬN 12</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="HUYỆN CỦ CHI">
                                <h3 class="name_tt text-split">HUYỆN CỦ CHI</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="HUYỆN BÌNH CHÁNH">
                                <h3 class="name_tt text-split">HUYỆN BÌNH CHÁNH</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TỈNH LONG AN">
                                <h3 class="name_tt text-split">TỈNH LONG AN</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TP ĐÀ LẠT">
                                <h3 class="name_tt text-split">TP ĐÀ LẠT</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TỈNH BÌNH PHƯỚC">
                                <h3 class="name_tt text-split">TỈNH BÌNH PHƯỚC</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TỈNH ĐỒNG NAI">
                                <h3 class="name_tt text-split">TỈNH ĐỒNG NAI</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TỈNH TRÀ VINH">
                                <h3 class="name_tt text-split">TỈNH TRÀ VINH</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TP CẦN THƠ">
                                <h3 class="name_tt text-split">TP CẦN THƠ</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TP QUY NHƠN">
                                <h3 class="name_tt text-split">TP QUY NHƠN</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TP QUẢNG NGÃI">
                                <h3 class="name_tt text-split">TP QUẢNG NGÃI</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="TP ĐÀ NẴNG">
                                <h3 class="name_tt text-split">TP ĐÀ NẴNG</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="KCN VISIP 2 BÌNH DƯƠNG">
                                <h3 class="name_tt text-split">KCN VISIP 2 BÌNH DƯƠNG</h3>
                            </a>
                        </div>
                        <div class="item_ht">
                            <a href="" target="_blank" title="KCN BÌNH HÒA AN GIANG">
                                <h3 class="name_tt text-split">KCN BÌNH HÒA AN GIANG</h3>
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
                                            <div class="">Hệ thống tủ điện nên được kiểm tra bảo trì ít nhất mỗi năm một lần để đảm bảo hoạt động ổn định và an toàn. 
                                                Tuy nhiên, tần suất kiểm tra có thể thay đổi tùy vào mức độ sử dụng và yêu cầu cụ thể của từng công trình.</div>
                                        </div>
                                    </div>
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>03. Vì sao điện nhà của bạn hay bị chập điện nhảy cầu dao?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class="">Nguyên nhân khiến điện nhà bị chập điện và nhảy cầu dao có thể do quá tải hệ thống, hỏng hóc thiết bị điện, hoặc lỗi trong cách lắp đặt. 
                                                Việc sử dụng thiết bị điện không đảm bảo chất lượng cũng có thể gây ra tình trạng này.</div>
                                        </div>
                                    </div>
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>04. Muốn bảo vệ chống điện giật tại nhà thì bạn nên làm gì?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class="">Để bảo vệ chống điện giật tại nhà, 
                                                bạn nên lắp đặt hệ thống đất tốt, sử dụng các thiết bị điện có chứng nhận an toàn, 
                                                đảm bảo việc sửa chữa và bảo trì định kỳ, 
                                                và hạn chế việc sử dụng các thiết bị điện cũ, kém chất lượng</div>
                                        </div>
                                    </div>
                                    <div class="card close">
                                        <div class="card-header flex">
                                            <h3>05. Dịch vụ kiểm tra sửa chữa nâng cấp hệ thống điện tại Tiến Phát có giá thành và chất lượng tốt không?</h3>
                                        </div>
                                        <div class="card-content">
                                            <div class=""> Dịch vụ kiểm tra, sửa chữa, và nâng cấp hệ thống điện tại Tiến Phát cam kết mang đến giá 
                                                thành cạnh tranh và chất lượng tốt. Công ty sử dụng các kỹ thuật và thiết bị hiện đại, 
                                                đội ngũ kỹ sư và kỹ thuật viên giàu kinh nghiệm để đảm bảo khách hàng nhận được dịch vụ chất lượng và an toàn nhất.</div>
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
    
