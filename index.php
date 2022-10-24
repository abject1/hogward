<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include_once "./public/include/head.php" ?>
</head>

<body>
    <header class="p-10">
        <h1 class="p-5 m-10">Tous savoir sur l'univer des livres Harry Potter</h1>
        <div class="upNav">
            <h3 class="m-5">Les personnes dans tous leurs détails et les Sorts</h3>
            <img src="./public/assets/img/blazon_hogwarts.jpg" alt="Blazon de Hogwarts">
            <div id="menuBurger">
                <span id="spanUn"></span>
                <span id="spanDeux"></span>
                <span id="spanNotSeen"></span>
            </div>
        </div>
        <nav id="nav" class="overflow">
            <ul>
                <li class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : ' ' ?>">
                    <a href="#">Les différentes maisons</a>
                </li>
                <li class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : ' ' ?>">
                    <a href="#">Tout les Personnages</a>
                </li>
                <li class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : ' ' ?>">
                    <a href="#">Tout les Sorts</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>