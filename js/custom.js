function main_custom() {

    this.global = new Array();

    this.site_init = function()
    {
        custom.init_content();
        custom.init_info();
        custom.init_user_box();
        custom.init_mobile_v();
        custom.show_summary(0);
        custom.similar_campaign_height_stable();
        custom.prices_options_width();

    }
    this.init_content = function()
    {
        if ($("#content .content_items").length)
        {
            $("#content .content_items:gt(0)").hide();
        }
    }
    this.init_mobile_v = function() {
        $('.serach_mobile_form, .search_mobile').css('width', ($('.navbar-header').width() / 2) - 70);
    }
    this.open_mobile_menu = function(type) {
        $('.overlay_menu_mobile').fadeIn('slow');
        if (type == "dash") {
            $('body').css('overflow', 'hidden');
            $('.left_side_menu').show("slide", {direction: "left"}, 500);

        } else {
            $('.navbar-offcanvas').show("slide", {direction: "left"}, 500);
        }
    }
    this.close_mobile_menu = function(type, efect) {
        $('.overlay_menu_mobile').fadeOut('slow');
        if (efect == 'no-animate') {
            if (type == 'dash') {
                $('body').css('overflow', '');
                $('.left_side_menu').css('display', 'none');
            } else {
                $('.navbar-offcanvas').css('display', 'none');
            }
        } else {
            if (type == "dash") {
                $('body').css('overflow', '');
                $('.left_side_menu').hide("slide", {direction: "left"}, 500);
            } else {
                $('.navbar-offcanvas').hide("slide", {direction: "left"}, 500);
            }
        }


    }
    this.toogle_summary_dropdown = function() {
        $('.cats_sumary_dropdown').toggle('fast');
    }
    this.summary_dropdown_change = function() {
        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            $('.drop_down_point').html($clicked.html());


        });
    }
    this.similar_campaign_height_stable = function() {
        setTimeout(function() {
            $('.similar_campaign .col-md-6').each(function() {
                $('.col-sm-6:first', this).height($('.col-sm-6:last', this).height() + 30);
            });
        }, 100);
    }
    this.prices_options_width = function() {
        $('.price_item').each(function() {
            $('.options', this).width($(this).width());
        });
    }
    this.init_info = function()
    {
        if ($("#info").length)
        {
            $("#info .info_img:gt(0)").hide();
        }
    }
    this.go_slide = function(i)
    {
        $("#slider .items .item:eq(" + (i - 1) + ")").css({"opacity": 1, "z-index": 1});
        $("#slider .items .item:not(:eq(" + (i - 1) + "))").css({"z-index": 2}).animate({"opacity": 0}, 300, function() {
            $(this).css({"z-index": 1});
            $("#slider .items .item:eq(" + (i - 1) + ")").css({"z-index": 2})
        });
        $("#slider .paginator a").removeClass("active");
        $("#slider .paginator a:eq(" + (i - 1) + ")").addClass("active");
        custom.global['curr_slide'] = i;
    }

    this.show_summary = function(i)
    {
        var item_id = $("#summary .right a:eq(" + i + ")").data("type");
        //remove active classes
        $("#summary .right a").removeClass("active");
        $("#summary .items .item").removeClass("active");

        //add active classes to the right elements
        $("#summary .right a:eq(" + i + ")").addClass("active");
        $("#summary .items .item#" + item_id + "").addClass("active");

        $('.cats_sumary_dropdown').slideUp('fast');
        $('.drop_down_point').html($('#' + item_id).html());
        $('.drop_down_point .icon').addClass('blue');
    }

    this.show_content = function(i)
    {
        $("#content .sort a").removeClass("active");
        $("#content .sort a:eq(" + i + ")").addClass("active");

        $("#content .content_items:eq(" + i + ")").show();
        $("#content .content_items:not(:eq(" + i + "))").hide();
    }

    this.show_info = function(i)
    {
        $("#info .menu a").removeClass("active");
        $("#info .menu a:eq(" + i + ")").addClass("active");

        $("#info .info_img:eq(" + i + ")").show();
        $("#info .info_img:not(:eq(" + i + "))").hide();
    }

    this.init_user_box = function()
    {

        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            if (!$clicked.parents().hasClass("user_options") && !$clicked.hasClass("user_options"))
                $(".user_options .drop").hide();

        });
    }

    this.show_user_box = function()
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

// dasboard
function dash_custom() {
    this.global = new Array();

    this.dash_init = function() {
        dash.open_dash_menu('bl_2');
        dash.verify_height_of_menu_sides();
        dash.dash_clone_buttons();
    }
    this.dash_clone_buttons = function() {
        if (Response.band(0, 767)) {


            if ($('.clone_elements').is(':empty')) {
                $('.right_top_buttons').clone().appendTo('.clone_elements');
            }
        } else {
            $('.clone_elements').empty();
        }
    }
    this.verify_height_of_menu_sides = function() {
        dash.height_menu_in_mobile_node();
        //cat1 height
        var cat_1_h = $('.cat_1').height();
        var cat_1_menu_h = $('.cat_1_menu li').size() * 90;

        //cat 2 height
        var s = $('.cat_1_menu').find('li.active').data('idtoopen');
        var cat_2_h = $('#' + s + ' ul li').size() * 48 + 40;

        // right_content height
        $('.right_content').css('height', '');
        var right_content_height = $('.right_content').height();

        //Set forr all max height
        if (Response.band(992)) {
            if (cat_1_menu_h > cat_2_h) {
                if (right_content_height > cat_1_menu_h) {
                    // max right content
                    $('.right_content').height(right_content_height);
                    $('.cat_2').height(right_content_height + 15);
                    $('.cat_1').height(right_content_height + 15);
                } else {
                    // max cat_1_menu_h
                    $('.right_content').height(cat_1_menu_h - 15);
                    $('.cat_2').height(cat_1_menu_h);
                    $('.cat_1').height(cat_1_menu_h);
                }
            } else {
                if (right_content_height > cat_2_h) {
                    // max right content
                    $('.right_content').height(right_content_height);
                    $('.cat_2').height(right_content_height + 15);
                    $('.cat_1').height(right_content_height + 15);
                } else {
                    // max cat_2_h
                    $('.right_content').height(cat_2_h - 15);
                    $('.cat_2').height(cat_2_h);
                    $('.cat_1').height(cat_2_h);
                }
            }
        } else if (Response.band(0, 991)) {
            if (cat_1_menu_h > cat_2_h) {
                $('.cat_2').height(cat_1_menu_h);
                $('.cat_1').height(cat_1_menu_h);
            } else {
                $('.cat_2').height(cat_2_h);
                $('.cat_1').height(cat_2_h);
            }
        }

    }
    // set cat2 height on open menu
    this.set_cat2_height = function(id) {
        $('.cat_2').height($('#' + id).height() + 40);
    }
    this.open_dash_menu = function(id) {
        $('.cat_2_item_block').fadeOut('fast');
        $('#' + id).fadeIn('fast');
        $('.cat_1_menu li').removeClass('active');
        $('*[data-idtoopen="' + id + '"]').addClass('active');

        dash.set_cat2_height(id);
        dash.verify_height_of_menu_sides();
    }
    this.slide_in_dash_menu = function() {
        $('.left_side_menu').hide("slide", {direction: "right"}, 500);
    }
    this.height_menu_in_mobile_node = function() {
        if (Response.band(0, 767)) {
            // set menu height in mobile mode
            $('#scroll-content').height($(window).height());
            $('.cat_1').css('min-height', $(window).height() - 253);
            $('.cat_2').css('min-height', $(window).height() - 253);
        } else {
            $('.cat_1').css('min-height', '');
            $('.cat_2').css('min-height', '');
        }
    }
}
//init custom functions
var custom = new main_custom();

//init dasboard)_functions
var dash = new dash_custom();

$(document).ready(function() {
    //start init functions
    custom.site_init();
    dash.dash_init();
    //--



    /* ---FRONTEND--- */
    // bxslider initialization
    $('.bxslider').bxSlider({
        adaptiveHeight: true,
        responsive: true,
        video: true,
        controls: false
    });
    //--

    // faq method
    $('.faq_item').click(function() {
        if (!$(this).hasClass('open')) {
            $('.faq_item').removeClass('open');
            $('.faq_content').slideUp('fast');
            $(this).addClass('open');
            $('.faq_content', this).slideDown('fast');
        } else {
            $('.faq_content', this).slideUp('fast');
            $(this).removeClass('open');
        }
    });
    //--

    /* Serach mobile expand colapse */
    $('.btn_mobile_search, .serach_mobile_form').click(function(event) {
        $('.serach_mobile_form').show("slide", {direction: "right"}, 500);
        event.stopPropagation();
    });
    $('html').click(function() {
        $('.serach_mobile_form').hide("slide", {direction: "right"}, 500);
    });
    /* Serach mobile expand colapse */

    /*Menu mobile expand*/
    $('.navbar-toggle').click(function() {
        var type = $(this).data('toggle');
        custom.open_mobile_menu(type);
    });
    $('.navbar-toggle.close_navbar').click(function() {
        var type = $(this).data('toggle');
        custom.close_mobile_menu(type);
    });
    /* ---FRONTEND--- */


    $('.cat_1_menu li').click(function() {
        var id = $(this).data('idtoopen');
        dash.open_dash_menu(id);
    });

    // Dashboard tabs change
    $('.open_dashtab').click(function(){
        var id = $(this).data('tab');
        $('.open_dashtab').removeClass('active');
        $(this).addClass('active');
        $('.dash_tab_content_content').removeClass('active_content');
        $('#'+id).addClass('active_content')
    });

});

$(window).resize(function() {
    dash.verify_height_of_menu_sides();
    custom.init_mobile_v();
    custom.similar_campaign_height_stable();
    custom.prices_options_width();

    /*Dashnboard*/
    dash.dash_clone_buttons();
    /*End dashboard*/
});
Response.resize(function() {
    eneble_disble_scroll_menu()
    var type = $('.navbar-toggle').data('toggle');

    if (Response.band(0, 767)) {
        custom.close_mobile_menu(type, 'no-animate');
        $('#scroll-content').height($(window).height());
    } else {
        if (type == 'dash')
            $('.left_side_menu').css('display', 'block');
        else
            $('.navbar-offcanvas').css('display', 'block');
    }


});

function eneble_disble_scroll_menu() {

    if (Response.band(0, 767)) {
        $("#scroll-content").mCustomScrollbar({theme: "minimal"});
    } else {
        $("#scroll-content").mCustomScrollbar("destroy");
        $('#scroll-content').css('height', '');
    }
}

$('.field-file-campaign').change(function(event) {
    $(this).parents('.file-campaign').next('.choose-campaign').text($(this).val());
});
$(".tablist a[data-toggle=tab]").on("click", function(e) {
    if ($(this).hasClass("disabled")) {
        e.preventDefault();
        return false;
    }
});

