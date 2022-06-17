<?php
get_header();

?>

<main class="container">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Latest Posts
    </h3>

    <a class="p-2 text-muted" href="http://wpcustomtheme.local/"> Back to home</a>
    <div class="row g-5">
        <div class="col-md-8">


            <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post();?>

            <article class="blog-post">
                <h2 class="blog-post-title">
                    <?php the_title();?>
                </h2>
                <p class="blog-post-meta"><?php the_date(); ?></p>

                <?php if(has_post_thumbnail()) : ?>

                <div class="post-thumb">
                    <?= the_post_thumbnail(); ?>
                </div>

                <?php endif; ?>

                <p>
                    <?php the_content();?>
                <p>
                    <hr>

                    <?php
                      comments_template();
                      ?>



        </div>
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
    </div>
    </div>

</main>

<?php
get_footer();

?>