jQuery(document).ready(function(){
    
    "use strict";
    $('#slider-carousel').carouFredSel({
        responsive:true,
        circular:true,
        scroll:
        {
            items:1,
            duration:300, // ms
            pauseOnHover:true
        },
        auto:true,
        items:
        {
            visible:
            {
                min:1,
                max:1
            },
            height:"variable",
        },
        pagination:
        {
            container:".sliderpager",
            pageAnchorBuilder:false
        }
    });
});