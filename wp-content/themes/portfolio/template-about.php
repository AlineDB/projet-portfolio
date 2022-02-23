<?php /* Template Name: About page template */ ?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout about">
        <h2 class="about__title"><?= get_the_title(); ?></h2>
        <figure class="about__fig">
            <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'project__thumb']); ?>
        </figure>
        <div class="about__content">
            <?=  get_the_content();  ?>
        </div>
        <aside class="about_details">
            <h3 class="about__subtitle">Détails du projet</h3>
            <dl class="about__def">
                <dt class="about__label">Date du projet</dt>
                <dd class="about__data"><time class="about__date"><?= get_the_date(); ?></time></dd>
                <dt class="about__label">Cours correspondant</dt>
                <?php if(get_field('cours_project')):  ?>
                <dd class="about__data"><?= get_field('cours_project', false, false);  ?>
                    <?php else: ?>
                        <span class="about__empty">Pas de cours associé à se projet</span>
                    <?php endif; ?>
                </dd>
            </dl>
        </aside>
    </main>
<?php endwhile; endif; ?>



<?php get_footer(); ?>