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
                        <a class ="nav-link text-light pt-5" href="/proprietes"><i class="bi bi-house-fill"></i> Proprie    tes </a>
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
                <form class="contact-form row" action="/proprietes/edit/{{$Propriete['id']}}" method="post">
                @csrf
                    <select class="form-field col-lg-6 input-text " name="proprietaire_id" required>
                        @foreach($Proprietaires as $Proprietaire)
                            <option value="{{$Proprietaire->id}}">{{$Proprietaire->prenom}} {{$Proprietaire->nom}}</option>
                        @endforeach
                    </select>
                    <select class="form-field col-lg-6 input-text " name="type_propriete_id" required>
                        @foreach($Type_proprietes as $Type_propriete)
                            <option value="{{$Type_propriete->id}}">{{$Type_propriete->libelle}}</option>
                        @endforeach
                    </select>
                    <select class="form-field col-lg-6 input-text " name="quartier_id" required>
                        @foreach($Quartiers as $Quartier)
                            <option value="{{$Quartier->id}}">{{$Quartier->libelle}}</option>
                        @endforeach
                    </select>
                    <select class="form-field col-lg-6 input-text " name="statut" required>
                        <option value="1">Loué</option>
                        <option value="0">Non loué</option>
                    </select>
                    <div class="form-field col-lg-6">
                        <input id="montant" name="montant" class="input-text js-input" type="number" required value="{{$Propriete->montant}}">
                        <label class="label" for="montant">Montant</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="surface" name="surface" class="input-text js-input" type="number" required value="{{$Propriete->surface}}">
                        <label class="label" for="surface">surface</label>
                    </div>

                    <div class="form-field col-lg-6">
                        <input id="nombre_piece" name="nombre_piece" class="input-text js-input" type="number" required value="{{$Propriete->nombre_piece}}">
                        <label class="label" for="nombre_piece">Nombre de piece</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="nombre_etage" name="nombre_etage" class="input-text js-input" type="number" required value="{{$Propriete->nombre_etage}}">
                        <label class="label" for="nombre_etage">Nombre d'etage</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="location_etage" name="location_etage" class="input-text js-input" type="number" required value="{{$Propriete->location_etage}}">
                        <label class="label" for="location_etage">Location etage</label>
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