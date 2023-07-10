function init_paging_loai(tab_class = '', tab_return = '', page_per = 0, table_select = '', type_select = '') {
    if (tab_class != '') {
        if ($('.' + tab_class + ' a.active').length == 0) {
            $('.' + tab_class + ' a').eq(0).addClass('active');
        }
        var where_select = ' and ' + $('.' + tab_class + ' a.active').data('id');
    }
    else {
        var where_select = ' and 1';
    }
    $.ajax({
        url: 'ajax/paging.php',
        type: 'post',
        dataType: 'html',
        data: { id_danhmuc: 0, page_per: page_per, table_select: table_select, type_select: type_select, where_select: where_select, tab_return: tab_return },
    })
        .done(function (result) {
            $('.' + tab_return).html(result);
        });
}
function init_paging(tab_class = '', tab_return = '', page_per = 0, table_select = '', type_select = '', where_select = '') {
    if (tab_class != '') {
        if ($('.' + tab_class + ' a.active').length == 0) {
            $('.' + tab_class + ' a').eq(0).addClass('active');
        }
        var id_danhmuc = $('.' + tab_class + ' a.active').data('id');
    }
    else {
        var id_danhmuc = 0;
    }
    // alert(id_danhmuc);return false;
    $.ajax({
        url: 'ajax/paging.php',
        type: 'post',
        dataType: 'html',
        data: { id_danhmuc: id_danhmuc, page_per: page_per, table_select: table_select, type_select: type_select, where_select: where_select, tab_return: tab_return },
    })
        .done(function (result) {
            $('.' + tab_return).html(result);
        });
}
function init_paging_category(id_danhmuc = 0, tab_return = '', page_per = 0, table_select = '', type_select = '', where_select = '') {
    // alert(id_danhmuc);return false;
    $.ajax({
        url: 'ajax/paging.php',
        type: 'post',
        dataType: 'html',
        data: { id_danhmuc: id_danhmuc, page_per: page_per, table_select: table_select, type_select: type_select, where_select: where_select, tab_return: tab_return },
    })
        .done(function (result) {
            $('.' + tab_return).html(result);
        });
}
function init_paging_category_list(id_danhmuc = 0, tab_class = '', tab_return = '', page_per = 0, table_select = '', type_select = '', where_select = '') {
    if (tab_class != '') {
        if ($('.' + tab_class + ' a.active').length == 0) {
            $('.' + tab_class + ' a').eq(0).addClass('active');
        }
        var id_list = $('.' + tab_class + ' a.active').data('id');
    }
    $.ajax({
        url: 'ajax/paging.php',
        type: 'post',
        dataType: 'html',
        data: { id_danhmuc: id_danhmuc, page_per: page_per, table_select: table_select, type_select: type_select, where_select: where_select, tab_return: tab_return, id_list: id_list },
    })
        .done(function (result) {
            $('.' + tab_return).html(result);
        });
}
$(document).on('click', '.paging-sm a', function (event) {
    event.preventDefault();
    var el = $(this);
    var id_danhmuc = el.attr('data-danhmuc');
    var id_list = el.attr('data-list');
    var page_per = el.attr('data-per');
    var table_select = el.attr('data-table');
    var type_select = el.attr('data-type');
    var where_select = el.attr('data-where');
    var tab_return = el.attr('data-tab');
    var page = el.attr('data-page');
    $.ajax({
        url: 'ajax/paging.php',
        type: 'post',
        dataType: 'html',
        data: { 
            id_danhmuc: id_danhmuc, 
            page_per: page_per, 
            table_select: table_select, 
            type_select: type_select, 
            where_select: where_select, 
            tab_return: tab_return, 
            page: page, 
            id_list: id_list 
        },
    })
        .done(function (result) {
            $('.' + tab_return).html(result);
        });
});
function init_ajax_scroll(tab_return = '', page_per = 0) {
    $.ajax({
        url: 'ajax/data.php',
        type: 'post',
        dataType: 'html',
        data: { page_per: page_per, tab_return: tab_return },
    })
        .done(function (result) {
            $('.' + tab_return).append(result);
        });
}