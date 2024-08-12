<!-- Contact Start -->
<div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?= $args['bg_title'] ?></h1>
                <h1 class="position-absolute text-uppercase theme-color"><?= $args['title'] ?></h1>
            </div>
            <?= do_shortcode('[ninja_form id=' . $args['form_id'] . ']') ?>
        </div>
</div>
<!-- Contact End -->