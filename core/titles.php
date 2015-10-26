<?php
/**
 * Page Titles
 */

function mkt_title() {
    if (is_home()) {
        if (get_option('page_for_posts', true)) {
            return get_the_title(get_option('page_for_posts', true));
        } else {
            return 'Últimos posts';
        }
    } elseif (is_archive()) {
        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
        if ($term) {
            return apply_filters('single_term_title', $term->name);
        } elseif (is_post_type_archive()) {
            return apply_filters('the_title', get_queried_object()->labels->name);
        } elseif (is_day()) {
            return sprintf('Arquivos por dia: %s', get_the_date());
        } elseif (is_month()) {
            return sprintf('Arquivos por mês: %s', get_the_date('F Y'));
        } elseif (is_year()) {
            return sprintf('Arquivos por ano: %s', get_the_date('Y'));
        } elseif (is_author()) {
            $author = get_queried_object();
            return sprintf('Arquivos por autor: %s', apply_filters('the_author', is_object($author) ? $author->display_name : null));
        } else {
            return single_cat_title('', false);
        }
    } elseif (is_search()) {
        return sprintf('Resultados de busca por %s', get_search_query());
    } elseif (is_404()) {
        return 'Não encontrado';
    } else {
        return get_the_title();
    }
}
