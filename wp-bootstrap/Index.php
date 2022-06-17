<?php
get_header();

?>

<main class="container">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Latest Posts
    </h3>


    <div class="row g-5">
        <div class="col-md-8">

            <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post();?>

            <article class="blog-post">
                <h2 class="blog-post-title">
                    <?php the_title();?>
                </h2>
                <p class="blog-post-meta"><?php the_date(); ?> by <a
                        href="<?php the_permalink(); ?>"><?php the_title();?> </p> </a>

                <?php if(has_post_thumbnail()) : ?>

                <div class="post-thumb">
                    <?= the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>
                <p>
                    <?php the_excerpt();?>
                <p>
                    <hr>

                    <?php endwhile;?>
                    <?php else: ?>
                <p><?php __("No Post Found.");?></p>
                <?php endif;?>



        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </div>
    </div>

</main>

<?php
get_footer();

?>