<?php get_header(); ?>
TechElite第５回
<?php
$post_query = new WP_Query(
    array(
        'post_type'      => 'post', //投稿を表示する時は「post」
        'posts_per_page' => 2, //表示する記事の数
    )
);
?>
<?php if ($post_query->have_posts()) : ?>
    <?php while ($post_query->have_posts()) : ?>
        <?php $post_query->the_post(); ?>
        ここに記事が表示されます
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); //サブループが終わる際に記載が必要です 
?>

<?php get_footer(); ?>