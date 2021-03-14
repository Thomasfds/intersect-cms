/*
======================================================================================
	||
    * interface.home.js
    * Code by Nicow 2017
    * www.wbxdsg.com
	||
======================================================================================
*/

$(window).on('load', function(){
      
    /****** ARMURERIE *****/

        $('[data-item-id]').on('click', function(){
            var id = $(this).data('item-id');

            $('[data-item-id]').removeClass('active');
            $(this).addClass('active');

            $('[data-look-id]').hide();
            $('[data-look-id="'+ id +'"]').show();

        });

    /****** NAV *****/

        $('.sub').on('mouseenter', function(){
            var menu = $(this).children('ul'),
                nbr = menu.children('li').length,
                h = nbr*42+7;
                menu.stop().animate({
                    'height': h,
                }, 300);
        });
        $('.sub').on('mouseleave', function(){
            var menu = $(this).children('ul');
                menu.stop().animate({
                    'height': 0,
                }, 300);
        });
        $('[data-nav]').on('click', function(){
            var a = $(this).data('nav');

                if(a == 'no'){
                    $('nav').stop().animate({
                        'left': 0,
                    },300);
                    $(this).data('nav', 'yes');
                }else{
                    $('nav').stop().animate({
                        'left': -200,
                    },150);
                    $(this).data('nav', 'no');
                }

        });

    
});




