<?php get_header() ?>
<div class="row">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="liste_blog col-lg-4">
				<h2 class="text-center"><?php the_title() ?></h2>
				<?php the_post_thumbnail("medium", [
					"class" => "img-responsive",
					"alt"	=> "image pour ce post",
					"style"	=> "height : auto"
				]) ?>
				<?php the_content() ?>
				<div class="button">
					<a href="<?php the_permalink() ?>" class="link_blog btn btn-primary">Détail</a>
				</div>
			</div>
		<?php endwhile ?>
		<?php else : ?>
			<h1>Pas d'article'</h1>
	<?php endif ?>
</div>
</div>
<?php get_footer() ?>