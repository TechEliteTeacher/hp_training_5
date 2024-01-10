<?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            ここに記事の中身を書きます
        <?php endwhile; ?>
    <?php endif; ?>
<?php wp_footer(); ?>