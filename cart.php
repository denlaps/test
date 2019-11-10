<?php 
include ('elements/header.php');
?>
        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
        ?>

            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/cart.php">Корзина</a></li>
                </nav>
                <h1>Ваш заказ</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="basketPage">
                    <section class="basketPage__itemList">
                        
                    </section>
                    <figure class="basketPage__freeShip orangeBlock">
                        <img src="img/deliveryMan.png" alt="">
                        <div class="orangeBlock__wrapper">
                            <figcaption>
                                <h2>При заказе на 2 000 руб.<br>доставка - бесплатно!</h2>
                            </figcaption>
                        </div>
                    </figure>
                    <section class="basketPage__info">
                        <figure>
                            <img src="img/deliveryCar.jpg" alt="">
                            <figcaption>Оплата и доставка</figcaption>
                        </figure>
                        <figure>
                            <img src="img/deliveryGarant.jpg" alt="">
                            <figcaption>Гарантии и возврат</figcaption>
                        </figure>
                    </section>
                    <h2>Оформление заказа</h2>
                    <div class="deliveryForm">
                        <section class="deliveryForm__userInfo">
                            <input type="text" placeholder="Ваше имя*" id="name">
                            <input type="text" placeholder="Ваша фамилия*" id="lastname">
                            <input type="text" placeholder="Ваш e-mail*" id="email">
                            <input type="text" placeholder="Ваш телефон*" id="phone">
                            <input type="text" placeholder="Город*" id="city">
                            <select class="selectType" name="" id="type">
                                <option value="1">300 руб. / 2 р.дня / курьер</option>
                                <option value="2">300 руб. / 2 р.дня / курьер</option>
                                <option value="3">300 руб. / 2 р.дня / курьер</option>
                                <option value="4">300 руб. / 2 р.дня / курьер</option>
                            </select>
                            <div class="deliveryForm__address">
                                <input type="text" placeholder="Улица" id="street">
                                <input type="text" placeholder="Дом" id="house">
                                <input type="text" placeholder="Кв./офис" id="apt">
                            </div>
                        </section>
                        <section class="deliveryForm__promo">
                            <section>
                                <ul class="promoLinks">
                                    <li><a href="">Ввести промокод</a></li>
                                    <li><a href="">Потратить бонусные баллы</a><button class="helpBtn"></button></li>
                                </ul>
                                <div class="addBonus">
                                    <input type="text" id="bonus" placeholder="Доступно 0 бонусов">
                                    <button>ОК</button>
                                </div>
                            </section>

                            <ul class="blockPrice">
                                <li>
                                    <span class="blockPrice__caption">Стоимость доставки</span>
                                    <span class="blockPrice__value">500 руб.</span>
                                </li>
                                <li>
                                    <span class="blockPrice__caption">Сумма к оплате</span>
                                    <span class="blockPrice__value"> руб.</span>
                                </li>
                                <li>
                                    <span class="blockPrice__caption">Способ оплаты</span>
                                    <select>
                                        <option value="">Paypal</option>
                                        <option value="">По карте</option>
                                        <option value="">Наличными</option>
                                    </select>
                                </li>
                            </ul>

                            <section class="sendOrder">
                                <button onclick="order()">Отправить заказ</button>
                                <!-- <span>Нажимая на кнопку «Отправить заказ», я соглашаюсь на обработку персональных данных и ознакомлен(а) с условиями конфиденциальности. Если у вас есть вопросы, позвоните нам по номеру 8-888-888-88-88.</span> -->
                            </section>
                        </section>
                    </form>
                </main>
                <!-- [/END CONTENT] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    
    <?php include('elements/footer.php') ?>

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/main.js"></script>

    <!-- Custom -->
    <script>
    var basket = localStorage.getItem("basket");
    var total = 0;
    var basketArray = { basket: [] };
        
        if (basket !== null && basket !== '') {
            var basketArray = JSON.parse(basket);

            basketArray.basket.forEach((el, index) => {
                console.log(index);
                $.get('/api/good.php?id=' + el.good_id, (res) => {
                    if (!el.color && res.colors[0] !== null && res.colors[0] !== undefined) {
                        el.color = res.colors[0].hex;
                        basketArray.basket[index].color = '#' + res.colors[0].hex;
                        localStorage.setItem('basket', JSON.stringify(basketArray));
                    }
                        
                    if (!el.size && res.sizes[0] !== null && res.sizes[0] !== undefined) {
                        el.size = res.sizes[0].name;
                        basketArray.basket[index].size = res.sizes[0].name;
                        localStorage.setItem('basket', JSON.stringify(basketArray));
                    }

                    var sizes = '';
                    res.sizes.forEach((size) => {
                        if (size.name != el.size) {
                            sizes += `<option value="${size.name}">${size.name}</option>`;
                            console.log('sz'+ el.size + ' ' + size.name)
                        } else {
                            console.log(size.name + ' ' + el.size)
                            sizes += `<option value="${el.size}" selected="selected">${el.size}</option>`;
                        }
                    });
                    total = total + (+el.price) * (+el.quantity);
                    $('.blockPrice__value').html(total);
                    $('.basketPage__itemList').append(`<figure class="goodItem" id="good${index}"> 
                        <div class="goodItem__wrapper">
                        <img src="` + el.photo + `" alt="">
                        <figcaption>
                        <a href=good.php?id="` + el.good_id + `">` + el.name + `</a>
                        <span>Артикул: ` + el.art + `</span>
                        </figcaption>
                        </div>
                        <span class="goodItem__color" style="background-color: ` + el.color + `;"></span>
                        <select class="selectSize">
                        ` + sizes + `
                        </select>
                        <div class="itemCounter">
                        <button class="itemCounter__minus" onclick="decreaseQuantity(${index})">-</button>
                        <input id="q${index}" type="text" value="` + el.quantity + `">
                        <button class="itemCounter__plus" onclick="increaseQuantity(${index})">+</button>
                        </div>
                        <span class="goodItem__price">` + el.price + ` руб.</span>
                        <button class="goodItem__close" onclick="removeElement(${index})">
                        <i class="fas fa-times" aria-hidden="true"></i>
                        </button>
                        </figure>
                        `);      
                });
                      
            });
        }

        $('.blockPrice__value').html(total);
        function order() {
            var orderData = basketArray;
            orderData.name = $('#name').val();
            orderData.lastname = $('#lastname').val();
            orderData.email = $('#email').val();
            orderData.phone = $('#phone').val();
            orderData.city = $('#city').val();
            orderData.street = $('#street').val();
            orderData.house = $('#house').val();
            orderData.apt = $('#apt').val();
            orderData.bonus = $('#bonus').val();
            orderData.payment = total - (+orderData.bonus);
            orderData.total = total;

            $.post("api/order.php", basketArray).done(function(data) {
                console.log(data);
            });
        }

        function increaseQuantity(i) {
            basketArray.basket[i].quantity++;
            $("#q" + i).val(basketArray.basket[i].quantity);
            console.log(basketArray.basket[i].quantity);
            localStorage.setItem('basket', JSON.stringify(basketArray));
        }
        function decreaseQuantity(i) {
            if (basketArray.basket[i].quantity > 1) {
                basketArray.basket[i].quantity--;
                $("#q" + i).val(basketArray.basket[i].quantity);
            }
            console.log(basketArray.basket[i].quantity);
            localStorage.setItem('basket', JSON.stringify(basketArray));
        }
        function removeElement(i) {
            basketArray.basket.splice(i, 1); 
            $("#good" + i).remove();
            localStorage.setItem('basket', JSON.stringify(basketArray));
        }
    $('.selectSize').selectmenu({
        classes: {
            'ui-selectmenu-button-closed': 'selectSize_closed',
            'ui-selectmenu-button-open': 'selectSize_open',
            'ui-selectmenu-menu': 'selectSize__menu'
        }
    });

    $('.blockPrice select').selectmenu({
        classes: {
            'ui-selectmenu-button-closed': 'selectPrice_closed',
            'ui-selectmenu-button-open': 'selectPrice_open',
            'ui-selectmenu-menu': 'selectPrice__menu'
        }
    });

    $('.selectType').selectmenu({
        classes: {
            'ui-selectmenu-button-closed': 'selectType_closed',
            'ui-selectmenu-button-open': 'selectType_open',
            'ui-selectmenu-menu': 'selectType__menu'
        }
    });
    </script>
    <!-- /Custom -->
    <!-- [/SCRIPTS] -->
</body>
</html>