<footer class="bg">
  <section class="footer-top mt-4">
    <div class="feedback_block">
      <div class="container px-0 px-xl-3">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="footer-notice d-flex flex-column align-items-center align-items-xl-start w-100">
              <div class="img position-relative pb-0 pt-3 pb-xl-3">
                <img src="/img/sert.png" alt="Сертификация вашей продукции" title="Сертификация вашей продукции" class="img-fluid" />
              </div>

            </div>
          </div>
          <div class="col-12 col-lg-1"></div>
          <div class="col-12 col-lg-5">
            <div class="feedback-c mt-lg-n5  bg footer_popup" id="feedback">
              <div>
                <h3 class="footer_textpopup">Обратная связь</h3>
                <?php
                if (isset($_GET['mail']) && $_GET['mail'] == 'success') :
                ?>
                  <div class="alert alert-success" role="alert">
                    Спасибо за ваш отзыв!
                  </div>
                <?php else : ?>
                  <p class="footer_textpopup">Напишите свой отзыв о нашей работе:</p>
                  <form action="/mail.php" method="POST" class="modal_form footer_form">
                    <input class="modal_input footer_inputpopup" type="text" name="feedback_name" required placeholder="Ваше имя">
                    <input class="modal_input footer_inputpopup" type="email" name="feedback_email" required placeholder="Ваш Email">
                    <input class="modal_input footer_inputpopup" type="tel" name="feedback_tel" required placeholder="Ваш телефон">
                    <textarea class="modal_input footer_inputpopup" name="feedback_text" id="" cols="30" rows="5" placeholder="Ваш отзыв"></textarea>
                    <button type="submit" class="btn btn_top btn_feedback" onclick="wsKiller.checkFormOnSubmit($(this).closest('form'))">Отправить</button>
                  </form>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="footer-bottom">
    <div class="bottom-menu-wrapper">
      <div class="container">
        <ul class="bottom-menu list-unstyled py-2">
          <li class="bottom-menu__item">
            <a href="/" class="bottom-menu__link"><img class="bottom-menu__link" alt="Альфа Сертификат" src="/img/logow.svg"></a>
          </li>

          <li class="bottom-menu__item">
            <a href="/#sertification-types" class="bottom-menu__link">Сертификация</a>
          </li>
          <li class="bottom-menu__item">
            <a href="/#algorithm" class="bottom-menu__link">Алгоритм</a>
          </li>
          <li class="bottom-menu__item">
            <a href="/#guarantee" class="bottom-menu__link">Преимущества</a>
          </li>
          <li class="bottom-menu__item">
            <a href="/#thanks" class="bottom-menu__link">Благодарности</a>
          </li>
          <li class="bottom-menu__item">
            <a href="/#faq" class="bottom-menu__link">Вопросы</a>
          </li>
          <li class="bottom-menu__item">
            <a href="/#contacts" class="bottom-menu__link">Контакты</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="container">
      <p class="top_desc top_desc--bottom">ООО &laquo;Альфа-Сертификат&raquo; оформление всех видов разрешительных документов на <span>любые</span> изделия, сырье и оборудование</p>



      <div class="top_phone top_phone--bottom">
        <a class="mailLink_top mailLink--bottom" href="mailto:<?=$EMAIL?>">
          <img class="tel_logo" alt="mail" src="/img/icons/mail_w.svg">
          <?=$EMAIL?>
        </a><br>
        <a class="mailLink mailLink--bottom" target="_blank" href="https://telegram.me/Alfa_Sert_Trilion">
          <img class="tel_logo" alt="Telegram" src="/img/icons/telegram-1.svg">
          Написать в Telegram
        </a><br>
        <a class="mailLink mailLink--bottom" target="_blank" href="https://wa.me/+79043433544">
          <img class="tel_logo" alt="WhatsApp" src="/img/icons/whatsapp-symbol.svg">
          Написать в WhatsApp
        </a>
      </div>

      <div class="top_telephone">
        <a class="telephone_link_bot" href="tel:+78002011935">
          <?= $TELEPHONE ?>
        </a><br>
        <a class="heder_callmy js-open-callbackkiller" href="#">
          Перезвоните мне
        </a>
      </div>

      <div class="top_address top_address--bottom">
        <?= $ADDRESS ?>
      </div>

    </div>
    </div>
    </div>
    </div>
  </section>
</footer>
