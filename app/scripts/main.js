var $W = $(window),
    $D = $(document),
    $H = $('html'),
    $B = $('body'),
    _GLOB = {};
	
	
	
	

/* -- Общие плагины и функции -- */

// "Scroll to" function
function scrollTo(elem, speed, headerCut) { // elem -  jq-елемент или значение скролла
    if (elem) {
        var offset = typeof elem != 'number' ? elem.offset().top : elem,
            speed = speed || 700;

        if (!headerCut) {
            offset -= $('.js-header').outerHeight();
        }


        $HB.animate({'scrollTop': offset}, speed);
    }
}

// scroll click plugin
(function ($) {
    $.fn.scrollTrigger = function (settings) {
        var settingsSpeed = 700,
            settings = settings || '';

        $(this).each(function () {
            var $this = $(this);

            if (settings.speed) settingsSpeed = settings.speed;

            $this.bind('click', function (e) {
                var href = $this.attr('href') || $this.data('href');
                if (typeof href != 'number') {
                    href = $(href);
                    if (settings.margin) {
                        href = href.offset().top - parseInt(href.css('margin-top'));
                    }
                }
                if (settings && settings.callbackBefore) {
                    settings.callbackBefore();
                }

                scrollTo(href, settingsSpeed);

                if (settings && settings.callbackAfter) {
                    settings.callbackAfter();
                }
                e.preventDefault();

            });
        });

    };
})(jQuery);


function toggleClass(selector, className, callback) {
    var $this = $(selector),
        status = $this.hasClass(className);

    if (status) {
        $this.removeClass(className);
    } else {
        $this.addClass(className);
    }

    if (callback) {
        callback(status);
    }
}

// tabs Plugin
(function ($) {
    $.fn.tabs = function () {

        $(this).each(function () {
            var $this = $(this),
                $btns = $this.find('.js-tabs-btn'),
                $tabs = $this.find('.js-tabs-tab');

            function tabSwitch(numb) {
                $tabs.removeClass('_active')
                    .eq(numb).addClass('_active');

                $btns.removeClass('_active')
                    .eq(numb).addClass('_active');
            }

            $btns.bind('click', function () {
                var index = $(this).index();
                tabSwitch(index);
            });

        })

    };
})(jQuery);


/* -- Применение общих плагинов и функций --- */

// Scroll trigger
$(function () {
	var  $scrollTrigger = $('.js-scroll-trigger');
	if(!$scrollTrigger.length) return;
    $scrollTrigger.scrollTrigger();

});

$(function () {
    var $tabs = $('.js-tabs');
    if (!$tabs.length) return;

    $tabs.tabs({});
});