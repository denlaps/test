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
                $('menu button').removeClass('active');
            }
        });
    }

    /* == [MAIN MENU] == */
    (function () {
        $('.menuBar li').on('click', function() {
            const doOpen = !$(this).hasClass('active');

            if(doOpen) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    })();

    /* == [READY LOOKS - SELECT CLOTHES TYPE] == */
    $('.readyLooks__chClothes button').on('click', function() {
        const currPhoto = $(this).attr('data-src');
        $('.readyLooks__photo img').attr('src', `${currPhoto}`);
    });

    /* == [MENU HEADER] == */

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

// =================================================

    $('.menuBar__toggle').on('click', function() {
        $menu = $('.menuBar');
        doOpen = !$(this).hasClass('menuBar__toggle_close');
        if(doOpen) {
            $menu.addClass('menuBar_shown');
            $('html, body').css('overflow-y', 'hidden');
        } else {
            $menu.removeClass('menuBar_shown');
            $('html, body').css('overflow-y', 'auto');
        }
    });

});