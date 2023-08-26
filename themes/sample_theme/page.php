<?php get_header('copy'); ?>

<main>
<article>
    <div class="container">
        <?php the_content(); ?>
        <h1>固定ページpage.phpです。</h1>
    </div>
    <?php get_template_part('includes/common'); ?>
</article>
</main>
<?php get_footer(); ?>