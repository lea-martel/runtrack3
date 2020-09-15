<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Bootstrap</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LPTF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Units</a>
                    <a class="nav-link" href="#">Jobs</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Skills</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1 class="title"> LaPlateforme_ </h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="Papillon tropical vannes.jpg" class="card-img-top" alt="papillon">
                        <div class="card-body">
                            <h5 class="card-title">Un Papillon</h5>
                            <p class="card-text">Un papillons, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer</p>
                            <a href="#" class="btn btn">Commander votre propre papillon</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="jumbotron">
                        <h1 class="display-4">Bonjour Monde !</h1>
                        <p class="lead"> Il existe plusieurs visions du terme : </br> le monde est la matière, l'espace est les phénomème
                            qui nous sont accessibles par les sens, l'expérience ou la raison. </br> Le sens le plus courant désigne notre planète, la Terre, avec ses habitants et son environnement plus ou moins naturel.</p>
                        <hr class="my-4">
                        <p>Le sens étendu désigne l'univers dans son ensemble</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Rebooter le monde</a>
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span></div> </br> </br>


                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-2">
                    <ul class="list-group">
                        <li class="list-group-item active">Papillon</li>
                        <li class="list-group-item">Végétale</li>
                        <li class="list-group-item">Plante</li>
                        <li class="list-group-item">Insecte</li>
                        <li class="list-group-item">Couleur</li>
                        <li class="list-group-item">Terre</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="txt">Installation de AI 9000 </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="txt">Recevez votre copie gratuite d'internet </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control rounded-right" placeholder="Login" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Mot de passe</label>
                    </div>
                    <div class="txt">URL internet 2 et 2.1 Beta </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">DogeCoin</span>
                        </div>
                        <input type="text" class="form-control rounded-right" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">https://lespapillons.com</span>
                        </div>
                        <input type="text" class="form-control rounded-right" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="col">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Checkbox</div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Check me out
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
    </main>
</body>