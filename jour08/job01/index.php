<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Materialize</title>
</head>

<body>
  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"></a>
        <ul id="nav-mobile">
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Inscription</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Rechercher</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <section>
          <form action="#" style="margin-left:15px;">
          <div class="titre"> Civilité</div>
            <p>
              <label>
                <input name="group1" type="radio" checked />
                <span>M.</span>
              </label>
            </p>
            <p>
              <label>
                <input name="group1" type="radio" />
                <span>Mme</span>
              </label>
            </p>
                <div class="input-field col m6 s12">
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Prénom</label>
                </div>
                    <div class="input-field col m6 s12">
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Nom</label>
                    </div>
                        <div class="input-field col m6 s12">
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Adresse</label>
                        </div>
                          <div class="input-field col m6 s12">
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Mail</label>
                          </div>
                            <div class="input-field col m6 s12">
                              <input id="password" type="password" class="validate">
                              <label for="password">Mot de passe</label>
                            </div>
                          </div>
                            <div class="input-field col m6 s12">
                              <input id="password" type="password" class="validate">
                              <label for="password">Confirmation mot de passe</label>
                            </div>
                          </div>
                          <div class="titre"> Vos hobbies</div>
                          <p>
                            <label>
                              <input type="checkbox" />
                              <span>Sport</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input type="checkbox" checked="checked" />
                              <span>Voyage</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input type="checkbox" />
                              <span>Musique</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input type="checkbox" checked="checked" />
                              <span>Cinéma</span>
                            </label>
                          </p>
                          <p>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                        </form>
                    </div>
              </div>
    </section>
  </main>
  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer</h5>
                <p class="grey-text text-lighten-4">Formulaire de création de compte</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Accueil</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Inscription</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Connexion</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Rechercher</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</body>

</html>