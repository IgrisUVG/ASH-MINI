<?php
$menu=array(
	1=>array('linkL'=>'', 'name'=>'Картины', 'parent'=>0),
		7=>array('linkL'=>'/graphic', 'name'=>'Графика', 'parent'=>1),
		8=>array('linkL'=>'/oil', 'name'=>'Масло', 'parent'=>1),
	2=>array('linkL'=>'', 'name'=>'Роспись', 'parent'=>0),
		9=>array('linkL'=>'/doors', 'name'=>'Двери', 'parent'=>2),
		10=>array('linkL'=>'/moebel', 'name'=>'Мебель', 'parent'=>2),
		11=>array('linkL'=>'/dach', 'name'=>'Потолок', 'parent'=>2),
		12=>array('linkL'=>'/walls', 'name'=>'Стены', 'parent'=>2),
	3=>array('linkL'=>'', 'name'=>'Мозаика', 'parent'=>0),
		13=>array('linkL'=>'', 'name'=>'Геометрическая', 'parent'=>3, 'class'=>'geom'),
			15=>array('linkL'=>'/mosaicGeometry1', 'name'=>'Душевая на даче', 'parent'=>13),
			16=>array('linkL'=>'/mosaicGeometry2', 'name'=>'Морской холл с ракушками', 'parent'=>13),
			17=>array('linkL'=>'/mosaicGeometry3', 'name'=>'Фартук на кухне', 'parent'=>13),
			18=>array('linkL'=>'/mosaicGeometry4', 'name'=>'Мозаика на кухне', 'parent'=>13),
			19=>array('linkL'=>'/mosaicGeometry5', 'name'=>'Обеденный стол', 'parent'=>13),
		14=>array('linkL'=>'/mosaicGlass', 'name'=>'Стеклянное панно', 'parent'=>3),
	4=>array('linkL'=>'', 'name'=>'Витраж', 'parent'=>0),
		20=>array('linkL'=>'/vitrageZ', 'name'=>'Заливка', 'parent'=>4),
		21=>array('linkL'=>'/zero', 'name'=>'Обтекание', 'parent'=>4),
	5=>array('linkL'=>'', 'name'=>'Сумки', 'parent'=>0),
		22=>array('linkL'=>'/winter', 'name'=>'Зимняя коллекция', 'parent'=>5),
		23=>array('linkL'=>'/holliday', 'name'=>'Праздничная коллекция', 'parent'=>5),
		24=>array('linkL'=>'/decorated', 'name'=>'Расписные сумочки из кожи', 'parent'=>5),
		25=>array('linkL'=>'/sun', 'name'=>'Солнечная коллекция', 'parent'=>5),
		26=>array('linkL'=>'/style', 'name'=>'Стильная коллекция', 'parent'=>5),
		27=>array('linkL'=>'/cover', 'name'=>'Сумки-чехлы', 'parent'=>5),
		28=>array('linkL'=>'/velvet', 'name'=>'Сумочки из вельвета и джинсы', 'parent'=>5),
		29=>array('linkL'=>'/ensemble', 'name'=>'Сумочки с бонусом', 'parent'=>5),
		30=>array('linkL'=>'/folk', 'name'=>'Этно-фолк мотив', 'parent'=>5),		
);
// Построение дерева за один проход
foreach($menu as $menu_id=>$data) {
	// Прописать в родительском узле ссылку на пункт меню
  $menu[$data['parent']]['child'][$menu_id]=&$menu[$menu_id];
}     
// Готовый массив находится в $menu[0]['child']
$sorted_menu=(array)$menu[0]['child'];

echo '<ul class = "nav menu">';
foreach($sorted_menu as $top_menu) {
	// Меню верхнего уровня
  echo '<li><a href='.$top_menu['linkL'].'>'.$top_menu['name'].'</a>';
  	if (count($top_menu['child'])) {
    	// Субменю второго уровня
      echo '<ul>';
      foreach($top_menu['child'] as $sub_menu) {
      	echo '<li><a href='.$sub_menu['linkL'].'>'.$sub_menu['name'].'</a>';
      	/*if (count($sub_menu['child'])) {
        	// Субменю третьего уровня
          echo '<ul>';
          foreach($sub_menu['child'] as $subsub_menu) {
          	echo '<li><a href='.$subsub_menu['linkL'].'>'.$subsub_menu['name'].'</a>'.'</li>';
            }
          echo '</ul>';
        }*/
      echo '</li>';
    	}
    echo '</ul>';
  	}
  echo '</li>';
}
echo '</ul>';
?>