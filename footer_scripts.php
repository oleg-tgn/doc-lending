<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="gh/fancyapps/fancybox%403.5.6/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="widget/cbk.js?wcb_code=98ca9014dab9ee720df8e55f0190a820" charset="UTF-8" async=""></script> 
    <script> $(document).ready(function() { $('body').on('click', '[type="submit"]', function(){ if(typeof wsKiller !== 'undefined'){wsKiller.checkFormOnSubmit($(this).closest('form')); } })}) </script> <script> $(document).ready(function() { $('[type="submit"]').click(function() { if(typeof wsKiller !== 'undefined'){ wsKiller.checkFormOnSubmit($(this).closest('form')); } })}) </script>

    <script> jQuery(document).ready(function() { jQuery('body').on('click', '[type="submit"]', function(){ if(typeof wsKiller !== 'undefined'){wsKiller.checkFormOnSubmit(jQuery(this).closest('form')); } })}) </script>


    <link rel="stylesheet" href="widget/cbk.css">
    <link rel="stylesheet" href="gh/fancyapps/fancybox%403.5.6/dist/jquery.fancybox.min.css">

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
	<script>
    	$(document).ready(function () {











    		$('.s_block a, .s_block img').click(function() {
          console.log('11111');
          var count = $(this).attr('data-count');
          if ($("div").is(".more_info1")) {
            $('#more_info1').slideUp (600, function() {
              $('#more_info1').load('ajax/sert'+ count +'.html');
              $('#more_info1').slideDown (600);
            })
          } else {
				  $('#more_info1').load('ajax/sert'+ count +'.html', function(){$('#more_info1').slideDown (600);});

          }
    			return false;
    		});



	$('.search').submit(function() {
		if ($('.search_input').val() !== '') {
		$('.search_btn').addClass('search_btn_load');
		setTimeout(function() {
			$('#search_result').text($('.search_input').val());
			$('#modalSearch').modal('show');
			$('.search_btn').removeClass('search_btn_load');

		}, 1000);}
		else {
			alert('Введите нименование продукции или услуги');
		}
		return false;
	});


window.ws_OnCallbackOnlineCall = window.ws_OnCallbackDeferredCall = function(data) {
var _ctreq = function(data, sid = 20947, nid = 7) {
var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest(),
post_data = Object.keys(data).reduce(function(a, k) {if(!!data[k]){a.push(k + '=' + encodeURIComponent(data[k]));}return a}, []).join('&'),
url = 'https://api-node'+nid+'.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
request.open("POST", url, true); request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); request.send(post_data);
}
try{
fio = (data.name != undefined && data.name!=null)?data.name:'';
phone = (data.phone != undefined && data.phone!=null)?data.phone:'';
email = (data.email != undefined && data.email!=null)?data.email:'';
if (window.call_value != undefined && window.call_value != null && window.call_value != 0) {
	if (!!phone||!!email) _ctreq({subject: "Звонок Envybox", fio: fio, phoneNumber: phone, email: email, sessionId: window.call_value });
} else {
	if (!!phone||!!email) _ctreq({subject: "Звонок Envybox", fio: fio, phoneNumber: phone, email: email});
}
} catch(e) {console.log(e)}
}


window.ws_OnChatOfflineMessage = window.ws_OnChatVisitorIntroduced = function(data) {
var _ctreq = function(data, sid = 20947, nid = 7) {
var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest(),
post_data = Object.keys(data).reduce(function(a, k) {if(!!data[k]){a.push(k + '=' + encodeURIComponent(data[k]));}return a}, []).join('&'),
url = 'https://api-node'+nid+'.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
request.open("POST", url, true); request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); request.send(post_data);
}
try{
fio = (data.name != undefined && data.name!=null)?data.name:'';
phone = (data.phone != undefined && data.phone!=null)?data.phone:'';
email = (data.email != undefined && data.email!=null)?data.email:'';
if (window.call_value != undefined && window.call_value != null && window.call_value != 0) {
	if (!!phone||!!email) _ctreq({subject: "Заявка из онлайн-чата", fio: fio, phoneNumber: phone, email: email, sessionId: window.call_value });
} else {
	if (!!phone||!!email) _ctreq({subject: "Заявка из онлайн-чата", fio: fio, phoneNumber: phone, email: email});
}
} catch(e) {console.log(e)}
}




	   });
	</script>