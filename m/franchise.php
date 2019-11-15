
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->

         <!-- [MAIN CONTENT] -->
         <main>
             <h1>Франшиза</h1>
             <form class="franchiseForm" action="">
                 <span class="franchiseForm__hText">
                     Узнайте о преимуществах и условиях франчайзинга магазинов украшенийи аксессуаров «Assorti»,
                     оставив заявку и контактные данные.
                 </span>
                 <div class="franchiseForm__wrapper">
                     <div class="franchiseForm__left">
                         <input type="text" placeholder="Ваше имя">
                         <input type="text" placeholder="Ваш e-mail">
                         <input type="text" placeholder="Ваш телефон">
                     </div>
                     <div class="franchiseForm__right">
                         <textarea placeholder="Ваше сообщение"></textarea>
                         <input type="submit">
                     </div>
                 </div>
                 <span class="franchiseForm__uText">
                     Нажимая на кнопку «Отправить», я соглашаюсь на обработку персональных данных
                     и ознакомлен(а) с условиями конфиденциальности.
                 </span>
             </form>

             <button class="contactsPage__callMe" data-modal=".modal__question">Задать вопрос</button>
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