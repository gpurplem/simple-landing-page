<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'head.php' ?>

    <title>Simple Landing Page</title>
</head>

<body style="background-image: linear-gradient( 107deg, #0c2481 15%, #570575 100%)" class="font">
    <!-- Navigation bar -->
    <nav class="navbar sticky-top navbar-expand-lg" style="background: rgb(9 3 127);">
        <div class="container">
            <a href="#" class="navbar-brand" style="padding-left:16px">
                Conheça o Lorem
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                style="background: #9693d8;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04" style="justify-content: right;">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#section-sobre" class="nav-link" aria-current="page">Sobre</a></li>
                    <li class="nav-item"><a href="#section_features" class="nav-link">Recursos</a></li>
                    <li class="nav-item"><a href="#section-structure" class="nav-link">Estrutura</a></li>
                    <li class="nav-item"><a href="#section-criteria" class="nav-link">Critérios</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img src="./images/moodle-icon.png" alt="Moodle Logo" width="30" height="24"
                                class="d-inline-block align-text-top">
                            Cursos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Presentation image -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div
                style="height: 100%;width: 100%;position: absolute;z-index: 2;display: flex;align-items: center;justify-content: center;">
                <img src="./images/triangle.png" class="watermark" alt="">
            </div>
            <div class="carousel-item active">
                <img src="./images/carousel/carrousel (1).jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/carousel/carrousel (2).jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/carousel/carrousel (3).jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
        </div>
    </div>

    <!-- section - about -->
    <div id="section-sobre"></div>
    <div class="container py-5" style="border-radius: 50px; background: hsl(0deg 0% 100% / 17%); margin-top: 50px;">
        <div class="row gy-5" style="padding: 20px;">
            <div class="col-lg">
                <ul class="px-3 gradient-text-blue-purple">
                    <li>
                        <h6>SOBRE</h6>
                    </li>
                </ul>
                <h2 class="gradient-text-blue-purple">O QUE É O</h2>
                <h2 class="gradient-text-blue-purple">LOREM IPSUM?</h2>
                <p style="color: #e3e8fb;text-align: justify;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam, urna in sagittis commodo,
                    libero elit hendrerit eros, eget aliquam leo augue quis tellus. Aliquam sollicitudin felis at metus
                    luctus, eu hendrerit nibh gravida. Integer eget erat eget nisl condimentum rhoncus a ac dui. Ut id
                    maximus mauris, ac molestie tellus. Vestibulum tempus quam eget orci maximus, id feugiat nisl
                    luctus. Maecenas risus libero, gravida ut tempor sed, blandit et nulla. Vestibulum hendrerit, ipsum
                    ut auctor lacinia, nulla mi faucibus sapien, a dapibus nibh purus non odio. Quisque nisi ligula,
                    facilisis at congue in, vehicula vel sem. Etiam pellentesque vel nulla non blandit. Praesent
                    aliquet, ex a dignissim ullamcorper, dui ipsum rutrum nisi, a ultricies augue sem ac ipsum. Aenean
                    sit amet pulvinar est. Ut egestas convallis odio, eu tincidunt lorem elementum eget.
                </p>
            </div>
            <div class="col-lg" style="align-self: center;">
                <div class="d-flex video-container" style="height: 250px">
                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/uTLY6dylbBE"
                        title="ConectaHealth Intro" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="" style="border-radius: 50px;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- section - features -->
    <div class="container py-5" id="section_features">
        <div class="row py-3">
            <div class="text-center fs-2 fw-bold">
                <span>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT?</span>
            </div>

        </div>
        <div class="row py-4 gap-5 card-group">
            <div class="col-md gap-5">
                <div class="card mx-auto h-100" style="width: 16rem;border-radius: 50px;">
                    <img src="./images/mentoria.png" alt="..." class="features__img">
                    <div class="card-body">
                        <h5 class="card-title gradient-text-dark">Maecenas aliquam</h5>
                        <p class="card-text gradient-text-dark">Urna in sagittis commodo, libero elit hendrerit eros,
                            eget aliquam leo augue quis tellus. Aliquam sollicitudin felis at metus luctus, eu hendrerit
                            nibh gravida. </p>
                    </div>
                </div>
            </div>
            <div class="col-md gap-5">
                <div class="card mx-auto h-100" style="width: 16rem;border-radius: 50px;">
                    <img src="./images/inovacao-saude.png" class="features__img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title gradient-text-dark">Integer eget erat eget nisl condimentum rhoncus a ac
                            dui</h5>
                        <p class="card-text gradient-text-dark">Ut id maximus mauris, ac molestie tellus. Vestibulum
                            tempus quam eget orci maximus, id feugiat nisl luctus. Maecenas risus libero, gravida ut
                            tempor sed, blandit et nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card mx-auto h-100" style="width: 16rem;border-radius: 50px;">
                    <img src="./images/provas-conceitos.png" class="features__img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title gradient-text-dark">Vestibulum hendrerit</h5>
                        <p class="card-text gradient-text-dark">Ipsum ut auctor lacinia, nulla mi faucibus sapien, a
                            dapibus nibh purus non odio. quisque nisi ligula, facilisis at congue in, vehicula vel sem.
                            Etiam pellentesque vel nulla non blandit. Praesent aliquet, ex a dignissim ullamcorper, dui
                            ipsum rutrum nisi, a ultricies augue sem ac ipsum.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include 'structure.php'; ?>
    <?php include 'criteria.php'; ?>
    <?php include 'testimonials.php'; ?>
    <?php include 'partners.php'; ?>
    <?php include 'footer.php'; ?>

</body>

</html>