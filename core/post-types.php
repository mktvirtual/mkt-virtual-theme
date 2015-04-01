<?php 
add_action( 'init', 'mkt_register_tax' );
add_action( 'init', 'mkt_register_post_types' );

function mkt_register_post_types() {

    //Inicio CTRL + C
	$labels = array(
		'name' => 'Clientes',
		'singular_name' => 'Cliente',
		);

	$args = array(
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'menu_position' => 5, //não é incrementavel, o valor 5 posiciona acima de MEDIA, 10 = Abaixo de Media
		'has_archive' => false,
		'show_in_menu' => true,
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' =>’cliente’, 'with_front' => true ),
		'query_var' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'thumbnail', 'author', 'page-attributes', 'post-formats' )
		);

	register_post_type('cliente', $args );

    //Final CTRL + C
    //Copie o trecho acima, cole aqui embaixo e altere o que achar necessário
}

//Registra as taxonomias do tema
function mkt_register_tax() {
//Inicio CTRL+C
//Taxonomia de exemplo
	register_taxonomy( 'departamento',array (
    0 => 'cliente', // Quais o post types utilizará essa taxonomia
    ),
	array( 'hierarchical' => true,
		'label' => 'Departamento',
		'show_ui' => true,
		'query_var' => true,
		'show_admin_column' => false,
		'labels' => array (
			'search_items' => 'Departamento',
			'popular_items' => 'Ítens populares',
			'all_items' => 'Todos',
			'parent_item' => '',
			'parent_item_colon' => '',
			'edit_item' => 'Editar item',
			'update_item' => 'Atualizar item',
			'add_new_item' => 'Adicionar novo',
			'new_item_name' => '',
			'separate_items_with_commas' => '',
			'add_or_remove_items' => '',
			'choose_from_most_used' => '',
			)
		)
	); 
//Fim CTRL+C
//Copie o trecho acima, cole aqui embaixo e altere o que achar necessário
}

?>