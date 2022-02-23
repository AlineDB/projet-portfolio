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

            <section class="layout__projects projects">
                <h2 class="projects__title">
                    Mes derniers projets
                </h2>
                <div class="projects__container">
                    <!-- fonction boucle qui prend un objet WP query pour faire une requete WP avec comme arguments de tri le post type, la date en desc et n'en affiche que 3 -->
                    <?php $projects = dw_get_projects(3);  ?>
                    <!-- début de boucle -->
                    <?php if($projects->have_posts()): while($projects->have_posts()): $projects->the_post(); ?>
                    <article class="project">
                        <a href="#" class="project__link">Lire l'article lié au projet "<?= get_the_title(); ?>"</a>
                        <div class="project__card">
                            <header class="project__head">
                                <h3 class="project__title"><?= get_the_title(); ?></h3>
                                <p class="project__date" <?= get_the_date('c'); ?>><time datetime="" class="project__time">
                                        <?= get_the_date(); ?>
                                     <!--   <?= get_field('project_date', false, false);  ?> -->
                                    </time> </p>
                            </header>
                            <figure class="project__fig">
                                <img src="#" alt="" class="project__thumb"/>
                                <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'project__thumb']); ?>
                            </figure>
                        </div>
                    </article>
                    <?php endwhile; else: ?>
                    <p class="">Il n'y a pas de projet à afficher</p>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </section>
</main>


</body>
<?php get_footer(); ?>


