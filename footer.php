
    <footer class="bg">
<section class="footer-top mt-4">
        <div class="feedback_block">
            <div class="container px-0 px-xl-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="footer-notice d-flex flex-column align-items-center align-items-xl-start w-100">
                                <div class="img position-relative pb-0 pt-3 pb-xl-3">
                                        <img src="/img/sert.png"
                                             alt="Сертификация вашей продукции"
                                             title="Сертификация вашей продукции"
                                             class="img-fluid"/>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
          <div class="feedback-c mt-lg-n5  bg footer_popup">
            <div>
              <h3 class="footer_textpopup">Заказать звонок</h3>
              <p class="footer_textpopup">Заполните форму, и мы перезвоним Вам:</p>
                <form action="mail.php" method="POST" class="modal_form footer_form">
                    <input class="modal_input footer_inputpopup" type="text" name="name" placeholder="Введите имя">
                    <div class="cl"></div>
                    <div class="iti iti--allow-dropdown footer_flag">
                      <div class="iti__flag-container">
                        <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0">
                          <div class="iti__arrow"></div>
                        </div>
                      </div>
                      <input class="modal_input phoneClassFooter footer_inputpopup" type="tel" name="phone" placeholder="Введите телефон" required="" autocomplete="off" data-intl-tel-input-id="1">
                    </div>
                  <div class="cl"></div>
                    <input type="hidden" name="source" value="Форма зявки на перезвон">
                    <button type="submit" class="btn btn_top btn_top--call" onclick="wsKiller.checkFormOnSubmit($(this).closest('form'))">Отправить</button>
                    </form>
                </div>
          </div>

                           </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
      var elements = document.querySelectorAll('.phoneClassFooter');
      elements.forEach(function(el, index) {
      window.intlTelInput(el, {
        autoHideDialCode: false,
        dropdownContainer: document.body,
        initialCountry: "auto",
        geoIpLookup: function(callback) {
          $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
          });
        },
        nationalMode: false,
        onlyCountries: ['ru', 'by', 'ua', 'kz'],
        placeholderNumberType: "MOBILE",
        preferredCountries: ['ru'],
        utilsScript: "https://www.sk-sertifikat.ru/js/utils.js",
      });
      });
    </script> 





    <section class="footer-bottom">
      
        <div class="bottom-menu-wrapper">
          <div class="container">        
            <ul class="bottom-menu list-unstyled py-2">
              <li class="bottom-menu__item">
                <a href="/#" class="bottom-menu__link"><img alt="СК Сертификат" src="/img/logow.svg"></a>
              </li>
              <li class="bottom-menu__item">
                <a href="/#sertification-types" class="bottom-menu__link">Сертификация</a>
              </li>
              <li lass="bottom-menu__item">
                <a href="/#thanks" class="bottom-menu__link">Благодарности</a>
              </li>
              <li>
                <a href="/#guarantee" class="bottom-menu__link">Преимущества</a>
              </li>
              <li lass="bottom-menu__item">
                <a href="/#faq" class="bottom-menu__link">Вопросы</a>
              </li>
              <li lass="bottom-menu__item">
                <a href="/#contacts" class="bottom-menu__link">Контакты</a>
              </li>
            </ul>
          </div>
      </div>

      <div class="container">        
        <p class="top_desc top_desc--bottom">ООО &laquo;Альфа-Сертификат&raquo; ОФОРМЛЕНИЕ ВСЕХ ВИДОВ РАЗРЕШИТЕЛЬНЫХ ДОКУМЕНТОВ НА <span>ЛЮБЫЕ</span> ИЗДЕЛИЯ, СЫРЬЕ И ОБОРУДОВАНИЕ</p>
        <!-- <div class="top_mail">
            <a class="mailLink" href="mailto:info@sk-sertifikat.ru">info@sk-sertifikat.ru</a><br>
            <a class="mailLink" href="tel:+79043433544">+7 (904) 343-35-44</a> -->
        <!-- </div> --> 

        <div class="top_address top_address--bottom">   
          Ростовская обл., г. Таганрог<br> ул. Москатова, д. 15
          <!-- <p class="phone_perezvon" data-toggle="modal" data-target="#modalPerezvon">Перезвоните мне →</p> -->
        </div>

        <div class="top_phone top_phone--bottom">   
          <a class="mailLink mailLink--bottom" href="mailto:info@sk-sertifikat.ru">info_alfasert@mail.ru</a><br>
          <a class="mailLink mailLink--bottom" href="tel:+79043433544">+7 (904) 343-35-44</a>      
          <!-- <p class="phone_perezvon" data-toggle="modal" data-target="#modalPerezvon">Перезвоните мне →</p> -->
        </div>
      </div>   
            </div>
        </div>
    </div>
</section>
</footer>

