<style>
    i
    {
        color: #fff;
    }
    .carte{
        background-color: #7DF19D;
        color: #fff;
        width: 20%;
        padding: 60px;
        font-size: 28px;
        border-radius: 30px;
        margin-top: 15%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        text-decoration: none;
    }
    .carte:hover{
        background-color: #363740;
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
    <title>Ts Immo</title>
</head>
<body>

    <div class="row w-50" style="z-index: 5px; position: absolute; margin-top: -50px;">
        <div class="col-3">
            
            <nav class ="navbar bg-dark">
                <a href="/">
                    <img src="components/tasnim" alt="Logo Ts Immo" class="img-responsive">
                </a>
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
                        <a class ="nav-link pt-5 text-danger" href="/proprietes"><i class="bi bi-box-arrow-right"></i> Deconnexion </a>
                    </li>   
                </ul>
            </nav>
        </div>
    </div>

    <main class="container mt-5">
        <section class="d-flex justify-content-around">
            <a class="carte d-flex justify-content-around" href="/proprietaires">
                <i class="bi bi-file-earmark-person"></i>
                <p>Proprietaire</p>
            </a>
            <a class="carte d-flex justify-content-around"  href="/proprietes">
                <i class="bi bi-house-fill"></i>
                <p>Proprietaire</p>
            </a>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>