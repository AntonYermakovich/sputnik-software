<?php include './includes/head.php' ?>

<section class="main">
    <div class="head">
        <div class="head__content">
            <div class="head__text">
                <div class="head__text-info">
                    <h2>HR</h2>
                </div>
                <p>
                    Сопоставление вакансий и резюме для массового рекрутинга
                    Бот на основе Искусственного Интеллекта, который проводит этап скрининга кандидатов.
                </p>
            </div>
        </div>
    </div>

    <div class="head__img">
        <img src="assets/img/p-hr.png" alt="Pic">
        <img class="icon__mobile" src="assets/img/m-hr.png" alt="Pic">
    </div>
</section>

<section class="cards ">
    <div class="cards__container container cards_center">
        <div class="card">
            <div class="card__title">
                <h2>Функционал</h2>
            </div>

            <div class="card__list">
                <div class="card__item">
                    <svg class="img">
                        <use href="assets/img/sprites.svg#logo" />
                    </svg>
                    <p>Загрузка вакансии в бота</p>
                </div>

                <div class="card__item">
                    <svg class="img">
                        <use href="assets/img/sprites.svg#logo" />
                    </svg>
                    <p>Уточнение деталей, на которые стоит обратить внимание при анализе резюме</p>
                </div>

                <div class="card__item">
                    <svg class="img">
                        <use href="assets/img/sprites.svg#logo" />
                    </svg>
                    <p>Загрузка резюме кандидатов, успешно прошедших отбор, для обучения
                        LLM-модели
                    </p>
                </div>
                <div class="card__item">
                    <svg class="img">
                        <use href="assets/img/sprites.svg#logo" />
                    </svg>
                    <p>Загрузка первичных задач в бота для отсеивания нерелевантных кандидатов
                    </p>
                </div>
                <div class="card__item">
                    <svg class="img">
                        <use href="assets/img/sprites.svg#logo" />
                    </svg>
                    <p>Автоматическая проверка задач ботом
                    </p>
                </div>
                <div class="card__item">
                    <svg class="img">
                        <use href="assets/img/sprites.svg#logo" />
                    </svg>
                    <p>Формирование выборки из людей, успешно прошедших скрининг
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './includes/footer.php' ?>