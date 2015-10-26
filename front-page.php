<?php
/**
 * Index page
 */

// $css[] = 'css/index.css'
// $js[] = 'css/index.js'
// $layout = 'blue';
?>
<div class="container slick-container">
    <div class="slick" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
        <?php query_posts(array(
            'category_name' => 'destaque',
            'posts_per_page' => 3,
            'post_type' => 'post'
            )); 
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="slide resizeme">
                <figure class="resize-param">
                    <a rel="bookmark" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('slideshow'); ?>
                    </a>
                </figure>
                <div class="figure-caption">
                    <div class="figure-caption--sustent">
                        <div class="post-meta">
                            <div class="date-circle">
                                <div class="day-month"><?php echo get_the_date('d\/m'); ?></div>
                                <div class="year"><?php echo get_the_date('Y'); ?></div>
                            </div>
                        </div>
                        <div class="title-meta">
                            <h1>
                                <a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h1>
                            <p><?php the_category(', '); ?></p>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>
    </div>
</div>

<section class="solutions">
    <div class="container">
        <h2 class="main-title">Soluções</h2>
        <section class="cards">
            <figure>
                <a href="<?php bloginfo('url'); ?>/solucoes/">
                    <img src="<?php echo PATH_IMAGES; ?>/treinamentos.jpg" alt="Treinamentos">
                </a>
            </figure>
            <p>
                <a href="<?php bloginfo('url'); ?>/solucoes/">Treinamentos, workshop, 
                            encontros e palestras 
                            customizadas</a>
            </p>
        </section>
        <section class="cards">
            <figure>
                <a href="<?php bloginfo('url'); ?>/coaching/"><img src="<?php echo PATH_IMAGES; ?>/coaching.jpg" alt="Coaching"></a>
            </figure>
            <p><a href="<?php bloginfo('url'); ?>/coaching/">
                Coaching de Vida e 
                Coaching Executivo
            </a></p>
        </section>
        <section class="cards">
            <figure>
                <a href="<?php bloginfo('url'); ?>/eneagrama/"><img src="<?php echo PATH_IMAGES; ?>/eneagrama.jpg" alt="Eneagrama"></a>
            </figure>
            <p><a href="<?php bloginfo('url'); ?>/eneagrama/">Eneagrama nas Empresas</a></p>
        </section>
    </div>
</section>


<section class="blog">
    <div class="container">
        <h2 class="main-title">Blog</h2>
        <div class="overflow">
            <article class="post box-shadow">
                <div class="date"><?php the_date('d\/m'); ?></div>
                <img src="http://dummyimage.com/459x329/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                <h1><a href="#">O Uso do Eneagrama no Assesment como Caminho de Desenvolvimento</a></h1>
            </article>
            <article class="post box-shadow">
                <div class="date"><?php the_date('d\/m'); ?></div>
                <img src="http://dummyimage.com/459x329/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                <h1><a href="#">O Uso do Eneagrama no Assesment como Caminho de Desenvolvimento</a></h1>
            </article>
        </div>
        <div class="overflow">
            <p class="call-action">
                <a href="#" class="btn">Veja mais</a>
            </p>
        </div>
    </div>
</section>


<section class="partners">
    <div class="container">
        <h2 class="main-title white">Parceiros</h2>
        <div class="overflow">
            <ul class="partners-list">
                <?php for ($i=0; $i < 10; $i++) { ?>
                    <li class="logo-partner"><img class="box-shadow" src="http://dummyimage.com/217x139/4d494d/686a82.gif&text=thumb" alt="thumb"></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>


<div class="depoiments">
    <div class="container">
        <div class="slick" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
            <?php query_posts(array(
                'category_name' => 'destaque',
                'posts_per_page' => 3,
                'post_type' => 'post'
                )); 
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="slide resizeme">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere...</p>
                    <p>Fulano de tal - Recursos Humanos na Empresa XYZ</p>
                </article>
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>
        </div>
    </div>
</div>