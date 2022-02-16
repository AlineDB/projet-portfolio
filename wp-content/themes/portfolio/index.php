<?php get_header(); ?>
<body>
<main class="layout">
    <section class="layout__latest latest">
        <h2 class="latest__title">Mes derniers articles</h2>
        <div class="latest__container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- On est dans la boucle -->
            <article class="post">
                <a href="<?= get_the_permalink(); ?>" class="post__link">Lire l'article "<?php the_title(); ?>"</a>
                <div class="post__card">
                    <header class="post__head">
                        <h3 class="post__title"><?= get_the_title(); ?></h3> <!-- <?php the_title(); ?>  -->
                        <p class="post__media">Texte publié par <?= get_the_author_link(); ?> <time class="post__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date(); ?></time></p>
                    </header>
                    <figure class="post__fig">
                        <img src="#" alt="" class="post_thumb"/>
                        <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'post__thumb']); ?>
                   </figure>
                    <div class="post__exerpt">
                        <p>
                            <?= get_the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            </article>
            <?php endwhile; else: ?>
            <!-- Pas d'articles à afficher -->
            <?php endif; ?>
        </div>
    </section>
</main>


</body>
<?php get_footer(); ?>


