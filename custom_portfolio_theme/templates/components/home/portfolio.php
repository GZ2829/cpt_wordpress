<!-- Portfolio Start -->
<div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?= $args['bg_title'] ?></h1>
                <h1 class="position-absolute text-uppercase theme-color"><?= $args['title'] ?></h1>
            </div>
            <div class="carousel-outerbox" style="<?php 
                
            ?>">
                <div class='slick-center'>
                    <?php foreach($args['projects'] as $key => $project): 
                        $id = $project[ 'ID' ];
                        $project_pods = pods( 'project', $id );
                    ?>
                    <div class="carousel-box theme-border-color">
                        <?= $project_pods->field( 'project_image._img.290x150' ); ?>
                        <div class="carousel-textBox">
                            <h2 class="theme-color"><?= get_the_title($id) ?></h2>
                            <p><?= $project_pods->field('project_description') ?></p>
                            <a class="carousel-box--link theme-color" href="<?= $project_pods->field('project_link') ?>" target="_blank">See More &#8594;</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <div class="carousel-arrow-box">
            <button class="carousel-arrow prev-arrow theme-bg-color"><span>&#10229;</span></button>
            <button class="carousel-arrow next-arrow theme-bg-color"><span>&#10230;</span></button>
        </div>
    </div>
</div>
<!-- Call Slick JS and Options -->

<?php

    wp_register_script('slick-js',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'));

    wp_enqueue_script('slick-js');

    wp_register_script('slick-portfolio-js',  $args['baseUrl'] . '/assets/js/slick-portfolio.js', array('jquery'));

    wp_enqueue_script('slick-portfolio-js');
?>
<!-- Portfolio End -->