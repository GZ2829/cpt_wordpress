<!-- Navbar Start -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
    <a href="index.html" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5"><span class="theme-color"><?= $args['first_name']; ?></span> <?= $args['last_name']; ?></h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            <?php if($args['has_hero_bg'] && !$args['hero_empty']): ?>
                <a href="#homeHero" class="nav-item nav-link active">Home</a>
            <?php endif; ?>
            <?php if(!$args['about_empty']): ?>
                <a href="#about" class="nav-item nav-link">About</a>
            <?php endif; ?>
            <?php if(!$args['qualification_empty']): ?>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
            <?php endif; ?>
            <?php if(!$args['skill_empty']): ?>
                <a href="#skill" class="nav-item nav-link">Skill</a>
            <?php endif; ?>
            <?php if(!$args['portfolio_empty']): ?>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
            <?php endif; ?>
            <?php if(!$args['contact_empty']): ?>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            <?php endif; ?>
        </div>
        <?php if(!$args['contact_empty']): ?>
            <a id="contact-nav" class="btn btn-outline-primary theme-btn-light">Contact Me</a>
        <?php endif; ?>
    </div>
</nav>
<!-- Navbar End -->