<div class="navbar-top-wrap">
  <div class="container">

    <div class="cont1">

      <div class="descwrap hidden-on-mobile">
        <p class="top_desc">ООО &laquo;Альфа-Сертификат&raquo;<br>ОГРН 1216100034215 от 08.12.2021г<br>ИНН 6154161721</p>
        <div class="top_telephone top_telephone__mobile">
        </div>
      </div>

      
      <div class="top_telephone">
        <a class="mailLink mailLink_top" target="_blank" href="https://telegram.me/Alfa_Sert_Trilion">
          <img class="tel_logo" alt="Telegram" src="/img/icons/telegram-1.svg">
        </a>
        <a class="mailLink mailLink_top" target="_blank" href="https://wa.me/+79043433544">
          <img class="tel_logo tel_logo--Whatsapp" alt="WhatsApp" src="/img/icons/whatsapp-symbol.svg">
        </a>
        <div>
          <div class="hiddenPhone" id="hiddenPhoneHeader"> 8 800...<a href="#" onclick="event.preventDefault(); showHiddenInfo('#hiddenPhoneHeader', '#phoneHeader')">Показать</a> </div>

          <a id="phoneHeader" class="telephone_link" href="tel:+78002019235">
            <?= $TELEPHONE ?>
          </a>
          <a class="heder_callmy js-open-callbackkiller hidden-on-mobile" href="#">
            Перезвоните мне
          </a>
        </div>
      </div>
      
      <div class="top_phone top_telephone-link">
        <div class="top_address top_address hidden-on-mobile">
          <?= $ADDRESS ?>
        </div>
        <div class="socweb">
          <div class="hiddenEmail" id="hiddenEmailHeader"> info@...<a href="#" onclick="event.preventDefault(); showHiddenInfo('#hiddenEmailHeader', '#showEmailHeader')">Показать</a> </div>

          <a id="showEmailHeader" class="mailLink mailLink_top emailHeader" href="mailto:<?=$EMAIL?>">
            <?=$EMAIL?>
          </a>
        </div>
      </div>
      
    </div>

  </div>
</div>


<nav class="navbar navbar-inverse serviceMenu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="serviceMenu__container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="serviceMenu__logo-link" href="/"><img class="bottom-menu__link" alt="Альфа Сертификат" src="/img/logow.svg"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav serviceMenu__links">
          <li data-link="sertification-types"><a href="/#sertification-types" class="serviceMenu__link">Сертификация</a></li>
          <li data-link="algorithm"><a href="/#algorithm" class="serviceMenu__link">Алгоритм</a></li>
          <li data-link="guarantee"><a href="/#guarantee" class="serviceMenu__link">Преимущества</a></li>
          <li data-link="thanks"><a href="/#thanks" class="serviceMenu__link">Благодарности</a></li>
          <li data-link="faq"><a href="/#faq" class="serviceMenu__link">Вопросы</a></li>
          <li data-link="contacts"><a href="/#contacts" class="serviceMenu__link">Контакты</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
</nav>