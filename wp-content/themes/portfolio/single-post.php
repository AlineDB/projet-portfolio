<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singlepost">
        <h2 class="singlepost__title"><?= get_the_title(); ?></h2>
        <figure class="singlepost__fig">
            <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'project__thumb']); ?>
        </figure>
        <div class="singlepost__content">
            <?=  get_the_content();  ?>
        </div>
        <aside class="singlepost__details">
            <h3 class="singlepost__subtitle">Détails du projet</h3>
            <dl class="singlepost__def">
                <dt class="singlepost__label">Date du projet</dt>
                <dd class="singlepost__data"><time class="singlepost__date"><?= get_the_date(); ?></time></dd>
                <dt class="singlepost__label">Cours correspondant</dt>
                <?php if(get_field('cours_project')):  ?>
                <dd class="singlepost__data"><?= get_field('cours_project', false, false);  ?>
                <?php else: ?>
                <span class="singlepost__empty">Pas de cours associé à se projet</span>
                    <?php endif; ?>
                </dd>
            </dl>
        </aside>
    </main>
    <?php endwhile; endif; ?>



<?php get_footer(); ?>
