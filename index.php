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
    
    <?php include 'about.php'; ?>
    <?php include 'features.php'; ?>
    <?php include 'structure.php'; ?>
    <?php include 'criteria.php'; ?>
    <?php include 'testimonials.php'; ?>
    <?php include 'partners.php'; ?>
    <?php include 'footer.php'; ?>

</body>

</html>