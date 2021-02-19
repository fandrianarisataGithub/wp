<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Navbar
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="# navbarColor02" aria-controls="navbarColor02" aria-extended="false" aria-label="Basculer la navigation ">
            <span class="navbar-toggler-icon"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Fonctionnalités</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Tarification</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>À propos de</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span>Menu déroulant</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <span>Action</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span>Une autre action</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span>Autre choix ici</span>
                        </a>
                        <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="#">
                            <span>Lien séparé</span>
                        </a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Chercher">
                <button class="btn btn-secondaire my-2 my-sm-0" type="submit">
                    <span>Chercher</span>
                </button>
            </form>
        </div>
    </nav>
    <div class="container">