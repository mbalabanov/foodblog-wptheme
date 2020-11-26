<?php get_header(); ?>
   
<div class="container">
    <main class="row my-4">
        <article class="col-md-8">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php the_content();?>
                <?php endwhile; ?>
            <?php else :?>
                <p>No page found</p>
            <?php endif; ?>
        </article>

        <?php
            if(is_active_sidebar('sidebar')):
                dynamic_sidebar('sidebar');
            endif;  
        ?>

    </main>

</div>

<?php get_footer(); ?>