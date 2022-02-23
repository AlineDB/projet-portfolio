<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout contact">
        <h2 class="contact__title"><?= get_the_title(); ?></h2>
        <figure class="contact__fig">
            <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'project__thumb']); ?>
        </figure>
        <div class="contact__content">
            <?=  get_the_content();  ?>
        </div>
        <aside class="contact_details">
            <h3 class="contact_subtitle">Détails du projet</h3>
            <dl class="contact__def">
                <dt class="contact__label">Date du projet</dt>
                <dd class="contact__data"><time class="contact__date"><?= get_the_date(); ?></time></dd>
                <dt class="contact__label">Cours correspondant</dt>
                <?php if(get_field('cours_project')):  ?>
                <dd class="contact__data"><?= get_field('cours_project', false, false);  ?>
                    <?php else: ?>
                        <span class="contact__empty">Pas de cours associé à se projet</span>
                    <?php endif; ?>
                </dd>
            </dl>
        </aside>
    </main>
<?php endwhile; endif; ?>
