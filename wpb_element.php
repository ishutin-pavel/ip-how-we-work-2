<?php
/**
 *  Настройки заголовка в админке
 */

add_action( 'vc_before_init', 'ip_add_how_we_work_2' );
function ip_add_how_we_work_2() {
  vc_map(
    array(
      "name" => __( "Как мы работаем 2", "ip" ),
      "base" => "ip_how_we_work_2",
      "params" => array()
    )
  );
}

/**
 *  Шорткод
 */

add_shortcode( 'ip_how_we_work_2', 'ip_how_we_work_2_func' );
function ip_how_we_work_2_func( $atts ) {
 extract( shortcode_atts( array(
  'title' => 'Заголовок',
  'class' => ''
 ), $atts ) );

 return "
<div class='how-we-work-2__wrap'>
  <div class='how-we-work-2'>
    <div class='how-we-work-2__item how-we-work-2__item_1'>
      <div class='how-we-work-2__name'>Звонок</div>
      <div class='how-we-work-2__desc'>Вы звоните нам,<br> сообщаете размер<br> помещения, желаемый тип<br> уборки и детали</div>
    </div>
    <div class='how-we-work-2__item how-we-work-2__item_2'>
      <div class='how-we-work-2__name'>Оценка стоимости</div>
      <div class='how-we-work-2__desc'>Мы подсчитываем<br> примерную стоимость<br> работ</div>
    </div>
    <div class='how-we-work-2__item how-we-work-2__item_3'>
      <div class='how-we-work-2__name'>Осмотр помещения</div>
      <div class='how-we-work-2__desc'>Наш оценщик<br> осматривает<br> помещение и<br> фиксирует нюансы</div>
    </div>
    <div class='how-we-work-2__item how-we-work-2__item_4'>
      <div class='how-we-work-2__name'>Перечень работ</div>
      <div class='how-we-work-2__desc'>Мы сообщаем точный<br> список проведенных<br> работ</div>
    </div>
    <div class='how-we-work-2__item how-we-work-2__item_5'>
      <div class='how-we-work-2__name'>Уборка</div>
      <div class='how-we-work-2__desc'>Мы производим уборку<br> выбранного помещения</div>
    </div>
  </div>
</div>
";
}
