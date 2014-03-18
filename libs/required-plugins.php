<?php
require_once dirname( __FILE__ ) . '/vendors/tgm-plugin-activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {
  $plugins = array(
    array(
      'name'            => 'Image Banner Widget', // The plugin name
      'slug'            => 'image-banner-widget', // The plugin slug (typically the folder name)
      'source'          => get_bloginfo('template_directory') . '/libs/vendors/tgm-plugin-activation/plugins/image-banner-widget.1.4.1.zip', // The plugin source
      'required'        => true, // If false, the plugin is only 'recommended' instead of required
      'version'         => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'      => '', // If set, overrides default API URL and points to an external URL
    ),
    array(
      'name'    => 'AJAX Thumbnail Rebuild',
      'slug'    => 'ajax-thumbnail-rebuild',
      'required'  => true,
    ),
    array(
      'name'    => 'WP Socialite',
      'slug'    => 'WPSocialite',
      'required'  => false,
    ),    
    array(
      'name' => 'Yet Another Related Posts Plugin',
      'slug' => 'yet-another-related-posts-plugin',
      'required' => false
    ),
    array(
      'name' => 'Breadcrumb NavXT',
      'slug' => 'breadcrumb-navxt',
      'required' => false
    ),
    array(
      'name' => 'Broken link checker',
      'slug' => 'broken-link-checker',
      'required' => false
    ),
    array(
      'name' => 'SEO Friendly Images',
      'slug' => 'seo-image',
      'required' => false

    ),
    array(
      'name' => 'Contact Form 7',
      'slug' => 'contact-form-7',
      'required' => false
    ),
    array(
      'name' => 'Contact Form DB',
      'slug' => 'contact-form-7-to-database-extension',
      'required' => false
    ),
    array(
      'name' => 'WP-PageNavi',
      'slug' => 'wp-pagenavi',
      'required' => false
    ),
    array(
      'name' => 'W3 Total Cache',
      'slug' => 'w3-total-cache',
      'required' => true
    ),
    array(
      'name' => 'JSON API',
      'slug' => 'json-api',
      'required' => false
    ),
    array(
      'name' => 'qTranslate',
      'slug' => 'qtranslate',
      'required' => false
    ),
    array(
      'name' => 'WP Mail SMTP',
      'slug' => 'wp-mail-smtp',
      'required' => false
    )
  );
  $theme_text_domain = 'tgmpa';
  $config = array(
    'domain'          => $theme_text_domain,          // Text domain - likely want to be the same as your theme.
    'default_path'    => '',                          // Default absolute path to pre-packaged plugins
    'parent_menu_slug'  => 'themes.php',        // Default parent menu slug
    'parent_url_slug'   => 'themes.php',        // Default parent URL slug
    'menu'            => 'install-required-plugins',  // Menu slug
    'has_notices'       => true,                        // Show admin notices or not
    'is_automatic'      => false,             // Automatically activate plugins after installation or not
    'message'       => '',              // Message to output right before the plugins table
    'strings'         => array(
      'page_title'                            => __( 'Instalar plugins requeridos', $theme_text_domain ),
      'menu_title'                            => __( 'Instalar Plugins', $theme_text_domain ),
      'installing'                            => __( 'Instalando Plugin: %s', $theme_text_domain ), // %1$s = plugin name
      'oops'                                  => __( 'Algo deu errado com o plug-in API.', $theme_text_domain ),
      'notice_can_install_required'           => _n_noop( 'Esse tema requer os seguintes plugin: %1$s.', 'Esse tema requer os seguintes plugins: %1$s.' ), // %1$s = plugin name(s)
      'notice_can_install_recommended'      => _n_noop( 'Este tema recomenda o seguinte plug-in: %1$s.', 'Este tema recomenda o seguinte plug-ins: %1$s.' ), // %1$s = plugin name(s)
      'notice_cannot_install'           => _n_noop( 'Desculpe, mas você não tem as permissões corretas para instalar o plug-in %s. Contato com o administrador do site para obter ajuda sobre como tirar o plugin instalado.', 'Desculpe, mas você não tem as permissões corretas para instalar o plug-in %s. Contato com o administrador do site para obter ajuda em obter os plugins instalados.' ), // %1$s = plugin name(s)
      'notice_can_activate_required'          => _n_noop( 'O seguinte plug-in necessário é atualmente inativo: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
      'notice_can_activate_recommended'     => _n_noop( 'O seguinte plug-in recomendado é atualmente inativo: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
      'notice_cannot_activate'          => _n_noop( 'Desculpe, mas você não tem as permissões corretas para ativar o plug-in %s. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
      'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
      'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
      'install_link'                  => _n_noop( 'Iniciando a instalação do plug-in', 'Iniciando a instalação dos plug-ins' ),
      'activate_link'                 => _n_noop( 'Ativar plugin instalado', 'Ativar plugins instalados' ),
      'return'                                => __( 'Retornar para ver os plugins requeridos', $theme_text_domain ),
      'plugin_activated'                      => __( 'Plugin instalado com sucesso.', $theme_text_domain ),
      'complete'                  => __( 'Todos os plugins foram devidamente instalados. %s', $theme_text_domain ), // %1$s = dashboard link
      'nag_type'                  => 'Atualizar' // Determines admin notice type - can only be 'updated' or 'error'
    )
  );
  tgmpa( $plugins, $config );
}