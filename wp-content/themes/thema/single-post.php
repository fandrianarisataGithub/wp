<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <h2 class="text-center"><?php the_title() ?></h2>
        <?php the_post_thumbnail("medium", [
            "class" => "img-responsive",
            "alt"    => "image pour ce post",
            "style"    => "height : auto"
        ]) ?>
        <?php the_content() ?>
    <?php endwhile ?>
<?php endif ?>
</div>
<?php get_footer() ?>