<?php 
include ('elements/header.php');
?>
        <section class="contentWrapper">
        <?php include ('elements/sidebar.php'); ?>

            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/reviews.php">Отзывы</a></li>
                </nav>
                <h1>Отзывы</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="reviewsPage">
                    <figure class="orangeBlock">
                        <img src="img/reviewsGirl.png" alt="">
                        <div class="orangeBlock__wrapper">
                            <figcaption>
                                <h2>Помогите нам<br>стать лучше!</h2>
                                <span>
                                    Напишите, что вы заказывали,<br>
                                    понравился ли вам товар,<br>
                                    удобно ли было заказывать.
                                </span>
                                <a href="#" data-modal=".modal__sendReview">Написать отзыв</a>
                            </figcaption>
                        </div>
                    </figure>

                    <section class="reviewsPage__wrapper">
                        
                    </section>

                    <button class="showMore" onclick="loadMoreReviews()">Показать ещё</button>
                </main>
                <!-- [/END CONTENT] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    
    <?php 
        include ('./elements/footer.php');
    ?>
    
<!-- [MODALS] -->
<div id="modalReview" class="modalWrapper">

<section class="modal modal_medium modal__sendReview">
    <h3>Оставить отзыв</h3>
    <form action="">
        <div class="form-box">
            <input id="user_name" type="text" placeholder="Ваше имя">
            <input id="user_phone" type="text" placeholder="Ваш телефон | e-mail">
            <input id="user_city" type="text" placeholder="Ваш город">
            <input id="user_message" type="text" placeholder="Ваше сообщение">
        </div>
        <div class="form-box">
            <!-- <button class="sendFile">Выбрать файл</button>
            <input type="file"> -->
            <button class="showMore" onclick="sendReview()">Отправить</button>
        </div>
        <span class="uText">Нажимая на кнопку «Отправить», я соглашаюсь на обработку персональных данных и ознакомлен(а) с условиями конфиденциальности.</span>
    </form>
</section>

</div>
<!-- [/END MODALS] -->


    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/toast.js"></script>
    <script>
    nextUrl = '/api/reviews.php?limit=3&offset=0';

    loadMoreReviews();
    function loadMoreReviews() {
            $.get(nextUrl, (res) => {
                if (res.data.length < 3) {
                    $('.showMore').hide();
                } else {
                    $('.showMore').show();
                }
                console.log(res);
                res.data.forEach((el) => {
                    $('.reviewsPage__wrapper').append(`<article>
                            <img src="img/noPhoto.jpg" alt="">
                            <section class="reviewContent">
                                <h3>` + el.name + `</h3>
                                <span class="reviewContent__uHead">` + el.created_at + ` |  ` + el.city + `</span>
                                <span class="reviewContent__text">
                                ` + el.review + `
                                </span>
                            </section>
                        </article>`);
                });
               
                nextUrl = res.next_url;
                console.log(nextUrl);
            });
    }
        function sendReview() {
            var orderData = {};
            orderData.name = $('#user_name').val();
            orderData.phone = $('#user_phone').val();
            orderData.city = $('#user_city').val();
            orderData.review = $('#user_message').val();

                $.post("api/message.php", orderData).done(function(data) {
                    if (data.status == 1) {
                        new Toast({
                            message: 'Сообщение добавлено!',
                            type: 'danger'
                        });
                        closeModal(); 
                    } else {
                        new Toast({
                            message: 'Не удалось отправить сообщение!',
                            type: 'danger'
                        });
                    }
                });
        }
    /* == [SELECT UI] == */
    $('.chLook__list').selectmenu({
        classes: {
            'ui-selectmenu-button-closed': 'selectMenu_closed',
            'ui-selectmenu-button-open': 'selectMenu_open',
            'ui-selectmenu-menu': 'selectMenu__menu'
        }
    });
    </script>

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>