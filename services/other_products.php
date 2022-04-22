
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Другая продукция</title>
    <?php include('../head.php'); ?>
  </head>

  <body>


 <?php include('../header.php'); ?>

  <div class="row-fluid row-content" style="padding-top: 0px;">
    <div class="container">
      <div id="breadcrumbs" class="breadcrumbs">
        <span>
            <a title="Главная" href="/index.php"><span class="hidden-xs"><?=$SITE_NAME?></span></a>
        </span>
        <span class="bc-arrow">→</span>
        <span>Другая продукция</span>
      </div>
    </div>
  </div>

  <section class="textcanvas">
    <div class="container">
      <h1 class="textcanvas_title">Наша услуги</h1>
      <ul>
        <li class="textcanvas_text"><a href="/services/household_chemicals.php">Бытовая химия;</a></li>
        <li class="textcanvas_text"><a href="/services/for_children.php">Для детей и подростков;</a></li>
        <li class="textcanvas_text"><a href="/services/personal_protection.php">Индивидуальная защита;</a></li>
        <li class="textcanvas_text"><a href="/services/low_voltage_equipment.php">Низковольтное оборудование;</a></li>
        <li class="textcanvas_text"><a href="/services/toy_safety.php">Безопасность игрушек;</a></li>
        <li class="textcanvas_text"><a href="/services/light_industry.php">Легкая промышленность;</a></li>
        <li class="textcanvas_text"><a href="/services/furniture_products.php">Мебельная продукция;</a></li>
        <li class="textcanvas_text"><a href="/services/packaging_safety.php">Безопасноть упаковки;</a></li>
        <li class="textcanvas_text"><a href="/services/perfumes_and_cosmetics.php">Парфюмерия и косметика;</a></li>
        <li class="textcanvas_text"><a href="/services/food_products.php">Пищевая продукция;</a></li>
        <li class="textcanvas_text"><a href="/services/household_supplies.php">Хозяйственные принадлежности;</a></li>
      </ul>
      <p class="textcanvas_text">Если вы не нашли подходящей для себя услуги оставьте нам номер, мы свяжемся и составим для вас индивидуальное предложение.</p>

      <button class="btn btn_top anim-btn js-open-callbackkiller">Связаться с нами</button>
    </div>
  </section>


  <?php include('../footer.php'); ?>
  <?php include('../footer_scripts.php'); ?>


  </body>
</html>