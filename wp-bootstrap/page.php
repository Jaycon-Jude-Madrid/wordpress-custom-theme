<?php
get_header();

?>

<main class="container">



    <div class="row g-5">
        <div class="col-md-8">

            <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post();?>

            <article class="blog-post">
                <h2 class="blog-post-title">
                    <?php the_title();?>
                </h2>
                <?php if(has_post_thumbnail()) : ?>

                <div class="post-thumb">
                    <?= the_post_thumbnail(); ?>
                </div>

                <?php endif; ?>

                <p>
                    <?php the_content();?>
                <p>
                    <hr>

                    <?php endwhile;?>
                    <?php else: ?>
                <p><?php __("No page Found.");?></p>
                <?php endif;?>



        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </div>
    </div>
    </div>

</main>

<?php
get_footer();

?>