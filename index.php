<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
        <link rel="shortcut icon" href="img/favi.ico"/>
        <meta name="viewport" content="width=device-width" content="initial-scale=1.0, user-scalable=yes" />
        <title>Portfolio Mathieu Laurent</title>
    </head>
    <header>
        <nav>
            <div class="menu">
                <a href="#accueil">Accueil</a>
                <a href="#presentation">Présentation</a>
                <a href="#competence">Compétences</a>
                <a href="#realisation">Réalisation</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>
    <body>
        <div class="accueil" id="accueil">
            <h1 id="nomMath">Mathieu Laurent</h1>
            <h2>Développeur Web Junior</h2>
        </div>
        <div class="presentation" id="presentation">
            <h2 class="secteur" style="margin-top: 2%;">Présentation</h2>
            <div class="blocPresentation">
                <img src="img/photoMath.jpg" alt="photo de profil" id="pdp" class="slide">
                <div class="blocDroitePresentation">
                    <h2>Je me présente, Mathieu Laurent a votre service</h2>
                    <br>
                    <p>Passionné de développement depuis mes études, je continue à m'améliorer de jour en jour avec une pratique constante
                        et une optimisation de mes réalisations pour les apporter au goût du jour.
                        Ayant précédemment travaillé dans un domaine plus commercial, j'ai aussi développé une communication efficace que ce 
                        soit vis à vis d'un client ou en équipe. Je suis quelqu'un qui est très à l'écoute ce qui permet de comprendre les attentes 
                        de chacun.
                    </p>
                    <br>
                    <p>
                        Je recherche, à l'heure actuelle, un moyen de m'investir pleinement dans une entreprise pour accomplir des projets 
                        plus concret et continuer d'évoluer grâce à un réel partage de connaissance. C'est pourquoi je suis ouvert à vos propositions donc 
                        n'hésitez pas à me contacter!
                    </p>
                </div>
            </div>
        </div>


        <div class="inter"  id="competence">
            <h2>En recherche active pour un contrat</h2>
        </div>


        <div class="competences">
            <div class="blocGaucheCompetence">
                <h2 class="secteur">Compétences</h2>
                <img src="img/html.png" alt="html">
                <img src="img/css.png" alt="css">
                <img src="img/js.png" alt="js">
                <br>
                <img src="img/sql.png" alt="sql">
                <img src="img/php.png" alt="php">
                <br>
                <img src="img/symfony.png" alt="symfony" id="symfony">
            </div>
            <div class="blocDroiteCompetence">
                <img src="img/photoCV.png" alt="CV">
                <br>
                <button id="telecharger"><a href="download/CV_Laurent_Mathieu.pdf" download="CV_Laurent_Mathieu.pdf">Télécharger</a></button>
            </div>
        </div>
        
        
        <div class="inter" id="realisation">
            <h2>Réalisations en autodidacte</h2>
        </div>


        <div class="realisation">
            <div class="Ellzacandle card">
                <div class="card-content">
                    <h2 class="card-title">EllzaCandle</h2>
                    <p class="card-body">EllzaCandle est un site e-commerce de vente de bougies réalisé avec symfony. Il m'a permit d'apprendre à utiliser 
                le framework dans son ensemble et d'utiliser plusieurs notions tels que l'utilisation d'une API paiement, la bonne gestion
                d'un panier et d'un stock, etc..</p>
                    <button class="button"><a href="https://ellzacandle.com/">Consulter</a></button>
                </div>  
            </div>
           
            <div class="Streamerview card">
                <div class="card-content">
                    <h2 class="card-title">StreamerView</h2>
                    <p class="card-body">StreamerView est un site où vous pouvez avoir un profil personnalisé qui référence vos streamer 
                        préférés. J'ai eu l'idée de former un groupe de 3 développeurs pour réaliser, en parallèle de ma formation POEC, ce 
                        projet qui nous a aidé à pratiquer plus en détail toutes les notions que l'on a pu apprendre. Il a donc demandé un travail 
                        en html/css/javascript/SQL/symfony ainsi qu'une gestion de projet avec un travail en équipe sur Git.
                    </p>
                </div>
            </div>
            
            <div class="Portfolio card">
                <div class="card-content">
                    <h2 class="card-title">PortFolio</h2>
                    <p class="card-body">Le site où vous êtes actuellement, n'hésitez pas à le parcourir complètement pour en savoir plus sur moi!</p>
                </div>
            </div>
        </div>


        <div class="inter"  id="contact">
            <h2>N'hésitez pas a me contacter</h2>
        </div>


    </body>
    <footer>
        <div class="contact">
            <form class="form-style-9" action="config.php" method="POST">
                <ul>
                    <li>
                        <input type="text" name="nom" class="field-style field-split align-left" placeholder="Nom" value=""/>
                        <input type="text" name="prenom" class="field-style field-split align-right" placeholder="Prénom" value=""/>
                    
                    </li>
                    <li>
                        <label class="label-style">Email </label>
                        <input type="email" name="email" class="field-style field-full align-none" placeholder="Email" value=""/>
                    </li>
                    <li>
                        <label class="label-style">Objet </label>
                        <input type="text" name="objet" class="field-style field-full align-none" placeholder="Objet" value=""/>
                    </li>
                    <li>
                        <label class="label-style">Message </label>
                        <textarea name="description" class="field-style" placeholder="Entrez votre message.." value=""></textarea>
                    </li>
                    <li>
                        <label class="label-style">Entrez les 4 chiffres: </label>
                        <input name="captcha" type="text">
                        <img src="captcha.php" style="vertical-align: middle;"/>
                    </li>
                    <li>
                        <input type="submit" value="Envoyer" name="submit" />
                    </li>
                </ul>
            </form>      
        </div>
    </footer>
    

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="js/script.js"></script>
</html>