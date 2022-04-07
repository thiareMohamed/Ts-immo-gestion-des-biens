<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
    body {
        background-color: #E5E5E5;
        font-family: "Roboto", sans-serif;
    }

    .main-content {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .table {
        border-spacing: 0 15px;
        border-collapse: separate;
    }
    .table thead tr th,
    .table thead tr td,
    .table tbody tr th,
    .table tbody tr td {
        vertical-align: middle;
        border: none;
    }
    .table thead tr th:nth-last-child(1),
    .table thead tr td:nth-last-child(1),
    .table tbody tr th:nth-last-child(1),
    .table tbody tr td:nth-last-child(1) {
        text-align: center;
    }
    .table tbody tr {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    .table tbody tr td {
        background: #fff;
    }
    .table tbody tr td:nth-child(1) {
        border-radius: 5px 0 0 5px;
    }
    .table tbody tr td:nth-last-child(1) {
        border-radius: 0 5px 5px 0;
    }

    .user-info {
        display: flex;
        align-items: center;
    }
    .user-info__img img {
        margin-right: 15px;
        height: 55px;
        width: 55px;
        border-radius: 45px;
        border: 3px solid #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .active-circle {
        height: 10px;
        width: 10px;
        border-radius: 10px;
        margin-right: 5px;
        display: inline-block;
    }   
</style>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <title>TS-immo proprietaires</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
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
			<div class="d-flex justify-content-between">
                <h1>Proprietaire</h1>
                <div>
                <a class="btn btn-lg text-light" href="/proprietairesAdd" style="background-color: #7DF19D;">Ajouter</a>
                <!-- <a class="btn btn-lg text-light" href="proprietairesEdit" style="background-color: #7DF19D;">Modifier</a> -->
                </div>
            </div>
			<br>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Prenom & Nom</th>
						<th>Civilite</th>
						<th>Lieu de naissance</th>
						<th>Sexe</th>
						<th>CNI</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                @foreach($Proprietaires as $Proprietaire)
					<tr>
						<td>
							<div class="user-info">
								<div class="user-info__img">
									<img src="user1.jpg" alt="User Img">
								</div>
								<div class="user-info__basic">
									<h5 class="mb-0">{{$Proprietaire['prenom']}} {{$Proprietaire['nom']}}</h5>
									<p class="text-muted mb-0">{{$Proprietaire['numero']}}</p>
								</div>
							</div>
						</td>
                        <td>{{$Proprietaire['civilite']? "Mr" : "Mrs"}}</td>
						<td> {{$Proprietaire['lieu_naissance']}} </td>
						<td>{{$Proprietaire['sexe']? "Masculine" : "Feminine" }}</td>
						<td>{{$Proprietaire['numero_identite_national']}}</td>
						<td>
							<div class="dropdown open">
								<a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="triggerId1">
									<a class="dropdown-item" href="/proprietaires/{{$Proprietaire['id']}}"><i class="fa fa-pencil mr-1"></i> Edit</a>
									<a class="dropdown-item text-danger delete" href="/proprietaires/delete/{{$Proprietaire['id']}}"><i class="fa fa-trash mr-1"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
                @endforeach
					
				</tbody>
			</table>
		</div>
	</section>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="">
        document.querySelector(".delete").addEventListener("click", ()=>{
            let confirm = confirm("Are you sure you want to delete");
        })
    </script>
</body>
</html>