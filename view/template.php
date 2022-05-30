<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/template_styles.css" type="text/css">
    <link rel="stylesheet" href="public/css/styles.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="module" src="locarando.js"></script>
</head>
<body>
    <header >
        <nav>
        <!-- Navigation tablette,destop -->
            <div class="navigation">
                <div class="menu"><a href="index.php?page=about">A PROPOS</a></div>
                <div class="menu"><a href="index.php?page=categories">CATEGORIES PRODUITS</a></div>
                <div class="menu"><a href="index.php"> 
                    <img class="logo-blanc" src="./public/images/loca'rando_logo.png" alt=""></a>
                </div>
                <div class="menu"><a href="index.php?page=contact">CONTACT</a></div>
                <div class="menu"><a href="index.php?page=avis">AVIS</a></div>
                <div class="menu"><a href="index.php?page=connexion">COMPTE</a></div>
            </div>
        <!-- Navigation mobile -->
            <div class="navbar">
                <input type="checkbox" class="burger">
                <div class="hamburger"><div></div></div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                <li><a href="index.php?"><img class="logo-blanc" src="./public/images/loca'rando_logo.png" alt=""></a></li>
                                <li><a href="index.php?page=about">A PROPOS</a></li>
                                <li><a href="index.php?page=categories">CATEGORIES PRODUITS</a></li>
                                <li><a href="index.php?page=contact">CONTACT</a></li>
                                <li><a href="index.php?page=avis">AVIS</a></li>
                                <li><a href="index.php?page=connexion">COMPTE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bandeau">
                <div class="container bandeau-inner">
                    <a href="index.php">
                        <img class="logo-blanc" src="./public/images/loca'rando_logo.png" alt=""></a> 
                        <div class="icones">
                            <a href="index.php?page=connexion"><i class="fas fa-user fa-1x user"></i></a>
                            <a href="index.php?page=panier"><i class="fas fa-shopping-basket"></i></a>
                        </div>
                </div>
                
            </div>
        </nav>
    </header>
<main>
    <?=$content?> 
</main> 
<footer>
    <div class="bcg_image">
        <div class="text_foot">
           <h4><a href="index.php?page=contact">Une question ? Contactez-nous !</a></h4>
        </div>
        <div class="text_foot">
           <h4><a href="index.php?page=about">Conditions générales</a></h4>
        </div>
    </div>    
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

</body>
</html>