<?php 
//hàm set up khi khởi tạo.
function theme_setup() {
    // hàm set up đăng kí menu, hiện mục Menu trong dashboard Admin.
    register_nav_menu('topMenu', 'Menu chính');
    // hàm set up khởi tạo chức năng upload image đại diện cho bài viết.
    add_theme_support('post-thumbnails');
}

// hàm chạy khi khởi tạo để call các hàm khác.
add_action('init', 'theme_setup');



