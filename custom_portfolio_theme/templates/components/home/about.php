<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?= $args['bg_title']; ?></h1>
            <h1 class="position-absolute text-uppercase theme-color"><?= $args['title']; ?></h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0 about-imgBox">
                <?= $args['img'] ?>
            </div>
            <div class="col-lg-7">
                <h3 class="mb-4"><?= $args['txt_title'] ?></h3>
                <div style="max-width:500px">
                    <?= $args['txt_desc'] ?>
                </div>
                <div class="row mb-3">
                    <?php foreach($args['stats'] as $key => $stat): 
                          $stat_values = explode(':', $stat)    
                    ?>                
                        <div class="col-sm-6 py-2">
                            <h6><?= $stat_values[0].':' ?> <span class="text-secondary"><?= $stat_values[1] ?></span></h6>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- <a href="" class="btn btn-outline-primary mr-4">Hire Me</a> -->
                <div id="scroll-qualification" class="btn btn-outline-primary theme-btn-light">Learn More</div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->