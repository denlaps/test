
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->

        <!-- [MAIN CONTENT] -->
        <!-- [/End Head] -->

        <!-- [MAIN CONTENT] -->
        <main class="defaultPage">
            <h1>Гарантии и возврат</h1>
            <span>
                1. Обмен и возврат товаров надлежащего качества.​ 1.1. Продавец принимает к обмену и возврату новый
                товар и аксессуары надлежащего качества в розничном магазине, где он был приобретен, в течение 14-ти
                дней, не считая дня их покупки (продажи) (в соответствии с ч.1 ст.25 Закона «О защите прав
                потребителей») 1.2. Потребитель вправе обменять непродовольственный товар надлежащего качества на
                аналогичный товар у продавца, у которого этот товар был приобретен, если указанный товар не подошел по
                форме, габаритам, фасону, расцветке, размеру или комплектации. Обмен непродовольственного товара
                надлежащего качества проводится, если указанный товар не был в употреблении, сохранены его товарный вид,
                потребительские свойства, пломбы, фабричные ярлыки, а также имеется товарный чек или кассовый чек либо
                иной подтверждающий оплату указанного товара документ. Отсутствие у потребителя товарного чека или
                кассового чека либо иного подтверждающего оплату товара документа не лишает его возможности ссылаться на
                свидетельские показания (в соответствии с ч.1 ст.25 Закона «О защите прав потребителей») ​ 1.3. В
                случае, если аналогичный товар отсутствует в продаже на день обращения потребителя к продавцу,
                потребитель вправе отказаться от исполнения договора купли-продажи и потребовать возврата уплаченной за
                указанный товар денежной суммы. Требование потребителя о возврате уплаченной за указанный товар денежной
                суммы подлежит удовлетворению в течение трех дней со дня возврата указанного товара. По соглашению
                потребителя с продавцом обмен товара может быть предусмотрен при поступлении аналогичного товара в
                продажу. Продавец обязан незамедлительно сообщить потребителю о поступлении аналогичного товара в
                продажу (в соответствии с ч.2 ст.25 Закона «О защите прав потребителей»)​ 1.4. Товар надлежащего
                качества, бывший в употреблении, не подлежит обмену и возврату (в соответствии с ч.1 ст.25 Закона «О
                защите прав потребителей»)​ 1.5. Товары надлежащего качества, приобретённые с использованием подарочных
                сертификатов, не подлежат возврату, но могут быть обменены на аналогичный товар. ​ 2. Обмен и возврат
                товаров ненадлежащего качества. ​ 2.1. Продавец принимает к обмену и возврату новый товар и аксессуары
                ненадлежащего качества в розничном магазине, где он был приобретен, в течение 14-ти дней, не считая дня
                их покупки. ​ 2.2. Потребитель в случае обнаружения в товаре существенных недостатков, если они не были
                оговорены продавцом, по своему выбору вправе: - потребовать замены на товар этой же марки (этих же
                модели и (или) артикула); - потребовать замены на такой же товар другой марки (модели, артикула) с
                соответствующим перерасчетом покупной цены; - потребовать соразмерного уменьшения покупной цены; -
                потребовать незамедлительного безвозмездного устранения недостатков товара или возмещения расходов на их
                исправление потребителем или третьим лицом; - отказаться от исполнения договора купли-продажи и
                потребовать возврата уплаченной за товар суммы. ​ 2.3. Обмен и возврат товаров ненадлежащего качества в
                течении гарантийного срока производятся только при невозможности проведения ремонта (устранения
                недостатков силами продавца). Указанные требования подлежат удовлетворению в одном из следующих случаев:
                - обнаружение существенного недостатка товара, которые невозможно устранить соразмерными затратами; -
                нарушение установленных законодательством РФ сроков устранения недостатков товара; ​
            </span>
            <button class="orangeButton" data-modal=".modal__question">У меня есть вопрос</button>
        </main>
        <!-- [/END CONTENT] -->

        <!-- [FOOTER] -->
        <?php
            include ('elements/footer.php');
        ?>
        <!-- [/END FOOTER] -->
    </section>

    <!-- [MODAL] -->
    <div class="modalWrapper">
        <section class="modal modal_medium modal__question">
            <h3>Задать вопрос</h3>
            <form action="">
                <div class="form-box">
                    <input type="text" placeholder="Ваше имя">
                    <input type="text" placeholder="Ваш телефон | e-mail">
                    <input type="text" placeholder="Ваш город">
                    <input type="text" placeholder="Ваше сообщение">
                </div>
                <div class="form-box">
                    <button class="sendFile">Выбрать файл</button>
                    <input type="file">
                    <input type="submit" value="Отправить">
                </div>
                <span class="uText">Нажимая на кнопку «Отправить», я соглашаюсь на обработку персональных данных и
                    ознакомлен(а) с условиями конфиденциальности.</span>
            </form>
        </section>
    </div>
    <!-- [/END MODAL] -->

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- [/SCRIPTS] -->
</body>

</html>