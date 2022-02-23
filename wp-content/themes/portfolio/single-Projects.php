<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleproject">
        <h2 class="singleproject__title"><?= get_the_title(); ?></h2>
        <figure class="singleproject__fig">
            <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'project__thumb']); ?>
        </figure>
        <div class="singleproject__content">
            <?=  get_the_content();  ?>
        </div>
        <aside class="singleproject__details">
            <h3 class="singleproject__subtitle">Détails du projet</h3>
            <dl class="singleproject__def">
                <dt class="singleproject__label">Date du projet</dt>
                <dd class="singleproject__data"><time class="singleproject__date"><?= get_the_date(); ?></time></dd>
                <dt class="singleproject__label">Cours correspondant</dt>
                <?php if(get_field('cours_project')):  ?>
                <dd class="singleproject__data"><?= get_field('cours_project', false, false);  ?>
                <?php else: ?>
                <span class="singleproject__empty">Pas de cours associé à se projet</span>
                    <?php endif; ?>
                </dd>
            </dl>
        </aside>
    </main>
    <?php endwhile; endif; ?>



<?php get_footer(); ?>
