
$(document).ready(function() {
    setTimeout(function(){
        $(".wap_load").fadeOut(1000);
    },1000);
    $('body').append('<div id="toptop" title="LĂªn Ä‘áº§u trang"><i class="fas fa-arrow-circle-right"></i></div>');
    $(window).scroll(function() {
         if($(window).scrollTop() != 0){
             $('#toptop').fadeIn();
         }else {
             $('#toptop').fadeOut();
         }
    });
 
    $('#toptop').click(function() {
         $('html, body').animate({scrollTop:0},500);
    });
 
   $(document).on('click','#baophu, .close-popup,.ttmh',function(){
             $('#baophu,.popup_donhang,.login-popup').animate({left:'-100%'},500);
       setTimeout(function(){
           $('#baophu,.wap_giohang,.login-popup').remove()
       }, 700);
     });
 });
 
 
 function isEmpty(str,text){
         if(str != "") return false;
         if(typeof(text) != 'undefined')	alert(text);
         return true;
 }
 function isPhone(str,text){
     // alert(str.substr(0,3));
     if( str.length==10 && (str.substr(0,2)=='09') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='070') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='079') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='077') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='076') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='078') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='083') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='084') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='085') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='081') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='082') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='032') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='033') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='034') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='035') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='036') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='037') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='038') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='039') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='056') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='058') ) {
     return false;
     }
     if( str.length==10 && (str.substr(0,3)=='059') ) {
     return false;
     }
     if(typeof(text)!='undefined') alert(text);
     return true;
 }
 function isEmail(str, text){
     emailRegExp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;
     if(emailRegExp.test(str)){
         return false;
     }
     if(typeof(text)!='undefined') alert(text);
     return true;
 }
 function isSpace(str,text){
     for(var i=0; i < str.length; i++)
     {
         if((str.charAt(i)) == " ")
         {
             if(typeof(text)!='undefined') alert(text);
             return true;
 
         }
     }
     return false;
 }
 function isCharacters(str,text){
     if(str=='') return false;
     var searchReg = /^[a-zA-Z0-9-]+$/;
     if(searchReg.test(str)) {
         return false;
     }
     if(typeof(text)!='undefined') alert(text);
     return true;
 }
 function isRepassword(str,str2,text){
     if(str2=='') return false;
     if(str==str2) return false;
     if(typeof(text)!='undefined') alert(text);
     return true;
 }
 function isCharacterlimit(str,text,intmin,intmax){
     if(str=='') return false;
     intmin = parseInt(intmin);
     intmax = parseInt(intmax);
 
     if(str.length>=intmin && str.length<=intmax)
     {
         return false;
     }
     if(typeof(text)!='undefined') alert(text);
     return true;
 }
 function add_popup(str){
     $('body').append('<div class="login-popup" style="width:300px;"><div class="close-popup">x</div><div class="popup_thongbao"><p class="tieude_tb">ThĂ´ng bĂ¡o</p><p class="popup_kq">'+str+'</p></div></div>');
     $('.thongbao').html('');
     $('.login-popup').fadeIn(300);
     $('body').append('<div id="baophu"></div>');
     $('#baophu').fadeIn(300);
     return false;
 }
