<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes" />
  <script src="https://kit.fontawesome.com/5a25ce672a.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="logo-LM.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Portfolio</title>
</head>

<body>
  <header>
    <nav id="menu-nav">
      <div id="toplogo">
        <a href="Portfolio.html"><img id="logo" src="logo LM.png" alt="logo-header"></a>
        <ul id="menu-link">
          <li><a class="link_header" href="CV-Léa">CV</a></li>
          <li><a class="link_header" href="#competences">COMPÉTENCES</a></li>
          <li><a class="link_header" href="#portfolio">RÉALISATIONS</a></li>
          <li><a class="link_header" href="#">CONTACT</a></li>
        </ul>
    </nav>
    </div>
  </header>
  <main>
    <div class='container-projects'>
      <h1>DEVELOPPEUR WEB & GRAPHIC DESIGNER </h1>
      <h2 id='sous-titre'> Diplômé d'un Bac pro en Production Grahique et d'un BTS Étude d'un projet de communication. </h2>
      <div class="overlay">
      </div>
    </div>
    <div id='container-com'>
      <div class='title' id="competences">COMPÉTENCES</div>
      <div class='container-fluid d-flex justify-evenly'>
        <div class="circle">
          <span></span>
          <span></span>
          <h4 class="circle-text">HTML</h4>
        </div>
        <div class="circle">
          <span></span>
          <span></span>
          <h4 class="circle-text">CSS </h4>
        </div>
        <div class="circle">
          <span></span>
          <span></span>
          <h4 class="circle-text">PHP<br />SQL</h4>
        </div>
        <div class="circle">
          <span></span>
          <span></span>
          <h4 class="circle-text">JS</h4>
        </div>
        <div class="circle">
          <span></span>
          <span></span>
          <h4 class="circle-text" title="Illustrator">AI</h4>
        </div>
        <div class="circle">
          <span></span>
          <span></span>
          <h4 class="circle-text" title="Photoshop">PS</h4>
        </div>
        <div class="circle">
          <span></span>
          <span></span>
          <h4 class="circle-text" title="Indesign">ID</h4>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
      <div class='block-title' id="portfolio">MES RÉALISATIONS</div>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="projet-menuiserie.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Menuiserie</h5>
            <p class="card-text">Projet réalisés en HTML / CSS en collaboration à LaPLateforme.</p>
            <a href="file:///C:/Users/lea04/OneDrive/Bureau/Portfolio/R%C3%A9alisations/Menuiserie/accueil.html"><button
                type="button" class="btn btn-dark">Voir plus</button></a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="projet-livreor.PNG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Livre d'or</h5>
            <p class="card-text">Projet réalisées en PHP / HTML / CSS / en collaboration à LaPLateforme.</p>
            <a href="http://localhost/livre-or/index.php"><button type="button" class="btn btn-dark">Voir
                plus</button></a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="projet-marseille.PNG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Ville de Marseille</h5>
            <p class="card-text">Projet réalisées en / HTML / CSS en collaboration à LaPLateforme.</p>
            <a href="file:///C:/Users/lea04/OneDrive/Bureau/Portfolio/R%C3%A9alisations/ville-marseille/accueil.html"><button
                type="button" class="btn btn-dark">Voir plus</button></a>
          </div>
        </div>
      </div>
		<div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="projet-discussion.PNG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Discussion</h5>
            <p class="card-text">Projet réalisés en HTML / CSS / PHP en collaboration à LaPLateforme.</p>
            <a href="file:///C:/Users/lea04/OneDrive/Bureau/Portfolio/R%C3%A9alisations/Menuiserie/accueil.html"><button
                type="button" class="btn btn-dark">Voir plus</button></a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="projet-forum.PNG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Forum</h5>
            <p class="card-text">Projet réalisées en PHP / HTML / CSS / en collaboration à LaPLateforme.</p>
            <a href="http://localhost/livre-or/index.php"><button type="button" class="btn btn-dark">Voir
                plus</button></a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="projet-reservation.PNG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Réservation salles</h5>
            <p class="card-text">Projet réalisées en PHP / HTML / CSS en collaboration à LaPLateforme.</p>
            <a href="file:///C:/Users/lea04/OneDrive/Bureau/Portfolio/R%C3%A9alisations/ville-marseille/accueil.html"><button
                type="button" class="btn btn-dark">Voir plus</button></a>
          </div>
        </div>
      </div>
    </div>
 <div class="container">
        <div class="project-show" id="contact">
			<div class='block-title' id="contact">CONTACT</div>
            <form method="post" action="index.php">
  	              <div class="form-group">
					<div class="form-group">
        			<label for="exampleFormControlInput">Nom:</label>
        			<input type="text" class="form-control" name="nom" id="exampleFormControlInput"
               		placeholder="Nom">
    			</div>
					<div class="form-group">
        			<label for="exampleFormControlInputP">Prénom:</label>
        			<input type="text" class="form-control" name="prenom" id="exampleFormControlInputP"
               		placeholder="Prénom">
    			</div>
					<div class="form-group">
                    <label for="exampleFormControlInput1">Adresse Email:</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                           placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Objet de votre message:</label>
                    <input type="text" class="form-control" name="sujet" id="exampleFormControlInput2"
                           placeholder="Votre sujet">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Votre Message:</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                              style="overflow:auto;resize:none"></textarea>
                </div>
                <div id="button">
                    <button class="btn btn-primary btn-lg" id="button" type="submit">Envoyer <i
                                class="fas fa-check"></i>
                    </button>
                </div>
				</div>
            </form>
            <?php
            if (isset($_POST['message'])) {
                $position_arobase = strpos($_POST['email'], '@');
                if ($position_arobase === false)
                    echo '<p>Votre email doit comporter un arobase.</p>';
                else {
					 $headers[] = 'Content-type: text/html; charset=iso-8859-1';
					 $headers[] = 'From: '.$_POST['nom'] .' ' .$_POST['prenom'] . ' <' . $_POST['email'] . '>';
                    $retour = mail('lea.martel@laplateforme.io', $_POST['sujet'], $_POST['message'], implode("\r\n", $headers));
                    if ($retour)
                        echo '<p>Votre message a été envoyé.</p>';
                    else
                        echo '<p>Erreur.</p>';
                }
            }
            ?>

        </div>
    </div>
      <footer>
        <div class="footer">
          <div class="block-footer">RÉSEAUX</div>
              <div class="social-network">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="https://fr.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            </div>
          </div>
      </footer>
  </main>
</body>

</html>