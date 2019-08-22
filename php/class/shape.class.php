<?php

	abstract class Shape{
		protected $coordX;
		protected $coordY;
		protected $stroke;
		protected $fill;
		protected $strokewidth;
		protected $opacity;
		protected $rotation;

		abstract public function setCoordonates($x, $y);

		abstract public function draw();

		public function setLineColor($stroke){
			// data came from input type color (no check needed)
			$this->stroke = $stroke;
		}

		public function setFillColor($color){
			// data came from input type color (no check needed)
			$this->fill = $color;
		}

		public function setLineWidth($strokeWidth){
			if (is_numeric($strokeWidth)) {
				$this->strokewidth = $strokeWidth;
			}
		}

		public function setOpacity($op){
			if (is_numeric($op)) {
				$this->opacity = $op;
			}

		}

		public function setRotation($rotation){
			$this->rotation = $rotation;
		}

}
