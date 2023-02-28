<?php
$filmLink = 'http://untitled20/film.php';
?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASTRAMAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <body>

    <header class="brand">

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="text_logo">
                    <h1>MDAMAX</h1>
                </div>
            </div>
        </div>
        <div class="menu">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href=<?= $filmLink ?>>Навбар</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= $filmLink ?>">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $filmLink ?>">Ссылка</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?= $filmLink ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Выпадающий список
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= $filmLink ?>">Действие</a></li>
                                    <li><a class="dropdown-item" href="<?= $filmLink ?>">Другое действие</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="<?= $filmLink ?>">Что-то еще здесь</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Отключенная</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                            <button class="btn btn-outline-success" type="submit">Поиск</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <section class="about_us">

        <div class="container-xxl">
            <div class="row">
                <div class="about">   <!-- ОТСТУПЫ -->
                    <h1><strong>ABOUT US</strong></h1>
                    <img src="separator.png" alt="">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h5>Website Design & Developme</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <div class="col">
                    <h5>Graphic Design & Advertising<span><i class="fa fa-long-arrow-right"></i></span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <div class="col">
                    <h5>Advertising & Marketing Strategy<span><i class="fa fa-long-arrow-right"></i></span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
        </div>

    </section>

    <section class="colons">

        <div class="container-fluid">
            <div class="our_works">
                <div class="heading-content text-center">
                    <h1><strong>OUR WORKS</strong></h1>
                </div>
                <div class="row">
                    <div class="main_mix_content whitebackground text-center">
                        <div class="main_mix_menu">
                            <button type="button" class="btn btn-light"><h5> All <span>/</span></h5></button>
                            <button type="button" class="btn btn-light"><h5>architecture <span>/</span></h5></button>
                            <button type="button" class="btn btn-light"><h5>Interior & Furniture Design <span>/</span></h5></button>
                            <button type="button" class="btn btn-light"><h5>Research & Graphic Design</h5></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
