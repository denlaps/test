<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frimis</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="libs/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/toast.css">
    <link rel="stylesheet" href="css/additional.css">
    <link rel="stylesheet" href="libs/owlcarousel/owl.theme.default.min.css">
    <script src="https://kit.fontawesome.com/c6f437d80c.js" crossorigin="anonymous"></script>
    <script>
        function search() {
            var q = $('#searchInput').val();
            if (q != '') {
                window.location.href = '/search.php?search=' + q;
            }
        }
    </script>
</head>
<body>
    <div class="mainWrapper">
        <!-- [HEAD] -->
        <header>
            <!-- [Top Nav] -->
            <nav>
                <li><a href="looks.php">Готовые образы</a></li>
                <li><a href="instashop.php">Instashop</a></li>
                <li>
                    <a href="#">Покупателям</a>
                    <ul>
                        <li><a href="stepsBuy.php">Как заказать</a></li>
                        <li><a href="page.php?id=pay">Оплата</a></li>
                        <li><a href="page.php?id=bonus">Бонусная программа</a></li>
                        <li><a href="page.php?id=delievery">Доставка</a></li>
                        <li><a href="page.php?id=guarantee">Гарантии</a></li>
                        <li><a href="page.php?id=refund">Возврат</a></li>
                        <li><a href="qaPage.php">Вопрос-ответ</a></li>
                        <li><a href="reviews.php">Отзывы</a></li>
                        <li><a href="aboutUs.php">О компании</a></li>
                        <li><a href="page.php?id=privacy">Политика конфиденциальности</a></li>
                    </ul>
                </li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><a href="franchise.php">Франшиза</a></li>
            </nav>
            <!-- [/End Nav] -->

            <!-- [Logo Panel] -->
            <section class="headBlock">
                <a href="/"><img src="img/logo.jpg" alt=""></a>
                <menu>
                    <li>
                        <form class="searchBox" action="">
                            <input id="searchInput" type="text" placeholder="Введите товар...">
                            <button onclick="search()"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    <li>
                        <button class="goodsHistory__show"><i class="far fa-eye"></i></button>
                        <section class="goodsHistory">
                            <figure>
                                <a href="#"><img src="uploads/cap.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#">Шапка женская</a>
                                    <span>Артикул: 12-54651-56</span>
                                    <strong>1 000 руб.</strong>
                                </figcaption>
                                <div class="goodsHistory__panel">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                    <button><i class="fas fa-times"></i></button>
                                </div>
                            </figure>
                            <figure>
                                <a href="#"><img src="uploads/cap.jpg" alt=""></a>
                                <figcaption>
                                    <a href="#">Шапка женская</a>
                                    <span>Артикул: 12-54651-56</span>
                                    <strong>1 000 руб.</strong>
                                </figcaption>
                                <div class="goodsHistory__panel">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                    <button><i class="fas fa-times"></i></button>
                                </div>
                            </figure>
                        </section>
                    </li>
                    <li>
                        <button><i class="far fa-heart"></i></button>
                    </li>
                    <li>
                        <button onclick="window.location.href = 'cart.php'"><i class="fas fa-shopping-basket"></i></button>
                    </li>
                </menu>
            </section>
            <script>
            </script>
            <!-- [/End Panel] -->
        </header>
        <!-- [/END HEAD] -->