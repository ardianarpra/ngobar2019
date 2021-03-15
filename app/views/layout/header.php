<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/product.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASE_URL; ?>"><b> Ihirrr Official</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto px-4">
                        <li class="nav-item active px-1">
                            <a class="nav-link" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="<?= BASE_URL; ?>/about">About</a>
                        </li>

                        <li class="nav-item dropdown px-1">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Data
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= BASE_URL; ?>/mahasiswa">Mahasiswa</a>
                                <a class="dropdown-item" href="<?= BASE_URL; ?>/dosen">Dosen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= BASE_URL; ?>/buku">Buku</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mr-4">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL; ?>/kontak">Hubungi Kami</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>

    <main role="main">