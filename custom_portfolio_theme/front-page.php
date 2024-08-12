<?php

$baseUrl = get_template_directory_uri();

$homeData = getHomePodData($baseUrl);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
       <?= get_bloginfo( 'name' ); ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<?= get_site_icon_url(32); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="<?= $baseUrl . '/assets/css/style.css' ?>">


    <!-- Theme Color Override -->

    <style>
        .theme-color{
            color: <?= $homeData['theme_color'] ?>!important;
        }
        .theme-bg-color{
            background-color: <?= $homeData['theme_color'] ?>!important;
        }
        .theme-border-color{
            border-color: <?= $homeData['theme_color'] ?>!important;
        }
        .navbar-light .navbar-nav .nav-link.active{
            color: <?= $homeData['theme_color'] ?>!important;
        }
        .navbar-light .navbar-nav .nav-link:hover{
            color: <?= $homeData['theme_color'] ?>!important;
        }
        .theme-btn-light {
            color: <?= $homeData['theme_color'] ?>!important;
            border-color: <?= $homeData['theme_color'] ?>!important;
        }
        .theme-btn-light:hover {
            color: #fff!important;
            background-color: <?= $homeData['theme_color'] ?>!important;
        }
        .nf-form-content input[type=submit] {
            color: <?= $homeData['theme_color'] ?>!important;
            border-color: <?= $homeData['theme_color'] ?>!important;
            background-color: #fff!important;
            border: 1px solid <?= $homeData['theme_color'] ?>!important;
            padding: 10px 25px;
            border-radius: 100px!important;
        }
        .nf-form-content input[type=submit]:hover {
            color: #fff!important;
            background-color: <?= $homeData['theme_color'] ?>!important;
        }

        /* ninja form font override */
        .nf-form-content label{
            font-family: "'Roboto', sans-serif"!important;
            font-weight: 400!important;
        }
    </style>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

    <?php

    // Navbar
    get_template_part('templates/components/global/header', null, $homeData['headerData']);

    // Components
    if($homeData['has_hero_bg'] && !$homeData['hero_empty']){
        get_template_part('templates/components/home/hero', null, $homeData['heroData']);  
    }

    if(!$homeData['about_empty']){
        get_template_part('templates/components/home/about', null, $homeData['aboutData']); 
    }

    if(!$homeData['qualification_empty']){
        get_template_part('templates/components/home/qualification', null, $homeData['qualificationData']);
    }

    if(!$homeData['skill_empty']){
        get_template_part('templates/components/home/skills', null, $homeData['skillsData']);
    }

    if(!$homeData['portfolio_empty']){
        get_template_part('templates/components/home/portfolio', null, $homeData['portfolioData']);
    }

    if(!$homeData['contact_empty']){
        get_template_part('templates/components/home/contact', null, $homeData['contactData']);
    }


    // Footer
    get_template_part('templates/components/global/footer', null, $homeData['footerData']);

    // Inherit WP footer, breaks JS upon removal. Kept in seperate component and forcibly hidden
    get_template_part('templates/components/global/old-footer');
    ?>

    <!-- Scroll to Bottom -->
    <i id="section-scroll" class="fa fa-2x fa-angle-down text-white scroll-to-bottom-1"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <!-- Typed words & main.js require jQuery. It is called during slick.js, so this jQuery is only called if portfolio is empty -->
    <?php if($homeData['portfolio_empty']): ?>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php endif; ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Template Javascript -->
    <script src="<?= $baseUrl . '/assets/js/main.js' ?>"></script>
</body>

</html>