<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
    body {
        background: #E5E5E5;
        font-family: "Roboto", sans-serif;
    }
    .get-in-touch {
    max-width: 800px;
    margin: 20px auto;
    position: relative;

    }
    .get-in-touch .title {
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 3.2em;
    line-height: 48px;
    padding-bottom: 28px;
        background: #333333;
        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
    }

    .contact-form .form-field {
    position: relative;
    margin: 22px 0;
    }
    .contact-form .input-text {
    display: block;
    width: 100%;
    height: 36px;
    border-width: 0 0 2px 0;
    border-color: #333333;
    font-size: 18px;
    line-height: 26px;
    font-weight: 400;
    background: #fff;
    }
    .contact-form .input-text:focus {
    outline: none;
    }
    .contact-form .input-text:focus + .label,
    .contact-form .input-text.not-empty + .label {
    -webkit-transform: translateY(-24px);
            transform: translateY(-24px);
    }
    .contact-form .label {
    position: absolute;
    left: 20px;
    bottom: 21px;
    font-size: 18px;
    line-height: 26px;
    font-weight: 400;
    color: #333333;
    cursor: text;
    transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    transition: transform .2s ease-in-out, 
    -webkit-transform .2s ease-in-out;
    }
    .contact-form .submit-btn {
    display: inline-block;
    background-color: #000;
    background-image: linear-gradient(125deg,#7DF19D,#7DF19D);
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 16px;
    padding: 8px 16px;
    border: none;
    width:200px;
    cursor: pointer;
    }
    .contact-form .submit-btn :hover {
        display: inline-block;
    background-color: #000;
    background-image: linear-gradient(125deg,#217739,#7DF110);
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 16px;
    padding: 8px 16px;
    border: none;
    width:200px;
    cursor: pointer;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TS-Immo Modifier proprietaire</title>
</head>
<body>

    <div class="row w-50" style="z-index: 5px; position: absolute;">
        <div class="col-3">
            <nav class ="navbar bg-dark">
                <ul class ="nav navbar-nav mx-4" style="height: 950px; padding-top: 200px; font-size: 18px;">
                    <li class ="nav-item">
                        <a class ="nav-link text-light pt-5" href="/"> Accueil </a>
                    </li>
                    <li class ="nav-item">
                        <a class ="nav-link text-light pt-5" href="/proprietaires"><i class="bi bi-file-earmark-person"></i> Proprietaires </a>
                    </li>
                    <li class ="nav-item">
                        <a class ="nav-link text-light pt-5" href="/proprietes"><i class="bi bi-house-fill"></i> Proprietes </a>
                    </li>
                    <li class ="nav-item" style="margin-top: 350px;">
                        <a class ="nav-link pt-5 text-danger" href="/logout"><i class="bi bi-box-arrow-right"></i> Deconnexion </a>
                    </li>   
                </ul>
            </nav>
        </div>
    </div>

    <section class="main-content">
        <div class="container">
            <br>
            <div class="get-in-touch">
                <h1 class="title">Modifier proprietaire</h1>
                <form class="contact-form row" action="/proprietaires/edit/{{$Proprietaire['id']}}" method="post">
                @csrf
                    <select class="form-field col-lg-6 input-text " name="civilite" required>
                        <option value="1">Mr</option>
                        <option value="0">Mrs</option>
                    </select>
                    <div class="form-field col-lg-6">
                        <input id="nom" name="nom" class="input-text js-input" type="text" required value="{{$Proprietaire['nom']}}">
                        <label class="label" for="nom">Nom</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                        <input id="prenom" name="prenom" class="input-text js-input" type="text" required value="{{$Proprietaire['prenom']}}">
                        <label class="label" for="prenom">Prenom</label>
                    </div>
                    <select class="form-field col-lg-6 input-text " name="sexe" required>
                        <option value="1">Masculin</option>
                        <option value="0">Feminin</option>
                    </select>
                    <div class="form-field col-lg-6 ">
                        <input id="numero" name="numero" class="input-text js-input" type="number" required value="{{$Proprietaire['numero']}}">
                        <label class="label" for="numero">Contact</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input id="date_naissance" name="date_naissance" class="input-text js-input" type="date" required value="{{$Proprietaire['date_naissance']}}">
                        <label class="label" for="date_naissance">Date naissance</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input id="lieu_naissance" name="lieu_naissance" class="input-text js-input" type="text" required value="{{$Proprietaire['lieu_naissance']}}">
                        <label class="label" for="lieu_naissance">Lieu naissance</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input id="code_identite_national" name="code_identite_national" class="input-text js-input" type="number" required value="{{$Proprietaire['code_identite_national']}}">
                        <label class="label" for="code_identite_national">Code identite national</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input id="numero_identite_national" name="numero_identite_national" class="input-text js-input" type="number" required value="{{$Proprietaire['numero_identite_national']}}">
                        <label class="label" for="numero_identite_national">Numero identite national</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input class="submit-btn" type="submit" value="Modifier">
                    </div>
                </form>
                </div>

        </div>
    </section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>