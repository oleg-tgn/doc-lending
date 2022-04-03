    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="gh/fancyapps/fancybox%403.5.6/dist/jquery.fancybox.min.js"></script> 
    <script> $(document).ready(function() { $('body').on('click', '[type="submit"]', function(){ if(typeof wsKiller !== 'undefined'){wsKiller.checkFormOnSubmit($(this).closest('form')); } })}) </script> <script> $(document).ready(function() { $('[type="submit"]').click(function() { if(typeof wsKiller !== 'undefined'){ wsKiller.checkFormOnSubmit($(this).closest('form')); } })}) </script>

    <script> jQuery(document).ready(function() { jQuery('body').on('click', '[type="submit"]', function(){ if(typeof wsKiller !== 'undefined'){wsKiller.checkFormOnSubmit(jQuery(this).closest('form')); } })}) </script>

    <script type="text/javascript" src="/js/bg_slide.js"></script>

<script>
    (function( $ ) {
        var myCall = setInterval(envyZvonok);
        function envyZvonok() {
        var form = $('form');
            for(var i = 0; i<form.length; i++){
                if (typeof WBK !== 'undefined'){
                    if(wsKiller.settings.killerFormCall==1){
                        var onVal = $(form[i]).find('[type="submit"],[type="button"],button').attr('onclick');
                        if (!/wsKiller/.test(onVal)){
                            $(form[i]).find('[type="submit"],[type="button"],button').attr('onclick',"wsKiller.checkFormOnSubmit($(this).closest('form'))");
                        }
                    }else if(wsKiller.settings.killerFormCall==2){
                        var onVal = $(form[i]).find('[type="submit"],[type="button"],button').attr('onclick');
                        if (!/wsKiller/.test(onVal)){
                            $(form[i]).find('[type="submit"],[type="button"],button').attr('onclick',"wsKiller.checkFormOnSubmit($(this).closest('.callbackwidget-call-form'))");
                        }
                    }
                }
            }
        }
    })(jQuery);
</script> 

     <link rel="stylesheet" href="css/intlTelInput.css">
    <script src="js/intlTelInput.js"></script>
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



<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=54078c0b380ec61dd2df2d3bdf11d842" charset="UTF-8" async></script>

<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=54078c0b380ec61dd2df2d3bdf11d842" charset="UTF-8" async></script>
