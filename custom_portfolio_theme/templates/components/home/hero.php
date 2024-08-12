<!-- Header Start -->
<div id="homeHero" class="homeHero" style="<?= $args['bg_type'] === 'color' ? 'background-color:' . " " . $args['bg_color'] . ';': ''; ?>">
    <?php if( $args['bg_type'] === 'video' ): ?>
        <video autoplay muted loop id="myVideo">
            <source src="<?= $args['bg_video'] ?>" type="video/mp4">
        </video>
    <?php endif; ?>
    <?php if( $args['bg_type'] === 'image' ): ?>
        <?= $args['bg_image'] ?>
    <?php endif; ?>
    <div class="homeHero-content--outer" style="<?= $args['bg_type'] === 'color' ? 'background: rgba(0, 0, 0, .0);' : ''; ?>" >
        <div class="homeHero-content--inner">
            <div class="homeHero-imageBox">
                <?= $args['portrait'] ?>

                <!-- JS to add bootstrap classes to img, pods append class not working. -->
                <script>
                    let img = document.getElementsByClassName('homeHero-imageBox')[0].children[0];
                    img.classList.add('img-fluid');
                    img.classList.add('w-100');
                    img.classList.add('rounded-circle');
                    img.classList.add('shadow-sm');
                </script>
            </div>
            <div style="max-width: 432px;" class="homeHero-textBox text-lg-left">
                <h3 class="homeHero-pretitle">I'm</h3>
                <h1 class="display-3 text-uppercase theme-color mb-2" style="-webkit-text-stroke: 2px #ffffff;">
                    <?= $args['first_name'] . ' ' .  $args['last_name'] ?>
                </h1>
                <div class="c-homeHeader-typedTitle">
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <h1 class="d-inline font-weight-lighter text-white"><?= $args['job_title'] ?></h1>
                </div>
                <div class="typed-text d-none"><?= $args['typed_words'] ?></div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-3">
                        <?php if($args['download_button']): ?>
                            <a href="<?= $args['document'] ?>" class="btn btn-outline-light mr-3"><?= $args['download_button_text'] ?></a>
                        <?php endif; ?>
                        <?php if($args['contact_button']): ?>
                            <a id="contact-hero" href="#contact" class="btn btn-outline-light mr-3"><?= $args['contact_button_text'] ?></a>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->