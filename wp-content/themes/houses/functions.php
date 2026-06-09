<?php

# Для добавления стилей и js
add_action( 'wp_enqueue_scripts',function() {

    wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css' );
    
	wp_enqueue_script('map', 'https://api-maps.yandex.ru/2.1/?apikey=8717ecc3-c754-4e2a-ab96-e5e519ae0e57&lang=ru_RU', array(), 'null', true);
    
    wp_enqueue_script('main.min', get_template_directory_uri() . '/assets/js/main.min.js', array(), 'null', true);
    wp_enqueue_script('form', get_template_directory_uri() . '/assets/js/form-mail.js', array(), 'null', true);


});

# Для верхнего админ меню
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

# Для удаления ненужных "p" в form7
add_filter('wpcf7_autop_or_not', '__return_false');

# Добавляет SVG в список разрешенных для загрузки файлов.
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

// глобальные ACF поля

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Глобальные настройки',
		'menu_slug' 	=> 'theme-general-settings',
	));
}

// Регистрация меню
register_nav_menus( array(
    'header_menu' => 'Меню в шапке сайта',
) );


// Валкер для меню шапки декстоп

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = str_repeat("\t", $depth);
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . ' nav-item"' : ' class="nav-item"';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'nav__link _link _link-padding';

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

// Валкер для мобильного меню

class Mobile_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = str_repeat("\t", $depth);
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . ' mobile-menu__item"' : ' class="mobile-menu__item"';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'mobile-menu__item-link _link _link-no-padding';

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

// Валкер для футера

class Footer_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = str_repeat("\t", $depth);
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . ' nav-item"' : ' class="nav-item"';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'footer__nav-link _link';

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}


// Хлебные крошки
function custom_breadcrumbs() {
    // Настройки
    $separator = ''; // разделитель не нужен, так как у вас стили через border/background
    $home_title = 'Главная';
    $breadcrumb = '';

    // Если не главная страница
    if (!is_front_page()) {
        $breadcrumb .= '<ul class="breadcrumbs__list">';
        $breadcrumb .= '<li class="breadcrumbs__item"><a href="' . home_url('/') . '" class="breadcrumbs__link">' . $home_title . '</a></li>';

        // Для страницы записей (блог)
        if (is_home() || is_singular('post')) {
            $blog_page_id = get_option('page_for_posts');
            if ($blog_page_id) {
                $blog_url = get_permalink($blog_page_id);
                $blog_title = get_the_title($blog_page_id);
                $breadcrumb .= '<li class="breadcrumbs__item"><a href="' . $blog_url . '" class="breadcrumbs__link">' . $blog_title . '</a></li>';
            }
            if (is_singular('post')) {
                $breadcrumb .= '<li class="breadcrumbs__item"><span class="breadcrumbs__link">' . get_the_title() . '</span></li>';
            }
        }
        // Для страниц
        elseif (is_page()) {
            $breadcrumb .= '<li class="breadcrumbs__item"><span class="breadcrumbs__link">' . get_the_title() . '</span></li>';
        }
        // Для рубрик и меток
        elseif (is_category() || is_tag()) {
            $breadcrumb .= '<li class="breadcrumbs__item"><span class="breadcrumbs__link">' . single_cat_title('', false) . '</span></li>';
        }
        // Для поиска
        elseif (is_search()) {
            $breadcrumb .= '<li class="breadcrumbs__item"><span class="breadcrumbs__link">Результаты поиска: ' . get_search_query() . '</span></li>';
        }
        // Для 404
        elseif (is_404()) {
            $breadcrumb .= '<li class="breadcrumbs__item"><span class="breadcrumbs__link">Страница не найдена</span></li>';
        }
        // Для остальных таксономий
        else {
            $breadcrumb .= '<li class="breadcrumbs__item"><span class="breadcrumbs__link">' . get_the_title() . '</span></li>';
        }

        $breadcrumb .= '</ul>';
    } else {
        // На главной можно ничего не выводить или вывести только "Главная"
        $breadcrumb .= '<ul class="breadcrumbs__list">';
        $breadcrumb .= '<li class="breadcrumbs__item"><span class="breadcrumbs__link">' . $home_title . '</span></li>';
        $breadcrumb .= '</ul>';
    }

    echo $breadcrumb;
}


// Регистрация типа записи "Услуги"
add_action('init', 'register_service_post_type');
function register_service_post_type() {
    $labels = array(
        'name'               => 'Услуги',
        'singular_name'      => 'Услуга',
        'menu_name'          => 'Услуги',
        'add_new'            => 'Добавить услугу',
        'add_new_item'       => 'Добавить новую услугу',
        'edit_item'          => 'Редактировать услугу',
        'new_item'           => 'Новая услуга',
        'view_item'          => 'Смотреть услугу',
        'search_items'       => 'Искать услуги',
        'not_found'          => 'Услуг не найдено',
        'not_found_in_trash' => 'В корзине нет услуг',
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true, // для Gutenberg
        'menu_icon'           => 'dashicons-hammer',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'services'),
    );
    register_post_type('service', $args);
}


//Создание таксономии для записей услуги

add_action('init', 'register_service_taxonomy');
function register_service_taxonomy() {
    register_taxonomy(
        'service_cat',
        'service',
        array(
            'label'        => 'Категории услуг',
            'rewrite'      => array('slug' => 'service-cat'),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}

// Для заголовка страниц
add_theme_support( 'title-tag' );


?>