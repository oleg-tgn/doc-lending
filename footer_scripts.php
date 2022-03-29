    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
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



    <script>
    	$(document).ready(function () {
   		//initialize swiper when document ready
   		var docslider = new Swiper ('.slider1', {
   		  // Optional parameters
   		  slidesPerView: 5,
      	  spaceBetween: 30,
      	  grabCursor: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: true,
      },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
          1200: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
          570: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
          456: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
         }
	     });



      //initialize swiper when document ready
      var revslider = new Swiper ('.slider3', {
        // Optional parameters
        slidesPerView: 4,
          spaceBetween: 30,
          grabCursor: true,
          autoplay: false,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
          1200: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
          570: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
          456: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
         }
       });


        
         var tslider = new Swiper ('.slider2', {
        // Optional parameters
          slidesPerView: 3,
          grabCursor: true,
          autoplay: false,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
          1200: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 150,
          },
          570: {
            slidesPerView: 1,
            spaceBetween: 150,
          },
          456: {
            slidesPerView: 1,
            spaceBetween: 150,
          },
         }
       });     
        

	   });
	</script>

<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=54078c0b380ec61dd2df2d3bdf11d842" charset="UTF-8" async></script>

<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=54078c0b380ec61dd2df2d3bdf11d842" charset="UTF-8" async></script>
