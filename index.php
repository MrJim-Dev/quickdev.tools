<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/icons/favicon@2x.png" type="image/x-icon">
    <!-- ========================================= Css files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>QuickDev - </title>

    <style>
        .item-content {
            text-align: center;
        }

        .item-description {
            padding-top: 10px;
        }


        .header-title {
            margin-bottom: 0;
        }

        .header-description {
            font-size: 18px;
            margin-top: .8em !important;
        }

        .text-logo {
            font-size: 26px;
        }

        .text-logo-sm {
            font-size: 14px;
        }
    </style>
</head>

<body class="index-page">
    <!-- =========================== header-->
    <header class="header-page header-index">

        <?php include("components/nav.php"); ?>

        <div class="container">
            <div class="header-wrap">
                <h2 class="header-title" data-aos="fade-up" data-aos-delay="500">Boost your design and development workflow</h2>
                <p class="header-description text-center ml-auto mr-auto">Access a wide range of powerful tools for designers and developers, including color pickers, fonts, video courses, and more, all in one place!
                </p>
                <div class="space-top"></div>

            </div>
        </div>
    </header>
    <!-- ================================= SECTION DEMOS -->
    <section class="section is-lg section-demos pt-0 space-top-min bg-transparent">
        <div class="container">
            <div class="row min-40">

                <?php
                $tools = json_decode(file_get_contents('data/tools.json'), true)['tools'];

                foreach ($tools as $tool) {
                    echo '<a target="_blank" href="' . $tool['url'] . '" class="demo-item col-lg-4 col-md-6 ">
                            <div class="item-img">
                                <img src="assets/images/screens/Home_2.png" alt="">
                            </div>
                            <div class="item-content">   
                                <h4 class="item-title">' . $tool['name'] . '</h4>
                                <p class="item-description">' . $tool['description'] . '</p>
                            </div>
                        </a>';
                }

                ?>



            </div>
        </div>
    </section>


    <?php include("components/footer.php"); ?>




    <!-- ====================================== js files  -->
    <script src="assets/js/plugins/jQuery.min.js"></script>
    <script src="assets/js/plugins/modernizr.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather-icons.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/typed.js"></script>
    <script src="assets/js/plugins/all.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="assets/js/plugins/particles.min.js"></script>
    <script src="assets/js/plugins/app.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>