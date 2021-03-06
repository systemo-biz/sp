<?php
//Регистрируем тип поста
function thorny_register_girls_post_type(){
	global $MASSAGE_PARLOR_GIRLS;

	$labels = array(
		 'name' => $MASSAGE_PARLOR_GIRLS['post_type_name'] // основное название для типа записи
		,'singular_name' => $MASSAGE_PARLOR_GIRLS['singular_name'] // название для одной записи этого типа
		,'add_new' => 'Добавить '.$MASSAGE_PARLOR_GIRLS['add_title_name'] // для добавления новой записи
		,'add_new_item' => 'Добавляем '.$MASSAGE_PARLOR_GIRLS['add_title_name'] // заголовка у вновь создаваемой записи в админ-панели.
		,'edit_item' => 'Редактировать '.$MASSAGE_PARLOR_GIRLS['add_title_name'] // для редактирования типа записи
		,'new_item' => 'Новая '.$MASSAGE_PARLOR_GIRLS['singular_name'] // текст новой записи
		,'view_item' => 'Посмотреть '.$MASSAGE_PARLOR_GIRLS['add_title_name'] // для просмотра записи этого типа.
		,'search_items' => 'Поиск' // для поиска по этим типам записи
		,'not_found' => 'Не найдено ни одной объекта' // если в результате поиска ничего не было найдень
		,'not_found_in_trash' => 'В корзине не найдено ни одного объекта' // если не было найдено в корзине
		,'parent_item_colon' => '' // для родительских типов. для древовидных типов
		,'menu_name' => $MASSAGE_PARLOR_GIRLS['post_type_name'] // название меню
	);
	$args = array(
		 'label' => null //Имя типа записи помеченное для перевода на другой язык
		,'labels' => $labels 
		,'description' => '' 
		,'public' => true //показывать ли эту менюшку в админ-панели.
		,'publicly_queryable' => true //Запросы относящиеся к этому типу записей будут работать во фронтэнде (в шаблоне сайта)
		,'show_in_menu' => true //Показывать ли тип записи в администраторском меню и где именно показывать управление этим типом записи. 		
		,'menu_position' => 15 // Позиция где должно расположится меню нового типа записи
		,'menu_icon' => null //Ссылка на картинку, которая будет использоваться для этого меню		
		,'query_var' => true
		,'rewrite' => true
		,'capability_type' => 'post' 
		,'menu_icon' => null		
		,'has_archive' => true
		,'hierarchical' => false //Будут ли записи этого типа иметь древовидную структуру (как постоянные страницы)
		,'exclude_from_search' => false //Исключить ли этот тип записей из поиска по сайту
		,'show_ui' => true //Показывать ли меню для управления этим типом записи в админ-панели. 
		,'supports' => array('title','editor','thumbnail', 'comments') //Вспомогательные поля на странице создания/редактирования этого типа записи.
		,'show_in_nav_menus' => true
	);
	register_post_type('girls', $args );
}
add_action('init', 'thorny_register_girls_post_type');