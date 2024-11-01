(function($){

    $(document).on('click','#wrdwpt_opt_disable_revisions', function(){
        if( $(this).is(':checked') ){
            $('#wrdwpt_opt_limit_revisions').prop('checked', false);
            $('#wrdwpt_opt_rev_num').slideUp();
        }
    });

    $(document).on('click','#wrdwpt_opt_limit_revisions', function(){
        if( $(this).is(':checked') ){
            $('#wrdwpt_opt_disable_revisions').prop('checked', false);
            $('#wrdwpt_opt_rev_num').slideDown();
        } else {
            $('#wrdwpt_opt_rev_num').slideUp();
        }
    });

    $(document).on('click','#wrdwpt_opt_async_js', function(){
        if( $(this).is(':checked') ){
            $('#js_dont_async').slideDown();
        } else {
            $('#js_dont_async').slideUp();
        }
    });

    $(document).on('click','#wrdwpt_opt_defer_js', function(){
        if( $(this).is(':checked') ){
            $('#js_dont_defer').slideDown();
        } else {
            $('#js_dont_defer').slideUp();
        }
    });

    $(document).on('click','#wrdwpt_opt_disable_hotlinking', function(){
        if( $(this).is(':checked') ){
            $('#enable_hotlink_urls').slideDown();
        } else {
            $('#enable_hotlink_urls').slideUp();
        }
    });

    $(window).on('load',function(){
        if ( $('#wrdwpt_opt_async_js').is(':checked') ) {
            $('#js_dont_async').show();
        }
        if ( $('#wrdwpt_opt_defer_js').is(':checked') ) {
            $('#js_dont_defer').show();
        }
        if ( $('#wrdwpt_opt_limit_revisions').is(':checked') ) {
            $('#wrdwpt_opt_rev_num').show();
        }
        if( $('#wrdwpt_opt_disable_hotlinking').is(':checked') ){
            $('#enable_hotlink_urls').show();
        }
    });

    $(window).on('load resize',function(){
        var borderColor = $('#adminmenu a').css('color').replace('rgb','rgba').replace(')',', 0.3)');
        var color = $('#adminmenu a').css('color');
        $('#wrdwpt_footer').css({
            'width':$(window).width() - $('#adminmenuback').width(),
            'background':$('#adminmenuback').css('background-color'),
            'color':color
        });
        $('#wrdwpt_footer h1').css({
            'color':color,
            'border-color':borderColor
        });
        $('#wrdwpt_footer p:last-of-type').css({
            'border-color':borderColor
        });
        $('#wrdwpt_footer a, #wpfooter a').css({
            'color':$('#wrdwpt_save_settings').css('background-color')
        });
        $('#wpfooter').css({
            'color':color
        });
    });

})(jQuery);
