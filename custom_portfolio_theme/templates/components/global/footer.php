<!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5 theme-bg-color">
    <div class="container text-center py-5">
        <div class="d-flex justify-content-center mb-4">
            <?php if($args['twitter']): ?>
                <a class="btn btn-light btn-social mr-2" href="<?= $args['twitter'] ?>"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>
            <?php if($args['facebook']): ?>
                <a class="btn btn-light btn-social mr-2" href="<?= $args['facebook'] ?>"><i class="fab fa-facebook"></i></a>
            <?php endif; ?>
            <?php if($args['linkedin']): ?>
                <a class="btn btn-light btn-social mr-2" href="<?= $args['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
            <?php endif; ?>
            <?php if($args['instagram']): ?>
                <a class="btn btn-light btn-social mr-2" href="<?= $args['instagram'] ?>"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>
        </div>
        <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#"><?= $args['first_name'] . ' ' . $args['last_name'] ?></a>. All Rights Reserved.
            Inspired by <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
</div>
<!-- Footer End -->