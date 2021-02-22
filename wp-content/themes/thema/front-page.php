<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <h2 class="text-center"><?php the_title() ?></h2>
        <?php the_content() ?>
        <a href="<?= get_post_type_archive_link('post') ?>">Lien vers les actualités</a>
    <?php endwhile ?>
<?php endif ?>
</div>
<?php get_footer() ?>