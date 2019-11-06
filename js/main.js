function closeModal() {
    $('.modalWrapper').removeClass('modalWrapper_shown');
    $('.modalWrapper .modal').hide();
    $('html').css('padding-right', 0);
    $('html, body').css('overflow', 'auto');
}

$(document).ready(function() {
    /* Hide func */
    function listenOutside(checkEl, toggleBlock) {
        $(document).mouseup(function (e) {
            if (!checkEl.is(e.target) && checkEl.has(e.target).length === 0) {
                $('.goodsHistory').removeClass('opacity');
                toggleBlock.removeClass('shown');
                $('.headBlock menu button').removeClass('active');
            }
        });
    }

    /* == [MAIN MENU] == */
    (function () {
        $('.menuBar li').mouseenter(function() {
            $(this).addClass('active');
        });

        $('.menuBar').mouseleave(function() {
            $(this).children('li').each(function() {
                $(this).removeClass('active');
            });
        });
    })();

    /* == [VERTICAL SLIDER] == */
    $('.goodsSlider button').on('click', function() {
        const isNext = $(this).hasClass('goodsSlider__next'),
            $wrapper = $('.goodsSlider__wrapper'),
            wrapHeight = $wrapper.innerHeight(),
            itemCount = 3,
            scrollPar = {
                current: $wrapper.scrollTop(),
                step: $('.goodsSlider a').outerHeight() + 10,
                speed: 250
            };

        if (!isNext) {
            scrollPar.pos = scrollPar.current > 0 ? scrollPar.current - scrollPar.step : wrapHeight + scrollPar.step * itemCount;
        } else {
            scrollPar.pos = scrollPar.current < wrapHeight ? scrollPar.current + scrollPar.step : 0;
        }

        $wrapper.stop().animate({
            scrollTop: scrollPar.pos
        }, scrollPar.speed, 'swing');
    });

    /* == [READY LOOKS - SELECT CLOTHES TYPE] == */
    $('.readyLooks__chClothes button').on('click', function() {
        const currPhoto = $(this).attr('data-src');
        $('.readyLooks__photo img').attr('src', `${currPhoto}`);
    });

    /* == [MENU HEADER] == */
    $('.searchBox button').on('click', function() {
        $('.searchBox input').addClass('shown').focus();
        listenOutside($('.searchBox'), $('.searchBox input'));

        return false;
    });

    $('.goodsHistory__show').on('click', function() {
        setTimeout(function () {
            $('.goodsHistory').addClass('opacity');
        }, 0);
        $('.goodsHistory').addClass('shown');
        $(this).addClass('active');
        listenOutside($('.goodsHistory'), $('.goodsHistory'));
    });

    /* == [ITEM COUNTER] == */
    $('.itemCounter button').on('click', function() {
        const textCounter = $(this).closest('.itemCounter').children('input');
        let counter = textCounter.val();
        if($(this).hasClass('itemCounter__plus')) {
            counter++;
        } else if($(this).hasClass('itemCounter__minus')) {
            if(counter > 1) {
                counter--;
            } else {
                counter = 1;
            }
        }

        textCounter.val(counter);
    });

    /* == [MODAL] == */

    $('[data-modal]').on('click', function() {
        const id = $(this).attr('data-modal');

        $('html, body').css('overflow', 'hidden');
        $('html').css('padding-right', 17);
        $('.modalWrapper').addClass('modalWrapper_shown');
        if($(id + ' .closeModal').length === 0) {
            $(id).prepend('<button class="closeModal" onclick="closeModal(); return false;"><i class="fas fa-times"></i></button>');
        }
        $(id).css('display', 'block');

        $(document).mouseup(function (e) {
            if ($('.modalWrapper').is(e.target) && $('.modalWrapper').has(e.target).length === 0) {
                closeModal();
            }
        });
    });

    $('.sendFile').on('click', function() {
        const $fileSelector = $(this).next('input[type="file"]');
        const $fileStatus = $fileSelector.next('.fileStatus');
        $fileSelector.click();
        // setTimeout(function() {
        //     if($fileSelector.val().length > 0) {
        //         $fileStatus.html($fileSelector.val());
        //         console.log($fileSelector.val());
        //     } else {
        //         $fileStatus.html('Файл не выбран');
        //         console.log($fileSelector.val());
        //     }
        // }, 0);

        return false;
    });
});