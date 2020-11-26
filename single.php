
<?php get_header(); ?>
   
    <div class="container">
        <main class="row my-4">

            <article class="col-md-8">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>       
                        <h2><?php the_title(); ?></h2>
                        <p><span class="badge badge-pill badge-secondary p-2"><?php the_time('F j, Y g:i a'); ?></span><span class="badge badge-pill badge-info p-2 mx-2"><?php the_author(); ?></span></p>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else :?>
                    <p>No posts found</p>
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