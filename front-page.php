<?php get_header(); ?>

<div id="foodCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/food1.jpg" class="d-block w-100" alt="Lorem Ipsum">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/food2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/food3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#foodCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#foodCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-4 p-2">
            <div class="border rounded-lg p-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/food-small1.jpg" class="img-fluid m-4" alt="Lorem Ipsum">
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="border rounded-lg p-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/food-small2.jpg" class="img-fluid m-4" alt="Lorem Ipsum">
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="border rounded-lg p-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/food-small3.jpg" class="img-fluid m-4" alt="Lorem Ipsum">
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-8 offset-md-2">
            <?php the_content();?>
        </div>
    </div>

</div>

<?php get_footer(); ?>