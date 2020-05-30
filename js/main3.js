jQuery(document).ready(function(){
    $(window).scroll(function(){
    var top = $(window).scrollTop();
    if(top>=30){
        $("header").addClass('secondary');
    }
    else
        if($("header").hasClass('secondary')){
            $("header").removeClass('secondary');
        }
    });
});