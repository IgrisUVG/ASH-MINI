<?php    

    // Построение из массива древовидного списка без использования рекурсии
    $menu=array(
         1=>array('name'=>'Овощи', 'parent'=>0),
             6=>array('name'=>'Капуста', 'parent'=>1),
             7=>array('name'=>'Помидоры', 'parent'=>1),
             9=>array('name'=>'Салат', 'parent'=>1),
                 18=>array('name'=>'Китайский салат', 'parent'=>9),
             12=>array('name'=>'Тыква', 'parent'=>1),
             16=>array('name'=>'Редиска', 'parent'=>1),
         2=>array('name'=>'Фрукты', 'parent'=>0),
             13=>array('name'=>'Бананы', 'parent'=>2),
             14=>array('name'=>'Ягоды', 'parent'=>2),
                 19=>array('name'=>'Арбуз', 'parent'=>14),
                 20=>array('name'=>'Клубника', 'parent'=>14),
         3=>array('name'=>'Животные', 'parent'=>0),
         4=>array('name'=>'Растения', 'parent'=>0),
             8=>array('name'=>'Конопля', 'parent'=>4),
             11=>array('name'=>'Мак', 'parent'=>4),
             17=>array('name'=>'Сахарный тростник', 'parent'=>4),
         5=>array('name'=>'Насекомые', 'parent'=>0),
             10=>array('name'=>'Тараканы', 'parent'=>5),
    );


    // Построение дерева за один проход
    foreach($menu as $menu_id=>$data) {
        // Прописать в родительском узле ссылку на пункт меню
        $menu[$data['parent']]['child'][$menu_id]=&$menu[$menu_id];
    }
     
    // Готовый массив находится в $menu[0]['child']
    $sorted_menu=(array)$menu[0]['child'];



    echo '<ul>';
    foreach($sorted_menu as $top_menu) {
        // Меню верхнего уровня
        echo '<li>'.$top_menu['name'];
        if (count($top_menu['child'])) {
            // Субменю второго уровня
            echo '<ul>';
            foreach($top_menu['child'] as $sub_menu) {
                echo '<li>'.$sub_menu['name'];
                if (count($sub_menu['child'])) {
                    // Субменю третьего уровня
                    echo '<ul>';
                    foreach($sub_menu['child'] as $subsub_menu) {
                        echo '<li>'.$subsub_menu['name'].'</li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</li>';
    }
    echo '</ul>';
?>