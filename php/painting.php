<?php

	// Si des données arrive en POST
	if($_POST){

		// récuperation de la forme demandé
		$shape 	= $_POST['shapes'];

		// récuperation des données communes
		$x 		= $_POST['coordx'];
		$y		= $_POST['coordy'];
		$opacity= $_POST['opacity'];
		$fill	= $_POST['color'];
		$line	= $_POST['colorLine'];
		$linewidth = $_POST['linewidth'];
		$rotation = $_POST['rotation'];

		// récuperation des données spécifique à la forme + creation de l'Objet
		switch ($shape) {
			case 'rectangle':
				$width = $_POST['width'];
				$height = $_POST['height'];
				$shape = new Rectangle($width, $height);
			break;

			case 'square':
				$width = $_POST['width'];
				$shape = new Square($width);
			break;

			case 'triangle':
				$x2 = $_POST['x2'];
				$y2 = $_POST['y2'];
				$x3 = $_POST['x3'];
				$y3 = $_POST['y3'];
				$shape = new Triangle($x2, $y2, $x3, $y3);
			break;

			case 'elipse':
				$rx = $_POST['radioX'];
				$ry = $_POST['radioY'];
				$shape = new Elipse($rx, $ry);
			break;

			case 'circle':
				$rx = $_POST['radioX'];
				$shape = new Circle($rx);
			break;

		}

		// utilisation des méthodes pour préparer la forme
		$shape->setCoordonates($x,$y);
		$shape->setOpacity($opacity);
		$shape->setLineColor($line);
		$shape->setFillColor($fill);
		$shape->setLineWidth($linewidth);
		$shape->setRotation($rotation);
		// la forme est maintenant prète à être dessiner (->draw) plus tard dans la balise <svg>
	}
