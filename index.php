<?php get_header(); ?>

<div class="container">
    <div class="row my-4">
        <main class="col-md-8">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <article class="row my-4 border-bottom">
                    <div class="col-md-3">
                        <?php if(has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array('class' => 'border rounded-lg my-2 shadow-sm')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-9">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <p><span class="badge badge-pill badge-secondary p-2"><?php the_time('F j, Y g:i a'); ?></span><span class="badge badge-pill badge-info p-2 mx-2"><?php the_author(); ?></span></p>
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Read more</a></p>
                    </div>
                </article>
                <?php endwhile; ?>
            <?php else :?>
                <p>No posts found</p>
            <?php endif; ?>

        </main>


        <?php
            if(is_active_sidebar('sidebar')):
            dynamic_sidebar('sidebar');
            endif;  
        ?>

    </div>
</div>

<?php get_footer(); ?>