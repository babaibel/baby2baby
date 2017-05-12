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

// form tabs Plugin
(function ($) {
    $.fn.formTabs = function () {

        $(this).each(function () {
            var $this = $(this),
                $btns = $this.find('.js-form-tabs-btn'),
                $tabs = $this.find('.js-form-tabs-tab');

            function tabSwitch(numb) {
                $tabs.removeClass('_active')
                    .eq(numb).addClass('_active');

                $btns.removeClass('_active')
                    .eq(numb).addClass('_active');
            }

            $btns.bind('click', function () {
                var index = $(this).index($btns);
                console.log($(this).index($btns))
                tabSwitch(index);
            });

        })

    };
})(jQuery);

//popup
(function ($) {
    $.fn.popup = function () {

        $(this).each(function () {
            var $this = $(this),
                btnBool = true;

            if($this.hasClass('js-popup--nobtn')){
                btnBool = false;
            }

            $this.magnificPopup({
                type: 'inline',
                preloader: false,
                removalDelay: 300,
                mainClass: 'mfp-fade',
                showCloseBtn: btnBool,
                closeMarkup: '<button title="%title%" type="button" class="mfp-close iconic iconic--cancel"></button>',
                callbacks: {
                open: function() {
                    $B.addClass('_popup-open');
                },
                beforeClose: function() {
                    $B.removeClass('_popup-open');
                }
              }
            });
        });

    };
})(jQuery);


// tabs Plugin
(function ($) {
    $.fn.select = function () {

        $(this).each(function () {
            var $this = $(this),
                $placeholder = $this.data('placeholder');

                console.log($placeholder);

                if($placeholder===undefined){
                    $placeholder = "";
                }

                $this.select2({
                    minimumResultsForSearch: Infinity,
                    placeholder: $placeholder
                })

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
    var  $popup = $('.js-popup');
    if(!$popup.length) return;

    $popup.popup();
});


$(function () {
    var $tabs = $('.js-tabs');
    if (!$tabs.length) return;

    $tabs.tabs({});
});

$(function () {
    var $formTabs = $('.js-form-tabs');
    if (!$formTabs.length) return;

    $formTabs.formTabs({});
});

$(function () {
    var $select = $('.js-select');
    if (!$select.length) return;

    $select.select({});
});


$(function () {
    var $search = $('.js-search');
    if (!$search.length) return;

    var $searchOpen= $search.find('.js-search-open'),
        $searchClose=$search.find('.js-search-close'),
        $searchText= $search.find('.js-search-text');

    $searchOpen.click(function(){
        $search.addClass('_open');
        $searchText.focus();
    });

    $searchClose.click(function(){
        $search.removeClass('_open');
    });

    $searchText.focusout(function(){
        $search.removeClass('_open');
    });
});

$(function () {
    var $activeToggle = $('*[data-toggle="active"]');

    $activeToggle.click(function(){
        $activeToggle.not(this).removeClass('_active');
        $(this).toggleClass('_active');
    });

    return false;
});

$(function () {

    $('.js-file').click(function(){
        $(this).next('input[type="file"]').click(); 
    });

});

$(function () {
    var $activeDropdown = $('*[data-dropdown="active"]')

    $activeDropdown.click(function(e){
        var $this = $(this),
            $target = $(e.target);

        // Если элемент активный
        if($this.hasClass('_active')){
            // Если список внутри Активного класса дополнительно проверяем это
            if($target.hasClass('js-dropdown') || $target.parents('.js-dropdown').length){
                return;
            } else{
                $this.removeClass('_active');
                $W.unbind('click');
            }
        } else{
            $W.unbind('click');
            $activeDropdown.not(this).removeClass('_active');
            $(this).addClass('_active');

            // Биндим последующий клик
            $W.bind('click', function (e2){
                var $bindTarget = $(e2.target);

                // если у родителя есть актив или это эллемент списка или это сама кнопка
                if($bindTarget.parents('._active').length || $bindTarget.parents('.js-dropdown').length ||  $bindTarget.data('dropdown') == 'active'){
                    return;
                } else{
                    $this.removeClass('_active');
                    $W.unbind('click');
                }

            });
        }
    });

});


