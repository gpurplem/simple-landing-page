<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./bootstrap-css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="./bootstrap-js/bootstrap.js"></script>

    <title>ConectaHealth</title>

    <style>
        a {
            color: #c4c4ff !important;
            font-family: 'Montserrat', sans-serif !important;
        }

        .font {
            color: #c4c4ff !important;
            font-family: 'Montserrat', sans-serif !important;
        }

        .gradient-text-blue-purple {
            background-color: #CA4246;
            /* Fallback*/
            background-image: linear-gradient(45deg, #c1bbfe 16.666%, #fe8af0 83.333%);

            /* Set the background size and repeat properties. */
            background-size: 100%;
            background-repeat: repeat;

            /* Use the text as a mask for the background. */
            /* This will show the gradient as a text color rather than element bg. */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .gradient-text-dark {
            background-color: #CA4246;
            background-image: linear-gradient(45deg, #0b045c 30%, #20011c 60%);
            background-size: 100%;
            background-repeat: repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .features__img {
            width: 60%;
            margin: auto;
        }

        .carousel-image {
            aspect-ratio: 4/2;
            z-index: 1;
            position: relative;
            filter: opacity(0.5);
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: white;
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(0, 19, 77);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgb(0, 19, 77);
        }

        .watermark {
            width: 850px;
            position: absolute;
            z-index: 2;
        }

        @media screen and (max-width: 800px) {
            .watermark {
                width: 300px;
            }
        }
    </style>
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

    <!-- section - structure -->
    <div id="section-structure"></div>
    <div class="container py-5" style="border-radius: 50px; background: hsl(0deg 0% 100% / 17%); margin-top: 50px;">
        <div class="row gy-5" style="padding: 20px;">
            <div class="col-lg">
                <div class="d-flex w-100">
                    <img src="./images/up.png" class="img-fluid" alt="Fluxo" style="border-radius: 50px;">
                </div>
            </div>
            <div class="col-lg">
                <ul class="px-3">
                    <li>
                        <h6 class="gradient-text-blue-purple">ESTRUTURA</h6>
                    </li>
                </ul>
                <h2 class="gradient-text-blue-purple">COMO FUNCIONA</h2>
                <h2 class="gradient-text-blue-purple">O LOREM IPSUM?</h2>
                <p style="color: #e3e8fb;text-align: justify;">
                    Praesent dictum lorem non tellus viverra elementum. Maecenas ullamcorper nisl sed congue iaculis.
                    Vestibulum ullamcorper nisi mattis tortor sollicitudin, ut tempor quam sodales. Ut in consequat
                    purus. Sed lobortis purus lacus, vel euismod augue aliquet sed. Cras vel erat tortor. Praesent et
                    varius odio, a congue enim. Nam consectetur ornare sapien in bibendum. Sed vel nisl eget ex laoreet
                    ullamcorper sed varius purus. Vestibulum ac mauris id tellus porta pellentesque ac non lorem.
                </p>
            </div>

        </div>
    </div>

    <!-- section - criteria -->
    <div class="container py-5" id="section-criteria">
        <div class="row gy-5">
            <style>
                #img-brazil {
                    position: relative;
                    overflow: hidden;
                }

                #img-brazil::before {
                    content: "";
                    position: absolute;
                    width: 200%;
                    height: 200%;
                    top: -50%;
                    left: -50%;
                    z-index: -1;
                    background-image: url(./images/brazil.bmp);
                    background-repeat: space;
                    transform: rotate(344deg);
                    background-size: 100px 99px;
                }

                @media screen and (max-width: 767px) {
                    #img-brazil {
                        display: none;
                    }
                }
            </style>

            <div class="col-md-4 card" style="background-color: transparent;border: none;">
                <div class="card-body" id="img-brazil">
                </div>
            </div>


            <div class="col-md-8">
                <div class="d-flex flex-column">
                    <ul class="px-3">
                        <li>
                            <h6 class="gradient-text-blue-purple">CRITÉRIOS</h6>
                        </li>
                    </ul>
                    <h2 class="gradient-text-blue-purple">QUEM PODE PARTICIPAR</h2>
                    <h2 class="gradient-text-blue-purple">DO LOREM IPSUM?</h2>
                </div>

                <div class="row justify-content-md-around">
                    <div class="col-md card mb-3 mx-auto"
                        style="max-width: 18rem;border-radius: 50px; background: hsl(0deg 0% 100% / 17%); margin-top: 20px;">
                        <div class="card-header text-center">SOLUÇÃO</div>
                        <div class="card-body">

                            <p class="card-text">Integer non est mollis, consectetur dolor nec, interdum odio. Proin ac
                                mauris vitae nunc dapibus pretium vitae et purus. Maecenas eu aliquam ligula. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-md card  mb-3 mx-auto"
                        style="max-width: 18rem;border-radius: 50px; background: hsl(0deg 0% 100% / 17%); margin-top: 20px;">
                        <div class="card-header text-center">ESTÁGIO</div>
                        <div class="card-body">

                            <p class="card-text">Mauris rhoncus nisl ut tristique tincidunt. Suspendisse tincidunt sit
                                amet elit nec egestas. Nam faucibus justo et arcu posuere, placerat molestie arcu
                                luctus. Nullam tincidunt erat in euismod pharetra. Morbi gravida tellus vitae magna
                                commodo cursus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section - testimonials -->
    <div class="container py-5" style="border-radius: 50px; background: hsl(0deg 0% 100% / 17%); margin-top: 50px;">
        <div class="col gy-5" style="padding: 20px;">
            <div class="row">
                <ul class="px-3 gradient-text-blue-purple">
                    <li>
                        <h6>BEM-VINDOS</h6>
                    </li>
                </ul>
                <h2 class="gradient-text-blue-purple">SEJAM BEM-VINDOS AO</h2>
                <h2 class="gradient-text-blue-purple">INTEGER NON EST MOLLIS</h2>
            </div>
            <div class="row px-5" style="margin-top: 30px;">
                <div class="col-md-3 text-center align-self-center">
                    <img src="./images/Claudette.jpg" alt="Claudette"
                        style="border-radius: 50%;width: 150px;height: 150px;">
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <p style="color: #e3e8fb;text-align: justify;">
                            "Cras et mauris fringilla, auctor nisi nec, consequat nibh. Integer vulputate, augue quis
                            facilisis tincidunt, nulla ante consectetur ante, in molestie ipsum ligula vitae nulla. In
                            hac habitasse platea dictumst. Curabitur a tincidunt mauris. Vestibulum gravida tristique
                            ligula vitae pellentesque. Cras orci dui, suscipit ac lacus ac, malesuada fringilla urna.
                            Suspendisse lobortis metus nibh, eu rutrum libero ultricies eget. Phasellus ut mauris in
                            eros pharetra sollicitudin."
                        </p>
                        <p style="color: #e3e8fb;" class="text-center">
                            CLAUDETTE
                        </p>
                        <p style="color: #e3e8fb;" class="text-center">
                            MAURIS ULTRICES FINIBUS
                            FELIS NON PORTTITOR
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="display: inline-block;height: 20px;">
    </div>

    <!-- section - partners -->
    <div class="container py-5">
        <div class="row gy-5">
            <div class="row">
                <ul class="px-3 gradient-text-blue-purple">
                    <li>
                        <h6>PARCEIROS</h6>
                    </li>
                </ul>
                <h2 class="gradient-text-blue-purple">QUEM REALIZA O</h2>
                <h2 class="gradient-text-blue-purple">LOREM IPSUM?</h2>
            </div>

            <div class="row" style="row-gap: 50px;">

                <div class="col-lg-6 row-12">
                    <p class="gradient-text-blue-purple">REALIZAÇÃO:</p>
                    <div class="row align-items-center justify-content-sm-around">
                        <div class="col-sm-4 col-12" style="text-align: center;">
                            <img src="./images/partners/logo 1.jpg" class="img-fluid" alt=""
                                style="width: 158px;height: 45px">
                        </div>
                        <div class="col-sm-3 col-12"></div>
                        <div class="col-sm-3 col-12"></div>
                    </div>
                </div>

                <div class="col-lg-6 row-12">
                    <p class="gradient-text-blue-purple">PARCEIRO:</p>
                    <div class="row align-items-center justify-content-sm-around">
                        <div class="col-sm-4 col-12" style="text-align: center;">
                            <img src="./images/partners/logo 7.jpg" class="img-fluid" alt=""
                                style="width: 192px;height: 55px;">
                        </div>
                        <div class="col-sm-3 col-12"></div>
                        <div class="col-sm-3 col-12"></div>
                    </div>
                </div>

                <div class="row-lg-12">
                    <p class="gradient-text-blue-purple">EXECUÇÃO TÉCNICA:</p>
                    <div class="row align-items-center justify-content-sm-around" style="gap:50px">
                        <div class="col-sm-3 col-12" style="text-align: center;">
                            <img src="./images/partners/logo 5.jpg" class="img-fluid" alt=""
                                style="height: 88px;width: 97px;">
                        </div>
                        <div class="col-sm-3 col-12" style="text-align: center;">
                            <img src="./images/partners/logo 2.jpg" class="img-fluid" alt=""
                                style="width: 120px;height: 80px;">
                        </div>
                        <div class="col-sm-3 col-12" style="text-align: center;">
                            <img src="./images/partners/logo 8.jpg" class="img-fluid" alt=""
                                style="height: 79px;width: 97px;">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- section - footer -->
    <footer style="background: hsl(0deg 0% 100% / 17%);">
        <div class="container py-5">
            <div class="row row-gap-5">
                <div class="row-12 col-lg-1 justify-content-evenly align-self-sm-center d-flex flex-row flex-lg-column align-items-sm-center"
                    style=" gap: 35px; font-size: 2em;">
                    <a class="text-decoration-none" href="https://www.facebook.com">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="text-decoration-none" href="https://www.instagram.com">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="text-decoration-none" href="https://www.linkedin.com">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>

                <div class="row-12 col-lg-7 align-self-center text-center">
                    <span>Lorem Ipsum</span>
                    <hr style="width: 100%; background-color: white; height: 0.1vh; opacity: 1;">
                    <div class="d-flex" style="text-align: justify;">
                        Mauris ultrices finibus felis non porttitor. In lacus eros, tincidunt ut justo sit amet,
                        interdum dapibus dolor. Etiam et euismod metus. Fusce ullamcorper massa nisi, vitae feugiat elit
                        aliquam ac. Praesent volutpat euismod semper. Quisque eu lobortis magna, nec lacinia massa.
                        Aliquam at tortor sollicitudin, dictum ante vitae, ultricies massa. Praesent in dictum tortor.
                    </div>
                </div>

                <div
                    class="row-12 col-lg-4 d-flex flex-row flex-lg-column align-self-lg-center justify-content-center align-items-center">
                    <div class="card"
                        style="width: 18rem;background: none;border: none;align-items: center;text-align: center;">
                        <i class="bi bi-person-check-fill" style="font-size: 2em;"></i>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="card"
                        style="width: 18rem;background: none;border: none;align-items: center;text-align: center;">
                        <i class="bi bi-briefcase-fill" style="font-size: 2em;"></i>
                        <div class="card-body">
                            <p class="card-text">Ut id maximus mauris, ac molestie tellus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>