<?php
// récupération des images via php depuis le dossier qui les contient
// Pour avoir le chemin du dossier actuel : __DIR__
// echo __DIR__;
$liste_images = scandir( __DIR__ . '/img/thumbnails');
// scandir() récupère tous les fichiers et dossier d'un dossier sous form de tableau array
// echo '<pre>'; print_r($liste_images); echo '</pre>';

// pour mélanger aléatoirement les images :
// shuffle($liste_images);


?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style>
	.mesThumbnails {
		cursor: pointer;
	}

	.figure {
		position: relative;
	}

	.figure-caption {
		position: absolute;
		bottom: 0;
		width: 100%;
		color: white;
		background-color: rgba(0, 0, 0, 0.5);
	}
	</style>

	<title>City Gallery photo</title>
</head>

<body>

	<div class="container-fluid">
		<div class="jumbotron">
			<h1 class="display-4">City Photo gallery</h1>
			<p class="lead">Gallerie photo des plus belle ville du monde, pour le plaisir des yeux</p>
			<hr class="my-4">
			<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<figure class="figure">
					<img src="img/images/adult-1867665_1280.jpg" alt="" id="imagePrincipale" class="w-100">
					<figcaption class="figure-caption">
						<h3 class="p-3">Mon portfolio : <span id="textCaption">une image de ville 1</span>.</h3>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-3 overflow-auto" style="height: 500px;">
				<div class="row">
					<?php 
                        $numero = 1;
                        foreach($liste_images AS $src) {

                            if( 
                                strpos($src, '.jpg') !== false || 
                                strpos($src, '.jpeg') !== false || 
                                strpos($src, '.png') !== false || 
                                strpos($src, '.gif') !== false ) {

                                echo '<div class="col-6 mb-3">';
                                echo '<img src="img/thumbnails/' . $src . '" class=" img-thumbnail mesThumbnails" alt="une image de ville ' . $numero . '">';
                                echo '</div>';
                            }

                            $numero++;
                        }

                    ?>
				</div>
			</div>
		</div>
	</div>



	<div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="img/images/adult-1867665_1280.jpg" alt="" id="imageModal" class="w-100">
				</div>
			</div>
		</div>
	</div>


	<!-- Bootstrap Bundle with Popper -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>

	<!-- js perso -->
	<script src="js/gallerie.js"></script>
</body>

</html>