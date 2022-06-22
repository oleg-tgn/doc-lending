<?php
include("include/geo/SxGeo.php");
$SxGeo = new SxGeo('include/geo/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY); // Самый производительный режим, если нужно обработать много IP за раз

$ip = $_SERVER['REMOTE_ADDR'];

$geoCity = $SxGeo->getCity($ip);
$city = "Таганрог";
if ($geoCity) {
  $city =  $geoCity['city']['name_ru'];
}
?>

<div class="container cont1_1">
  <div class="col-md-6 no-pad">
    <h1>Сертификаты для всех маркетплейсов</h1>
    <p class="first_desc">За 1 день в г. <?=$city?> <span>сертифицируем все виды продукции</span> с&nbsp;внесением в&nbsp;реестр ФСА и гарантией легитимности</p>
    <div class="col-xs-4 utp">
      <img alt="Альфа Сертификат" src="img/icons/utp_1.png">
      <p class="utp_text"><span>Отправим оригинал <br>бесплатно</span> в любую <br>точку РФ за 5 дней</p>
    </div>
    <div class="col-xs-4 utp">
      <img alt="Альфа Сертификат" src="img/icons/utp_2.png">
      <p class="utp_text"><span>Уложимся в срок <br>по договору</span> или <br>вернем деньги</p>
    </div>
    <div class="col-xs-4 utp">
      <img alt="Альфа Сертификат" src="img/icons/utp_3.png">
      <p class="utp_text"><span>Делаем приятные <br>скидки</span> постоянным <br>клиентам</p>
    </div>
    <div class="cl"></div>
    <button class="btn btn_top anim-btn js-open-callbackkiller" data-toggle="modal" data-target="#modalCalc">Рассчитать стоимость бесплатно</button>
  </div>
  <div class="col-md-6 no-pad glav_sert__wrap">
    <img alt="Альфа Серт" class="glav_sert" src="img/brands.jpg">
  </div>
</div>