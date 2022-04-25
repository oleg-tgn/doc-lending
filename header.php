<div class="navbar-top-wrap">
  <div class="container cont1">
    <p class="top_desc">ООО &laquo;Альфа-Сертификат&raquo; оформление всех видов разрешительных документов на <span>любые</span> изделия, сырье и оборудование</p>
    <div class="top_address">
      <?= $ADDRESS ?>
    </div>

    <div class="top_phone">
      <a class="mailLink mailLink_top" href="mailto:<?=$EMAIL?>"><?=$EMAIL?></a><br>
      <img class="tel_logo" alt="Telegram" src="/img/icons/telegram-1.svg">
      <img class="tel_logo" alt="WhatsApp" src="/img/icons/whatsapp-symbol.svg">
      <a class="mailLink" href="tel:+78002011935">
        <?= $TELEPHONE ?>
      </a>
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