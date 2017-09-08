<ul class = "navR menu">
	<?php
	$menu = array(
        0 => array('link' => '/', 'name'=> 'Главная'),
		1 => array('link' => '/exhibitions', 'name'=> 'Выставки'),
		2 => array('link' => '/zero', 'name'=> 'Новости')
	);
	foreach ($menu as $item):
		?>
		<li>
			<a href="<?= $item['link'] ?>" <?= $_SERVER['REQUEST_URI'] == $item['link'] ? 'class="verbergend"' : '' ?>>
				<?= $item['name'] ?>
			</a>
		</li>
<?php endforeach;?>
</ul><!--Конец правого меню-->