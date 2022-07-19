


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/feedback-mail.php" method="POST">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Обратная связь</h4>
            </div>
            <div class="modal-body modal-body--feedback">
                <p class="feedback-popup__text">
                    Оцените, пожалуйста, насколько вы удовлетворены сайтом.<br> Где 1 - совсем не удовлетворен, 5 - полностью удовлетворен.
                </p>

                <?php $title = "Информационное наполнение*"; $name = "informationContent"; include("star-rating.php"); ?>
                <?php $title = "Удобство навигации*"; $name = "easyNavigate"; include("star-rating.php"); ?>
                <?php $title = "Дизайн, визуальное представление*"; $name = "design"; include("star-rating.php"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn_top btn_top--default btn_feedback" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn_top btn_feedback">Отправить</button>
            </div>
        </form>
    </div>
  </div>
</div>

<section class="feedback" id="feedbackBtn">
    <div class="container feedback__container">
        <!-- Button trigger modal -->
        <h2 class="text-center feedback__title">Расскажите, чего вам не хватило на сайте</h2>
        <?php if (isset($_GET['feedback']) && $_GET['feedback'] == 'success') : ?>
            <div class="alert alert-success" role="alert">
                Спасибо за ваш отзыв!
            </div>
        <?php endif; ?>
        <button type="button" class="btn btn_top feedback__btn" data-toggle="modal" data-target="#myModal">
            Пройти опрос за 1 минуту
        </button>
    </div>
</section>
