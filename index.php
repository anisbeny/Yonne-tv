<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/logo-tv-de-lyonnne.svg">
    <script src="./js/modal.js" defer></script>
    <script src="./js/nav.js" defer></script>
    <link rel="stylesheet" href="./css/index.css">
    <title>Accueil</title>
</head>

<body>
    <header>
        <a href="./index.html">
            <img src="img/logo-tv-de-lyonnne.svg" alt="logo" class="logo" width="80%">
        </a>
        <div class="txt_head">
            <div class="card_head">
                <ul class="menus">
                    <li><a href="decouvert.html">A Découvert</a></li>
                    <li><a href="./ccavant.html">C'était comment avant ?</a></li>
                    <li><a href="./imagePro.html">Images de Pros</a></li>
                    <li><a href="./JT.html">Le JT</a></li>
                    <li><a href="./couvert.html">Restons Couverts</a></li>
                    <li><a href="./topCulture.html">Top Culture</a></li>
                    <li><a href="./VoixDeGarage.html">Voix de Garage</a></li>
                </ul>
            </div>
        </div>
        <a href="Adhérer.html" class="don_asso"> Adhèrez à l'association !</a>
        <button class="burger"><span></span></button>
    </header>

    <main>
        <h1 class="titre">Accueil</h1>
        <article>
            <h2 class="sous_titre">TV de l'Yonne</h2>
            <div class="card_banner">
                <img src="img/Clipboard - 15 septembre 2021 15_07.png" alt="placeholder" width="100%">
                <p>TV DE L'YONNE est une Web TV du département de l'Yonne.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nihil explicabo unde blanditiis assumenda!
                    Doloremque modi atque culpa aliquid quisquam!</p>

            </div>
        </article>

        <article class="vids">
            <h2>Nos dernières vidéos</h1>
                <div class="Flex_container">
                    <figure>
                        <img src="img/jt-accueil.png" alt="placeholder" width="100%">
                        <figcaption>Le forum Sports & Loisirs du centre E.Leclerc de Saint-Denis-Lès-Sens </figcaption>
                        <a href="#">voir la vidéo</a>
                    </figure>
                    <figure>
                        <img src="img/241799784_321817019740554_3772092597613983079_n.jpeg" alt="placeholder" width="100%">
                        <figcaption>Conseil du club Sens Volley 89 </figcaption>
                        <a href="#">voir la vidéo</a>
                    </figure>
                </div>
                <div class="Flex_container">
                    <figure>
                        <img src="img/jamilah.png" alt="placeholder" width="100%">
                        <figcaption>La rentrée des classes du lycée d’Avallon</figcaption>
                        <a href="#">voir la vidéo</a>
                    </figure>
                    <figure>
                        <img src="img/BANNIERE-Ok.jpg" alt="placeholder" width="100%">
                        <figcaption>« L’Yonne notre mémoire »« Comment c’était avant ? Raconte-nous !»</figcaption>
                        <a href="#">voir la vidéo</a>
                    </figure>
                </div>
                <button><a href="">Toutes nos émissions</a></button>
        </article>

        <article class="map">
            <h2>Nous sommes passés par là</h2>
            <img src="img/map_placeholder.png" alt="map_placeholder" width="100%">
        </article>

        <div class="partenaires">
            <h2 class="titre_part">Les partenaires de la télé de l'Yonne</h2>
            <p>Grâce à vous, l’organisation de notre association se développe merveilleusement bien. Votre aide est pour
                beaucoup dans cette réussite et je tiens aujourd’hui
                à vous témoigner toute la reconnaissance de notre association.</p>
            <div class="logo_part">
                <img src="img/adt-logo.jpg" alt="adt" width="100%" class="marg_part">
                <img src="img/bdo-france.jpg" alt="bdo" width="100%" class="marg_part">
                <img src="img/budosport.jpg" alt="budosport" width="100%" class="marg_part">
                <img src="img/SUBOTAI-2021-black-RED.png" alt="subotai" width="100%" class="marg_part">
                <img src="img/euripole3.png" alt="euripol" width="100%" class="marg_part">
                <img src="img/E_LECLERC_Espace_Culturel_Pantone-e1617978474797.jpg" alt="espace culturel" width="100%" class="marg_part">
                <img src="img/charot.png" alt="charot" width="100%" class="marg_part">
                <img src="img/yonne-CD89.png" alt="conseil départemental" width="100%" class="marg_part">
                <img src="img/daly plastic.jpg" alt="daly plastic" width="100%" class="marg_part">
                <img src="img/le-silex.jpg" alt="silex" width="100%">
            </div>
            <button><a href="">Découvrez nos partenaires</a></button>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 class="titre">Mon Message :</h1>
                <div class="text_areas">
                    <textarea name="nom" id="nom" cols="50" rows="1" placeholder="Mon nom ..."></textarea>
                    <textarea name="mail" id="mail" cols="50" rows="1" placeholder="Mon mail ..."></textarea>
                    <textarea name="sujet" id="sujet" cols="50" rows="1" placeholder="Mon sujet ..."></textarea>
                    <textarea name="texte" id="text" cols="50" rows="10" placeholder="Une question, une remarque, une idée de reportage ou une suggestion pour le site ? Vous avez un projet et vous souhaitez nous en parler ?"></textarea>
                </div>
                <div class="buttons">
                    <p>Mon fichier</p>
                    <button class="parcourir">Parcourir</button>
                </div>
                <div class="buttons send">
                    <button>Envoyer</button>
                </div>
                <p class="tel">**Vous pouvez également nous contacter par téléphone au : 06 07 13 07 29</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="contenu">
            <div class="logo">
                <img class="logo-f" src="img/logo-tv-de-lyonnne.png" alt="">
            </div>
            <p class="texte">La Télé de l’Yonne a pour vocation de rapporter une information culturelle de qualité
                relative aux manifestations de l’Yonne à travers un journal télévisuel, des chroniques et des
                reportages.</p>

            <div class="logo-footer">
                <img class="icon" src="img/icon-facebook.png" alt="">
                <img class="icon" src="img/icon-inkedin.png" alt="">
                <img class="icon" src="img/icon-instagram.png" alt="">
                <img class="icon" src="img/icon-twitter.png" alt="">

            </div>
        </div>

      <?php include_once 'includes/newsletters.php' ?>

        <div class="lien">
            <a class="myBtn">Nous contacter</a>
            <a href="">Cookies</a>
            <a href="./Mentions légales.html">Mentions légales</a>
        </div>
    </footer>

</body>

</html>