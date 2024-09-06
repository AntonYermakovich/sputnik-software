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
                    <div class="form-field form-field__bots">
                        <select class="form__select" name="bot">
                            <option selected value="1">Бот 1</option>
                            <option value="2">Бот 2</option>
                            <option value="3">Бот 3</option>
                            <option value="4">Бот 4</option>
                            <option value="5">Бот 5</option>
                            <option value="6">Бот 6</option>
                        </select>
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