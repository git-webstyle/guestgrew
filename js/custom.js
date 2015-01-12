function main_custom() {

    this.global = new Array();

    this.site_init = function ()
    {
        custom.init_content();
        custom.init_info();
        custom.init_user_box();
        custom.init_mobile_v();
        custom.show_summary(0);  
        custom.similar_campaign_height_stable();
        custom.prices_options_width();
        
    }
    this.init_content = function ()
    {
        if ($("#content .content_items").length)
        {
            $("#content .content_items:gt(0)").hide();
        }
    }
    this.init_mobile_v = function () {
        $('.serach_mobile_form, .search_mobile').css('width',($('.navbar-header').width()/2)-70);        
    }
    this.open_mobile_menu = function () {
        $('.overlay_menu_mobile').fadeIn('slow');
        $('.navbar-offcanvas').show("slide", { direction: "left" }, 500);
    }
    this.close_mobile_menu = function () {
        $('.overlay_menu_mobile').fadeOut('slow');
        $('.navbar-offcanvas').hide("slide", { direction: "left" }, 500);
    }
    this.toogle_summary_dropdown = function () {
        $('.cats_sumary_dropdown').toggle('fast');
    }
    this.summary_dropdown_change = function() {
        $(document).bind('click', function (e) {
            var $clicked = $(e.target);
            $('.drop_down_point').html($clicked.html());
            

        });
    }
    this.similar_campaign_height_stable = function() {
        setTimeout(function(){ 
            $('.similar_campaign .col-md-6').each(function(){
                $('.col-sm-6:first', this).height($('.col-sm-6:last',this).height()+30);
            });
        }, 100);
    }
    this.prices_options_width = function() {
        $('.price_item').each(function(){
            $('.options',this).width($(this).width());
        });
    }
    this.init_info = function ()
    {
        if ($("#info").length)
        {
            $("#info .info_img:gt(0)").hide();
        }
    }
    this.go_slide = function (i)
    {
        $("#slider .items .item:eq(" + (i - 1) + ")").css({"opacity": 1, "z-index": 1});
        $("#slider .items .item:not(:eq(" + (i - 1) + "))").css({"z-index": 2}).animate({"opacity": 0}, 300, function () {
            $(this).css({"z-index": 1});
            $("#slider .items .item:eq(" + (i - 1) + ")").css({"z-index": 2})
        });
        $("#slider .paginator a").removeClass("active");
        $("#slider .paginator a:eq(" + (i - 1) + ")").addClass("active");
        custom.global['curr_slide'] = i;
    }

    this.show_summary = function (i)
    {
        var item_id = $("#summary .right a:eq(" + i + ")").data("type");
        //remove active classes
        $("#summary .right a").removeClass("active");
        $("#summary .items .item").removeClass("active");
        
        //add active classes to the right elements
        $("#summary .right a:eq(" + i + ")").addClass("active");        
        $("#summary .items .item#"+item_id+"").addClass("active");
        
        $('.cats_sumary_dropdown').slideUp('fast');
        $('.drop_down_point').html($('#'+item_id).html());
        $('.drop_down_point .icon').addClass('blue');   
    }

    this.show_content = function (i)
    {
        $("#content .sort a").removeClass("active");
        $("#content .sort a:eq(" + i + ")").addClass("active");

        $("#content .content_items:eq(" + i + ")").show();
        $("#content .content_items:not(:eq(" + i + "))").hide();
    }

    this.show_info = function (i)
    {
        $("#info .menu a").removeClass("active");
        $("#info .menu a:eq(" + i + ")").addClass("active");

        $("#info .info_img:eq(" + i + ")").show();
        $("#info .info_img:not(:eq(" + i + "))").hide();
    }

    this.init_user_box = function ()
    {

        $(document).bind('click', function (e) {
            var $clicked = $(e.target);
            if (!$clicked.parents().hasClass("user_options") && !$clicked.hasClass("user_options"))
                $(".user_options .drop").hide();

        });
    }

    this.show_user_box = function ()
    {
        if ($(".user_options .drop").is(":visible"))
        {
            $(".user_options .drop").hide();
        }
        else
        {
            $(".user_options .drop").show();
        }
    }


}


var custom = new main_custom();
$(document).ready(function () {
    custom.site_init();
    $('.bxslider').bxSlider({
        adaptiveHeight: true,
        responsive: true,
        video: true,
        controls: false
    });
    $('.faq_item').click(function(){
        if (!$(this).hasClass('open')) {
            $('.faq_item').removeClass('open');
            $('.faq_content').slideUp('fast');
            $(this).addClass('open');
            $('.faq_content',this).slideDown('fast');
        } else {
           $('.faq_content',this).slideUp('fast'); 
           $(this).removeClass('open');
        }
    });
    
    /* Serach mobile expand colapse */
    $('.btn_mobile_search, .serach_mobile_form').click(function(event){
        $('.serach_mobile_form').show("slide", { direction: "right" }, 500);
        event.stopPropagation();
    });
    $('html').click(function() {
        $('.serach_mobile_form').hide("slide", { direction: "right" }, 500);
    });
    /* Serach mobile expand colapse */
    
    /*Menu mobile expand*/
    $('.navbar-toggle').click(function(){
       custom.open_mobile_menu();        
    });
    $('.navbar-toggle.close_navbar').click(function(){
        custom.close_mobile_menu();
    });
    
});

$(window).resize(function(){
    custom.init_mobile_v();
    custom.similar_campaign_height_stable();
    custom.prices_options_width();
    if ($(document).width()+17 <= 768) {
        custom.close_mobile_menu(); 
    } else {
        $('.navbar-offcanvas').css('display','block');
    }
});
