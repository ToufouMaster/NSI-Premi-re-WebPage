<!DOCTYPE html>
<html>
    <head>
        <title>Pompiers de France</title>
        <meta charset="UTF-8">
        <link href="header.css" rel="stylesheet">
        <link href="introduction.css" rel="stylesheet">
        <link href="images.css" rel="stylesheet">
        <link href="contact.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" sizes="64x64">
        <link rel="shortcut icon" href="favicon.ico">
        <script src="Scripts/contact.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <a href="/"><img src="Images/FSPF.png"></a>
                <ul class="MenuList">
                    <li>
                        <a href="/"><p>Menu</p></a>
                    </li>
                    <li>
                        <a href="/actions.php"><p>Nos actions</p></a>
                    </li>
                    <li>
                        <a href="#contact"><p>Contactez nous</p></a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="Intro" id="intro">
            <h1>Nous Connaitre!</h1>
            <p>Qu’on les appelle pompiers, soldat du feu ou sapeurs-pompiers, ces combattants volontaires, professionnels ou militaires sont au service des populations pour leur venir en aide. Incendie domestique, accident de la route, secours d’urgence aux personnes : autant de situations où les sapeurs-pompiers doivent intervenir en tenues de protection et avec des véhicules de secours adaptés au type d’urgence rencontrée.</p>
        </div>
        <div class="Images" id="actions">
            <h2>Nos Actions!</h2>
            <ul>
                <li>
                    <img src="Images/Actions3.jpg">
                </li>
                <li>
                    <img src="Images/Actions1.jpg">
                </li>
                <li>
                    <img src="Images/Actions2.jpg">
                </li>
                <li>
                    <img src="Images/Actions3.jpg">
                </li>
                <li>
                    <img src="Images/Actions1.jpg">
                </li>
            </ul>
        </div>
        <div class="Contact" id="contact">
            <h3>Nous Contacter!</h3>
            <form action="sendMail.php" method="post" id="contactForm">
                <input name="name" type=text placeholder="françois">
                <input name="email" type=email placeholder="francois.rubier@gmail.com">
                <input name=tel type=tel placeholder="0684791034">
                <textarea name="msg" cols="90" rows="15"></textarea>
                <input name="sub" type=submit value="Envoyer">
            </form>
            <script>
                fname = document.querySelector("#contactForm input[name='name']");
                ftel = document.querySelector("#contactForm input[name='tel']");
                fmail = document.querySelector("#contactForm input[name='email']");
                ftext = document.querySelector("#contactForm textarea[name='msg']");
                fsubmit = document.querySelector("#contactForm input[name='sub']");
            </script>
        </div>
        <footer></footer>
    </body>
</html>
