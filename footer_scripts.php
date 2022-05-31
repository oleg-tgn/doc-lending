    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.js"></script>
    <script src="/gh/fancyapps/fancybox%403.5.6/dist/jquery.fancybox.min.js"></script> 
    <script> $(document).ready(function() { $('body').on('click', '[type="submit"]', function(){ if(typeof wsKiller !== 'undefined'){wsKiller.checkFormOnSubmit($(this).closest('form')); } })}) </script> <script> $(document).ready(function() { $('[type="submit"]').click(function() { if(typeof wsKiller !== 'undefined'){ wsKiller.checkFormOnSubmit($(this).closest('form')); } })}) </script>

    <script> jQuery(document).ready(function() { jQuery('body').on('click', '[type="submit"]', function(){ if(typeof wsKiller !== 'undefined'){wsKiller.checkFormOnSubmit(jQuery(this).closest('form')); } })}) </script>

    <script type="text/javascript" src="/js/bg_slide.js"></script>

    <link rel="stylesheet" href="/css/intlTelInput.css">
    <script src="/js/intlTelInput.js"></script>
    <script>
      var elements = document.querySelectorAll('.phoneClass');
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



  <script>
    $(window).scroll(function(){
          if ($(this).scrollTop() > 500) {
              $('nav').removeClass('out');
          } else {
              $('nav').addClass('out');
          }
    });
  </script>

  <script>
    $('.js-open-callbackkiller').on('click', function() {
      $('.callbackkiller.cbk-phone')[0].click();
    });
  </script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.swiper', {
  // Optional parameters

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>


<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=54078c0b380ec61dd2df2d3bdf11d842" charset="UTF-8" async></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script>
  const sections = document.querySelectorAll("section");
  const navLi = document.querySelectorAll(".serviceMenu .nav.navbar-nav li");
  window.onscroll = () => {
    var current = "";

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      if (pageYOffset >= sectionTop - 60) {
        current = section.getAttribute("id");
      }
    });

    navLi.forEach((li) => {
      li.classList.remove("active");
      if ($(li).data('link') == current) {
        li.classList.add("active");
      }
    });
  };
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(88907066, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88907066" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

<script>
  function showHiddenInfo(idHide, idShow) {
   $(idHide).hide();
   $(idShow).css("display", "block");
  }
</script>