<section class="row-fluid row-footer" id="contacts">
  <div class="container">
    <h2 class="text-center">Свяжитесь с нами <br class="hidden-xs">для бесплатной консультации:</h2>
    <div class="col-sm-4 footer_item">
      <img alt="Альфа Сертификат" src="img/icons/footer_1v2.png">
      <p><?= $ADDRESS ?></p>
    </div>
    <div class="col-sm-4 footer_item">
      <img alt="Альфа Сертификат" src="img/icons/footer_2v2.png">

      <div class="footer_item__hiddenPhone" id="hiddenPhoneFooterItem"> 8 800... <a href="#" onclick="event.preventDefault(); showHiddenInfo('#hiddenPhoneFooterItem', '#phoneFooterItem')">Показать</a> </div>
      <a id="phoneFooterItem" class="footer_item__call_link" href="tel:+74952041287">
        <?= $TELEPHONE ?>
      </a>
      <div class="footer_item__hiddenPhone" id="hiddenEmailFooterItem"> info@... <a href="#" onclick="event.preventDefault(); showHiddenInfo('#hiddenEmailFooterItem', '#emailFooterItem')">Показать</a> </div>
      <a id="emailFooterItem" class="footer_item__call_link" href="mailto:info@alfa-sertificat.ru">info@alfa-sertificat.ru</a>
    </div>
    <div class="col-sm-4 footer_item">
      <img alt="Альфа Сертификат" src="img/icons/footer_3v2.png">
      <p>Режим работы:<br>Пн-Пт с 9 до 18 (МСК)</p>
    </div>
    <div class="cl"></div>
  </div>
</section>