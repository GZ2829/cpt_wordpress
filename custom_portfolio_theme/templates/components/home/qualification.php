<!-- Qualification Start -->
<div class="container-fluid py-5" id="qualification">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?= $args['bg_title'] ?></h1>
            <h1 class="position-absolute text-uppercase theme-color mobileFont"><?= $args['title'] ?></h1>
        </div>
        <div class="qual-container row align-items-center">
            <div class="col-lg-6">
                <h3 class="mb-4">My Education</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    <?php foreach($args['education'] as $key => $school): 
                          $id = $school[ 'ID' ];
                          $school_pods = pods( 'school', $id );
                          $desc = get_post_field('post_content', $id);

                    ?> 
                    <div class="position-relative mb-4">
                        <i class="far fa-dot-circle theme-color position-absolute" style="top: 2px; left: -32px;"></i>
                        <h5 class="font-weight-bold mb-1"><?= $school_pods->field('school_degree') ?></h5>
                        <p class="mb-2"><strong><?= get_the_title( $id ) ?></strong> | <small><?= $school_pods->field('school_dates') ?></small></p>
                        <div>
                            <?= $desc ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">My Expericence</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    <?php foreach($args['experience'] as $key => $job): 
                          $id = $job[ 'ID' ];
                          $job_pods = pods( 'job', $id );
                          $desc = get_post_field('post_content', $id);
                    ?> 
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle theme-color position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?= $job_pods->field('job_position') ?></h5>
                            <p class="mb-2"><strong><?= get_the_title( $id ) ?></strong> | <small><?= $job_pods->field('job_dates') ?></small></p>
                            <div>
                                <?= $desc ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Qualification End -->