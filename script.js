$(function() {

    var btn = $('.btn_up');
    var btn_show = false;

    $(document).scroll(function() {
        if(!btn_show && $(document).scrollTop() > window.innerHeight){
            btn.fadeIn(500);
            btn_show = true;
        }
        
        if(btn_show && $(document).scrollTop() <= window.innerHeight){
            btn.fadeOut(500);
            btn_show = false;
        }
    });
    
    btn.click(function() {
        $('html, body') .animate({scrollTop: 0}, 1000);
    });
});