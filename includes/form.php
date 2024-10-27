<div class="sender">
    <div class="form">
        <h2>Связаться с нами</h2>

        <form id="form-id" action="send.php" method="POST">
            <div class="form__content">
                <div class="form-field form-field__name">
                    <input type="text" name="name" placeholder="Имя" required>
                </div>
                <div class="row">
                    <div class="form-field form-field__company">
                        <input type="text" name="company" placeholder="Название компании" required>
                    </div>
                </div>

                <div class="form-field form-field__message">
                    <textarea name="message" name="message" placeholder="Сообщение" required></textarea>
                </div>

                <div class="row">
                    <div class="icon">
                        <img src="assets/img/form-phone.png" alt="Mobile">
                    </div>
                    <div class="form-field form-field__number">
                        <input type="text" name="phone" id="phone" >
                    </div>
                </div>
            </div>

            <button disabled id="btn">Отправить</button>
        </form>

    </div>
</div>