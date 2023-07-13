<div class="wap_menu">
            <div class="menu_mobi_add"></div>
            <div class="menu_mobi flex">
                <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                <p class="menu_baophu"></p>
                <a class="phone_mb" title="0972.183.240 ( Mr.Long )">0972.183.240 ( Mr.Long )</a>
                <a href="" class="home_mobi"><i class="fa fa-home" aria-hidden="true"></i></a>
            </div>
            <div class="menu wap_1200 flex ja">
                <div class="gr_menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topMenu',
                            'container' => false,
                            'menu_id' => 'top-menu',
                            'menu_class' => 'flex ja',
                        )
                    );
                ?>
                </div>
                <div class="search">
                            <input type="text" name="keyword" id="keyword" class="keyword"
                                onKeyPress="doEnter(event,'keyword');" value="Tìm kiếm..."
                                onclick="if(this.value=='Tìm kiếm...'){this.value=''}"
                                onblur="if(this.value==''){this.value='Tìm kiếm...'}">
                            <i class="far fa-search" aria-hidden="true" onclick="onSearch(event,'keyword');"></i>
                </div>
            </div>
        </div>